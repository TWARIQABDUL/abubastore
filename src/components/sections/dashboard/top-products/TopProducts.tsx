import { ReactElement, useEffect, useState } from 'react';
import {
  Paper,
  Table,
  TableRow,
  TableBody,
  TableCell,
  TableHead,
  Typography,
  TableContainer,
} from '@mui/material';
import axios from 'axios';
import ProductItemRow from './ProductItemRow';
import SimpleBar from 'simplebar-react';

const TopProducts = (): ReactElement => {
  const [products, setProducts] = useState<any[]>([]); // State to store fetched product data
  const baseUrl ="http://localhost/abuba-ecommerce-backend"

  useEffect(() => {
    // Axios request to fetch product data
    axios
      .get(`${baseUrl}/top-product`) // Replace with the correct URL
      .then((response) => {
        setProducts(response.data); // Store the fetched data
      })
      .catch((error) => {
        console.error('Error fetching products:', error); // Handle any errors
      });
  }, []);

  return (
    <Paper sx={{ p: { xs: 4, sm: 8 }, height: 1 }}>
      <Typography variant="h4" color="common.white" mb={6}>
        Top Products
      </Typography>
      <TableContainer component={SimpleBar}>
        <Table sx={{ minWidth: 440 }}>
          <TableHead>
            <TableRow>
              <TableCell align="left">#</TableCell>
              <TableCell align="left">Name</TableCell>
              <TableCell align="left">Popularity</TableCell>
              <TableCell align="center">Sales</TableCell>
            </TableRow>
          </TableHead>
          <TableBody>
            {products.map((product) => (
              <ProductItemRow key={product.id} productItem={product} />
            ))}
          </TableBody>
        </Table>
      </TableContainer>
    </Paper>
  );
};

export default TopProducts;
