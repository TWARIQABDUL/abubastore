import { createContext, useContext, useState, useEffect, ReactNode } from 'react';
import { jwtDecode } from 'jwt-decode';
import { useNavigate } from 'react-router-dom';
import axios from 'axios';

interface AuthContextType {
  isAuthenticated: boolean;
  login: (token: string) => void;
  logout: () => void;
  checkTokenValidity: () => Promise<boolean>; 
}

const AuthContext = createContext<AuthContextType | null>(null);
const baseUrl = "https://store.thousandsofts.com/backend";

export const useAuth = () => {
  const context = useContext(AuthContext);
  if (!context) {
    throw new Error('useAuth must be used within an AuthProvider');
  }
  return context;
};

export const AuthProvider = ({ children }: { children: ReactNode }) => {
  const navigate = useNavigate();
  const [isAuthenticated, setIsAuthenticated] = useState<boolean>(false);

  const login = (token: string) => {
    localStorage.setItem('token', token);
    setIsAuthenticated(true);
  };

  const logout = () => {
    localStorage.removeItem('token');
    setIsAuthenticated(false);
    navigate('/authentication/login');
  };

  const checkTokenValidity = async (): Promise<boolean> => {
    const token = localStorage.getItem('token');
    if (!token) {
      logout();
      return false;
    }

    try {
      // Check token expiry on client-side
      const decoded: any = jwtDecode(token);
      const currentTime = Date.now() / 1000;
      if (decoded.exp < currentTime) {
        logout(); // Log out if token is expired
        return false;
      }

      // Validate token with the server
      const response = await axios.post(`${baseUrl}/check-access`, null, {
        headers: {
          Authorization: `Bearer ${token}`,
        },
      });

      if (response.status === 200) {
        return true; // Token is valid
      } else {
        logout(); // Log out if server invalidates the token
        return false;
      }
    } catch (error) {
      console.error('Error validating token:', error);
      logout();
      return false;
    }
  };

  useEffect(() => {
    const checkAuthStatus = async () => {
      const isValid = await checkTokenValidity();
      setIsAuthenticated(isValid);
    };

    checkAuthStatus();
    const interval = setInterval(async () => {
      const isValid = await checkTokenValidity();
      setIsAuthenticated(isValid);
      
    }, 1 * 60 * 1000); // 5 minutes in milliseconds

    // Cleanup the interval on component unmount
    return () => clearInterval(interval);
  }, []);

  return (
    <AuthContext.Provider value={{ isAuthenticated, login, logout, checkTokenValidity }}>
      {children}
    </AuthContext.Provider>
  );
};
