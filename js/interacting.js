const apiBaseURL = "http://localhost/abuba-ecommerce-backend";
const container = document.getElementById('promocontainer');
const allproduct = document.getElementById('allproduct');
const promo = document.getElementById('promo');
const productDetails = document.getElementById('productDetails');
const currentUrl = window.location.href;
const url = new URL(currentUrl);
const productId = url.searchParams.get('id');
console.log(productId);
// Fetch and store all products
const fetchProducts = async () => {
    try {
        const response = await fetch(`${apiBaseURL}/product`);
        const products = await response.json();
        console.log(products);
        return products;
    } catch (error) {
        console.error("Error fetching products:", error);
        return [];
    }
};
const fetchProductWithId = async (id) => {
    try {
        // Construct the URL with the id as a query parameter
        const response = await fetch(`${apiBaseURL}/product?id=${id}`, {
            method: 'GET',
            headers: {
                'Content-Type': 'application/json',
            },
        });
        
        if (!response.ok) {
            throw new Error(`HTTP error! status: ${response.status}`);
        }

        const product = await response.json();
        console.log(product);
        return product;
    } catch (error) {
        console.error("Error fetching product:", error);
        return null;
    }
};
fetchProductWithId(productId).then(data=>console.log(data)
)

const displayFeaturedProducts = (products) => {
    products.forEach(product => {
        const productHTML = `
        <div class="col-lg-3 col-md-6 col-12 mix ${product.rank}">
            <div class="product-grid">
                <div class="product-image">
                    <a href="product-details.php?id=${product.id}">
                        <img class="pic-1" src="img/product/p1.jpg" alt="product image">
                        <img class="pic-2" src="img/product/p1.jpg" alt="product image">
                    </a>
                    <ul class="social">
                        <li><a href="" data-tip="Quick View"><i class="pe-7s-search"></i></a></li>
                        <li><a href="" data-tip="Add to Wishlist"><i class="pe-7s-like"></i></a></li>
                        <li><a href="" data-tip="Add to Cart"><i class="pe-7s-cart"></i></a></li>
                    </ul>
                </div>
                <div class="product-content">
                    <ul class="rating">
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star"></li>
                    </ul>
                    <h3 class="title"><a href="#">${product.p_name}</a></h3>
                    <div class="price">$${product.price}
					
					</div>
                </div>
            </div>
        </div>
        `;
        container.innerHTML += productHTML;
    });
};

const displayPromoProducts = (products) => {
    const limitedProducts = products.slice(0, 3);
    limitedProducts.forEach(product => {
        const productContainer = `
        <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="single_promo bg-color">
                <img src="img/product/bag.jpg" alt="promo image">
                <div class="box-content">
                    <div class="promo-content">
                        <span class="post">${product.collection_name}</span>
                        <h3 class="title">${product.p_name}</h3>
                        <a href="product-details.php?id=${product.id}">Shop Now</a>
                    </div>
                </div>
            </div>
        </div>
        `;
        promo.innerHTML += productContainer;
    });
};

