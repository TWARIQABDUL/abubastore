import React, { ReactElement, useEffect, useState } from 'react';
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
  SelectChangeEvent
} from '@mui/material';
import axios from 'axios';

const AddProduct = (): ReactElement => {
  const baseUrl = "https://store.thousandsofts.com/backend";
  const token = localStorage.getItem('token');
  const [categories, setCategories] = useState([]);
  const [collections, setCollections] = useState([]);
  const [ranks, setRanks] = useState([]);
  const [formData, setFormData] = useState({
    productName: '',
    price: '',
    stock: '',
    category: '',
    collection: '',
    rank: '',
    image: null as File | null, // Set image as File | null
    description: '',
  });

  // Fetch categories, ranks, and collections
  useEffect(() => {
    axios
      .get(`${baseUrl}/categories`)
      .then((response) => {
        const { categories, collections, ranks } = response.data;
        setCategories(categories);
        setCollections(collections);
        setRanks(ranks);
      })
      .catch((error) => {
        console.error('Error fetching data:', error);
      });
  }, []);

  const handleChange = (
    e: React.ChangeEvent<HTMLInputElement | HTMLTextAreaElement | { value: unknown }>
  ) => {
    const { name, value } = e.target as HTMLInputElement;
    setFormData({
      ...formData,
      [name]: value,
    });
  };

  const handleSelectChange = (e: SelectChangeEvent<string>) => {
    const { name, value } = e.target;
    setFormData({
      ...formData,
      [name]: value,
    });
  };

  const handleFileChange = (e: React.ChangeEvent<HTMLInputElement>) => {
    if (e.target.files) {
      setFormData({ ...formData, image: e.target.files[0] });
    }
  };


  const uploadProduct = async() => {
    const form = new FormData();
        form.append('productName', formData.productName);
        form.append('price', formData.price);
        form.append('stock', formData.stock);
        form.append('category', formData.category);
        form.append('collection', formData.collection);
        form.append('rank', formData.rank);
        form.append('description', formData.description);

        // Append the image file only if it's not null
        if (formData.image) {
            form.append('image', formData.image);
        }
    axios.post(`${baseUrl}/add-product`, form,{
      headers: {
        'Authorization': `Bearer ${token}`  // No need for stringifying, just set the token directly
      }
    })
      .then(_res => {
        setFormData({
          productName: '',
          price: '',
          stock: '',
          category: '',
          collection: '',
          rank: '',
          image: null,
          description: '',
        });
      }).catch(_e=>{
        // console.log("fucked up",e);
        
      })
  };

  const submitData = async () => {
    axios
      .post(`${baseUrl}/check-access`, null, {
        headers: {
          'Authorization': `Bearer ${token}`  // No need for stringifying, just set the token directly
        }
      })
      .then((response) => {        
        if (response.data.message === "Valid Token") {
          // console.log("hhhhhh");
          
          uploadProduct().then(some=>{
            console.log(some);
            alert("Product Added succesfull")
          });
        }
      })
      .catch((error) => {
        console.error('Error fetching data:', error);
      });
    console.log("submit");
  };

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
              ':hover': { bgcolor: 'background.default' },
              ':focus': { bgcolor: 'background.default' },
              ':focus-within': { bgcolor: 'background.default' },
            },
            borderRadius: 2,
          }}
          name="productName"
          value={formData.productName}
          onChange={handleChange}
        />
        <FormControl
          fullWidth
          variant="filled"
          sx={{
            '.MuiFilledInput-root': {
              bgcolor: 'grey.A100',
              ':hover': { bgcolor: 'background.default' },
              ':focus-within': { bgcolor: 'background.default' },
            },
            borderRadius: 2,
          }}
        >
          <InputLabel id="category-label">Category</InputLabel>
          <Select
            labelId="category-label"
            name="category"
            value={formData.category}
            onChange={handleSelectChange}
          >
            {categories.map((option: any) => (
              <MenuItem key={option.category_id} value={option.category_id}>
                {option.c_name}
              </MenuItem>
            ))}
          </Select>
        </FormControl>
        <TextField
          fullWidth
          variant="filled"
          label="Price"
          name="price"
          type="number"
          value={formData.price}
          onChange={handleChange}
          sx={{
            '.MuiFilledInput-root': {
              bgcolor: 'grey.A100',
              ':hover': { bgcolor: 'background.default' },
              ':focus': { bgcolor: 'background.default' },
              ':focus-within': { bgcolor: 'background.default' },
            },
            borderRadius: 2,
          }}
        />
        <TextField
          fullWidth
          variant="filled"
          label="Stock Quantity"
          name="stock"
          type="number"
          value={formData.stock}
          onChange={handleChange}
          sx={{
            '.MuiFilledInput-root': {
              bgcolor: 'grey.A100',
              ':hover': { bgcolor: 'background.default' },
              ':focus': { bgcolor: 'background.default' },
              ':focus-within': { bgcolor: 'background.default' },
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
              ':hover': { bgcolor: 'background.default' },
              ':focus-within': { bgcolor: 'background.default' },
            },
            borderRadius: 2,
          }}
        >
          <InputLabel id="collection-label">Collection</InputLabel>
          <Select
            labelId="collection-label"
            name="collection"
            value={formData.collection}
            onChange={handleSelectChange}
          >
            {collections.map((option: any) => (
              <MenuItem key={option.collection_id} value={option.collection_id}>
                {option.collection_name}
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
              ':hover': { bgcolor: 'background.default' },
              ':focus-within': { bgcolor: 'background.default' },
            },
            borderRadius: 2,
          }}
        >
          <InputLabel id="rank-label">Rank</InputLabel>
          <Select
            labelId="rank-label"
            name="rank"
            value={formData.rank}
            onChange={handleSelectChange}
          >
            {ranks.map((option: any) => (
              <MenuItem key={option.rank_id} value={option.rank_id}>
                {option.rank_name}
              </MenuItem>
            ))}
          </Select>
        </FormControl>
        <TextField
          fullWidth
          variant="filled"
          label="Product Image"
          name="image"
          type="file"
          onChange={handleFileChange}
          sx={{
            '.MuiFilledInput-root': {
              bgcolor: 'grey.A100',
              ':hover': { bgcolor: 'background.default' },
              ':focus': { bgcolor: 'background.default' },
              ':focus-within': { bgcolor: 'background.default' },
            },
            borderRadius: 2,
          }}
        />
      </Stack>
      <Stack gap={10}>
        <TextField
          fullWidth
          variant="filled"
          label="Product Description"
          multiline
          name="description"
          rows={4}
          value={formData.description}
          onChange={handleChange}
          sx={{
            '.MuiFilledInput-root': {
              bgcolor: 'grey.A100',
              ':hover': { bgcolor: 'background.default' },
              ':focus': { bgcolor: 'background.default' },
              ':focus-within': { bgcolor: 'background.default' },
              mb: 5,
            },
            borderRadius: 2,
          }}
        />
      </Stack>
      <Button
        onClick={submitData}
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
