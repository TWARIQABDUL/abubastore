import { Theme } from '@mui/material';
import { Components } from '@mui/material/styles/components';

const Select: Components<Omit<Theme, 'components'>>['MuiSelect'] = {
  defaultProps: {},
  styleOverrides: {
    root: ({ theme }) => ({
      gap: theme.spacing(1),
    }),
  },
};

export default Select;
