import { ReactElement, useEffect, useState } from 'react';
import axios from 'axios';
import { Box, Paper, Typography } from '@mui/material';
import SaleCard from './SaleCard';

interface SaleItem {
  value: number | string;
  description: string;
  id?: number;
  icon: string;
  title: string;
  color: string;
}

const TodaysSales = (): ReactElement => {
  const baseUrl ="https://store.thousandsofts.com/backend"
  const [salesData, setSalesData] = useState<SaleItem[]>([]);
  const [loading, setLoading] = useState<boolean>(true);
  const [error, setError] = useState<string | null>(null);

  useEffect(() => {
    const fetchSalesData = async () => {
      try {
        // Replace this with your actual endpoint
        const response = await axios.get(`${baseUrl}/insight`);
        
        // Assuming the API response contains an array of sales items
        setSalesData(response.data);
        setLoading(false);
        console.log(response.data);
        
      } catch (err) {
        console.error('Error fetching sales data:', err);
        setError('Failed to fetch sales datahhhh');
        setLoading(false);
      }
    };

    fetchSalesData();
  }, []);

  if (loading) {
    return <Typography>Loading...</Typography>;
  }

  if (error) {
    return <Typography color="error">{error}</Typography>;
  }

  return (
    <Paper sx={{ p: { xs: 4, sm: 8 }, height: 1 }}>
      <Typography variant="h4" color="common.white" mb={1.25}>
        Today’s Sales
      </Typography>
      <Typography variant="subtitle2" color="text.disabled" mb={6}>
        Sales Summary
      </Typography>
      <Box display="grid" gridTemplateColumns="repeat(12, 1fr)" gap={{ xs: 4, sm: 6 }}>
        {salesData.map((saleItem) => (
          <Box key={saleItem.id} gridColumn={{ xs: 'span 12', sm: 'span 6', lg: 'span 3' }}>
            <SaleCard saleItem={saleItem || []} />
          </Box>
        ))}
      </Box>
    </Paper>
  );
};

export default TodaysSales;
