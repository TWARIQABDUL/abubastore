import { ReactElement } from 'react';
import { Box, Stack, Typography } from '@mui/material';
import Image from 'components/base/Image';
// import { SaleItem } from 'data/sales-data';
export interface SaleItem {
  value: number |string;
  description: string;
  id?: number;
  icon: string;
  title: string;
  color: string;
}
const SaleCard = ({ saleItem }: { saleItem: SaleItem }): ReactElement => {
  return (
    <Stack gap={6} p={5} borderRadius={4} height={1} bgcolor="background.default">
      <Image src={`src/${saleItem.icon}`} alt={saleItem.title} width={26} height={26} />
      <Box>
        <Typography variant="h4" color="common.white" mb={4}>
          {saleItem.value}
        </Typography>
        <Typography variant="body1" color="text.secondary" mb={2}>
          {saleItem.title}
        </Typography>
        <Typography variant="body2" color={saleItem.color} lineHeight={1.25}>
          {saleItem.description}
        </Typography>
      </Box>
    </Stack>
  );
};

export default SaleCard;
