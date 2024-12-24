import { Box, Paper, Typography } from '@mui/material';
import EarningsChart from './EarningsChart';
import { ReactElement, useEffect, useRef, useState } from 'react';
import EChartsReactCore from 'echarts-for-react/lib/core';
import { currencyFormat } from 'helpers/format-functions';
import axios from 'axios';

const Earnings = (): ReactElement => {
  const chartRef = useRef<EChartsReactCore | null>(null);
  const [totalEarnings, setTotalEarnings] = useState<number>(0);
  const [profitPercentage, setProfitPercentage] = useState<number>(0);
  const baseUrl = "http://localhost/abuba-ecommerce-backend"

  useEffect(() => {
    const fetchEarnings = async () => {
      try {
        const response = await axios.get(`${baseUrl}/earning`);
        const { total_earnings, profit_percentage } = response.data;

        setTotalEarnings(parseFloat(total_earnings));
        setProfitPercentage(profit_percentage);
      } catch (error) {
        console.error('Error fetching earnings:', error);
      }
    };

    fetchEarnings();

    const handleResize = () => {
      if (chartRef.current) {
        const echartsInstance = chartRef.current.getEchartsInstance();
        echartsInstance.resize({ width: 'auto', height: 'auto' });
      }
    };
    window.addEventListener('resize', handleResize);
    return () => {
      window.removeEventListener('resize', handleResize);
    };
  }, [chartRef]);

  return (
    <Paper sx={{ p: { xs: 4, sm: 8 }, height: 1 }}>
      <Typography variant="h4" color="common.white" mb={2.5}>
        Earnings
      </Typography>
      <Typography variant="body1" color="text.primary" mb={4.5}>
        Total Expense
      </Typography>
      <Typography
        variant="h1"
        color="primary.main"
        mb={4.5}
        fontSize={{ xs: 'h2.fontSize', sm: 'h1.fontSize' }}
      >
        {currencyFormat(totalEarnings, { useGrouping: false })}
      </Typography>
      <Typography variant="body1" color="text.primary" mb={15}>
        Profit is {profitPercentage}% More than last Month
      </Typography>
      <Box
        flex={1}
        sx={{
          position: 'relative',
        }}
      >
        <EarningsChart
          value={profitPercentage}
          chartRef={chartRef}
          sx={{
            display: 'flex',
            justifyContent: 'center',
            flex: '1 1 0%',
            maxHeight: 152,
          }}
        />
        <Typography
          variant="h1"
          color="common.white"
          textAlign="center"
          mx="auto"
          position="absolute"
          left={0}
          right={0}
          bottom={0}
        >
          {profitPercentage}%
        </Typography>
      </Box>
    </Paper>
  );
};

export default Earnings;