const displayAllProducts = (products) => {
    products.forEach(product => {
        const featureProductHTML = `
        <div class="col-lg-3 col-md-6 col-12">
            <div class="product-grid">
                <div class="product-image">
                    <a href="product-details.php?id=${product.id}">
                        <img class="pic-1" src="img/product/p1.jpg" alt="product image">
                        <img class="pic-2" src="img/product/p1.jpg" alt="product image">
                    </a>
                    <ul class="social">
                        <li><a href="" data-tip="Quick View"><i class="pe-7s-search"></i></a></li>
                        <li><a href="" data-tip="Add to Wishlist"><i class="pe-7s-like"></i></a></li>
                        <li><a href="" data-tip="Add to Cart"><i class="pe-7s-cart"></i></a></li>
                    </ul>
                    <span class="product-new-label">Sale</span>
                </div>
                <div class="product-content">
                    <ul class="rating">
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star"></li>
                    </ul>
                    <h3 class="title"><a href="#">${product.p_name}</a></h3>
                    <div class="price">$${product.price}
					<span>$${((product.price * 100) / 3).toFixed(2)}</span></div>
                </div>
            </div>
        </div>
        `;
        allproduct.innerHTML += featureProductHTML;
    });
};
const displayProducDetails = (product) => {
    // products.forEach(product => {
        const detailOfProduct = `
        <div class="col-md-6 col-xs-12">
					<div class="pd_img fix">
						<a class="venobox" href="img/product/bag.jpg"><img src="img/product/bag.jpg" alt="" /></a>
					</div>
				</div>
				<!-- Product Details Content -->
				<div class="col-md-6 col-xs-12">
					<div class="prdct_dtls_content">
						<h3 class="title">${product.p_name}</a></h3>
						<div class="pd_price_dtls fix">
							<!-- Product Price -->
							<div class="pd_price">
								<span class="new">$ ${product.price}</span>
								<span class="old">(${((product.price * 100) / 3).toFixed(2)})</span>
							</div>
							<!-- Product Ratting -->
							<div class="pd_ratng">
								<div class="rtngs">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star-half-o"></i>
								</div>
							</div>
						</div>
						<div class="pd_text">
							<h4>overview:</h4>
							<p><span>${product.p_discription}</span>.</p>
						</div>
						<div class="pd_img_size fix">
							<h4>size:</h4>
							<a href="#">s</a>
							<a href="#">m</a>
							<a href="#">l</a>
							<a href="#">xl</a>
							<a href="#">xxl</a>
						</div>
						<div class="pd_clr_qntty_dtls fix">
							<div class="pd_clr">
								<h4>color:</h4>
								<a href="#" class="active" style="background: #ffac9a;">color 1</a>
								<a href="#" style="background: #ddd;">color 2</a>
								<a href="#" style="background: #000000;">color 3</a>
							</div>
							<div class="pd_qntty_area">
								<h4>quantity:</h4>
								<div class="pd_qty fix">
									<input value="1" name="qttybutton" class="cart-plus-minus-box" type="number">
								</div>
							</div>
						</div>
						<!-- Product Action -->
						<div class="pd_btn fix">
							<a class="btn btn-default acc_btn">add to bag</a>
							<a class="btn btn-default acc_btn btn_icn"><i class="fa fa-heart"></i></a>
							<a class="btn btn-default acc_btn btn_icn"><i class="fa fa-refresh"></i></a>
						</div>
						<div class="pd_share_area fix">
							<h4>share this on:</h4>
							<div class="pd_social_icon">
								<a class="facebook" href="#"><i class="fa fa-facebook"></i></a>
								<a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
								<a class="vimeo" href="#"><i class="fa fa-vimeo"></i></a>
								<a class="google_plus" href="#"><i class="fa fa-google-plus"></i></a>
								<a class="tumblr" href="#"><i class="fa fa-tumblr"></i></a>
								<a class="pinterest" href="#"><i class="fa fa-pinterest"></i></a>
							</div>
						</div>
					</div>
				</div>
        `;
        productDetails.innerHTML += detailOfProduct;
    // });
};

const getSessionData = async () => {
    const storedSessionId = localStorage.getItem('session_id');

    // Use stored session ID if available
    if (storedSessionId) {
        return storedSessionId;
    }

    // Fetch new session ID from the server
    const response = await fetch(`${apiBaseURL}/defaul-user`,{
		method: 'POST',
		headers: {
			'Content-Type': 'application/json'
		},
	});
    const data = await response.json();

    const sessionId = data.user_id || data.guest_id;
	// console.log(data);
	
    if (sessionId) {
        // Store the session ID for future use
        localStorage.setItem('session_id', sessionId);
    }

    return sessionId;
};
getSessionData().then(res => console.log(res)
)

// Load and display products
fetchProducts().then(products => {
    if (container) {
		displayFeaturedProducts(products);
	}
	
	if (promo) {
		displayPromoProducts(products);
	}
	
	if (allproduct) {
		displayAllProducts(products);
	}
});
if (productId) {
	fetchProductWithId(productId).then((product)=>{
		displayProducDetails(product)
	})
}

