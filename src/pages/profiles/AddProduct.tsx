import React, { ReactElement, useState } from 'react';
import {
  TextField,
  Typography,
  Paper,
  Stack,
  Select,
  MenuItem,
  InputLabel,
  FormControl,
  Button,
} from '@mui/material';

const AddProduct = ():ReactElement => {
  const category = [
    { value: 'option1', label: 'Option 1' },
    { value: 'option2', label: 'Option 2' },
    { value: 'option3', label: 'Option 3' },
  ];

  const [selectedCategory, setSelectedCategory] = useState('');
  const [description, setDiscription] = useState("")
  function handleDescriptionChange(e: React.ChangeEvent<HTMLInputElement | HTMLTextAreaElement>) {
    setDiscription(e.target.value)
  }

  return (
    <Paper sx={{ p: { xs: 4, sm: 8 } }}>
      <Typography variant="h4" color="common.white" mb={1.25}>
        Add Product
      </Typography>
      <Stack gap={5} direction={{ xs: 'column', sm: 'row' }}>
        <TextField
          fullWidth
          variant="filled"
          label="Product Name"
          type="text"
          sx={{
            '.MuiFilledInput-root': {
              bgcolor: 'grey.A100',
              ':hover': {
                bgcolor: 'background.default',
              },
              ':focus': {
                bgcolor: 'background.default',
              },
              ':focus-within': {
                bgcolor: 'background.default',
              },
            },
            borderRadius: 2,
          }}
        />
        <FormControl
          fullWidth
          variant="filled"
          sx={{
            '.MuiFilledInput-root': {
              bgcolor: 'grey.A100',
              ':hover': {
                bgcolor: 'background.default',
              },
              ':focus-within': {
                bgcolor: 'background.default',
              },
            },
            borderRadius: 2,
          }}
        >
          <InputLabel id="category-label">Category</InputLabel>
          <Select
            labelId="category-label"
            value={selectedCategory}
            onChange={(e) => setSelectedCategory(e.target.value)}
          >
            {category.map((option) => (
              <MenuItem key={option.value} value={option.value}>
                {option.label}
              </MenuItem>
            ))}
          </Select>
        </FormControl>
        <TextField
          fullWidth
          variant="filled"
          label="Price"
          type="number"
          sx={{
            '.MuiFilledInput-root': {
              bgcolor: 'grey.A100',
              ':hover': {
                bgcolor: 'background.default',
              },
              ':focus': {
                bgcolor: 'background.default',
              },
              ':focus-within': {
                bgcolor: 'background.default',
              },
            },
            borderRadius: 2,
          }}
        />
        <TextField
          fullWidth
          variant="filled"
          label="Stock Quantity"
          type="number"
          sx={{
            '.MuiFilledInput-root': {
              bgcolor: 'grey.A100',
              ':hover': {
                bgcolor: 'background.default',
              },
              ':focus': {
                bgcolor: 'background.default',
              },
              ':focus-within': {
                bgcolor: 'background.default',
              },
            },
            borderRadius: 2,
          }}
        />
      </Stack>
      <Stack gap={5} direction={{ xs: 'column', sm: 'row' }}>
        <FormControl
          fullWidth
          variant="filled"
          sx={{
            '.MuiFilledInput-root': {
              bgcolor: 'grey.A100',
              ':hover': {
                bgcolor: 'background.default',
              },
              ':focus-within': {
                bgcolor: 'background.default',
              },
            },
            borderRadius: 2,
          }}
        >
          <InputLabel id="category-label">Collection</InputLabel>
          <Select
            labelId="category-label"
            value={selectedCategory}
            onChange={(e) => setSelectedCategory(e.target.value)}
          >
            {category.map((option) => (
              <MenuItem key={option.value} value={option.value}>
                {option.label}
              </MenuItem>
            ))}
          </Select>
        </FormControl>
        <FormControl
          fullWidth
          variant="filled"
          sx={{
            '.MuiFilledInput-root': {
              bgcolor: 'grey.A100',
              ':hover': {
                bgcolor: 'background.default',
              },
              ':focus-within': {
                bgcolor: 'background.default',
              },
            },
            borderRadius: 2,
          }}
        >
          <InputLabel id="category-label">Rank</InputLabel>
          <Select
            labelId="category-label"
            value={selectedCategory}
            onChange={(e) => setSelectedCategory(e.target.value)}
          >
            {category.map((option) => (
              <MenuItem key={option.value} value={option.value}>
                {option.label}
              </MenuItem>
            ))}
          </Select>
        </FormControl>
        <TextField
          fullWidth
          variant="filled"
          label="Product Image"
          type="file"
          sx={{
            '.MuiFilledInput-root': {
              bgcolor: 'grey.A100',
              ':hover': {
                bgcolor: 'background.default',
              },
              ':focus': {
                bgcolor: 'background.default',
              },
              ':focus-within': {
                bgcolor: 'background.default',
              },
            },
            borderRadius: 2,
          }}
        />
      </Stack>
      <Stack
      gap={10}
      >
      <TextField
        fullWidth
        variant="filled"
        label="Product Description"
        multiline
        rows={4} // Adjust the height of the textarea
        value={description}
        onChange={(e) => handleDescriptionChange(e)}
        sx={{
          '.MuiFilledInput-root': {
            bgcolor: 'grey.A100',
            ':hover': {
              bgcolor: 'background.default',
            },
            ':focus': {
              bgcolor: 'background.default',
            },
            ':focus-within': {
              bgcolor: 'background.default',
            },
            mb: 5
          },
          borderRadius: 2,
        }}
      />
      </Stack>
      <Button
        // onClick={handleSubmit}
        sx={{
          fontWeight: 'fontWeightRegular',
        }}
      >
        Add Product
      </Button>

    </Paper>
  );
};

export default AddProduct;
