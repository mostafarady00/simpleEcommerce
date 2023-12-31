@extends("layouts.index")

@section("title")
  Home
@endsection

@section("content")
<div class="container">
    <main>
        <div class="slider">
            <div class="slide-1">
                <img src="img/slider/slide-1.jpg">
                <div class="slider-text">
                    <h3>Sale 40% off</h3>
                    <h2>Men's Watches</h2>
                    <a href="#">Shop Now</a>
                </div>
            </div>
            <div class="slide-2">
                <img src="img/slider/slide-2.jpg">
                <div class="slider-text">
                    <h3>Sale 20% off</h3>
                    <h2>Women's Fashion</h2>
                    <a href="#">Shop Now</a>
                </div>
            </div>
            <div class="slide-3">
                <img src="img/slider/slide-3.jpg">
                <div class="slider-text">
                    <h3>Sale 50% off</h3>
                    <h2>Women's Collection</h2>
                    <a href="#">Shop Now</a>
                </div>
            </div>
        </div> <!-- slider -->

        <div class="new-product-section">
            <div class="product-section-heading">
                <h2>Tranding Products <img src="img/icons/increase.png"></h2>
                <h3>Most selling product for the month</h3>
            </div>
            <div class="product-content">
                <div class="product">
                    <a href="product.html">
                        <img src="img/product/img1.jpg">
                    </a>
                    <div class="product-detail">
                        <h3>Men's / Watches</h3>
                        <h2>Gray Color Men's Watch</h2>

                        <p>Rs.4500/-</p>
                    </div>
                </div>
                <div class="product">
                    <a href="product.html">
                        <img src="img/product/img2.jpg">
                    </a>
                    <div class="product-detail">
                        <h3>Men's / Pants</h3>
                        <h2>Levi's Jeans Pant</h2>

                        <p>Rs.2000/-</p>
                    </div>
                </div>
                <div class="product">
                    <a href="product.html">
                        <img src="img/product/img3.jpg">
                    </a>
                    <div class="product-detail">
                        <h3>Men's / Watches</h3>
                        <h2>Black Men's Watch</h2>

                        <p>Rs.4000/-</p>
                    </div>
                </div>
                <div class="product">
                    <a href="product.html">
                        <img src="img/product/img4.jpg">
                    </a>
                    <div class="product-detail">
                        <h3>Men's / Shoes</h3>
                        <h2>Nick Black Sneakers</h2>

                        <p>Rs.3200/-</p>
                    </div>
                </div>
                <div class="product">
                    <a href="product.html">
                        <img src="img/product/img5.jpg">
                    </a>
                    <div class="product-detail">
                        <h3>Glasses</h3>
                        <h2>Wood Frame Sun Glass</h2>
                        <p>Rs.1200/-</p>
                    </div>
                </div>
                <div class="product">
                    <a href="product.html">
                        <img src="img/product/img6.jpg">
                    </a>
                    <div class="product-detail">
                        <h3>Women's / Hand Bags</h3>
                        <h2>Leather Hand Bag</h2>

                        <p>Rs.3800/-</p>
                    </div>
                </div>
                <div class="product">
                    <a href="product.html">
                        <img src="img/product/img7.jpg">
                    </a>
                    <div class="product-detail">
                        <h3>Men's / Shoes</h3>
                        <h2>Men's Sneaker</h2>

                        <p>Rs.3500/-</p>
                    </div>
                </div>
                <div class="product">
                    <a href="product.html">
                        <img src="img/product/img8.jpg">
                    </a>
                    <div class="product-detail">
                        <h3>Women's / Hand Bags</h3>
                        <h2>Brown Leather Hand Bag</h2>

                        <p>Rs.5200/-</p>
                    </div>
                </div>
            </div>
        </div> <!-- New Product Section -->

        <div class="collection">
            <div class="men-collection">
                <h2>Men's Collection</h2>
            </div>
            <div class="women-collection">
                <h2>Women's Collection</h2>
            </div>
        </div> <!-- Collection Section -->

        <div class="new-product-section">
            <div class="product-section-heading">
                <h2>Recommend Products <img src="img/icons/good_quality.png"></h2>
                <h3>OUR BEST PRODUCTS RECOMMENDED FOR YOU</h3>
            </div>
            <div class="product-content">
                <div class="product">
                    <a href="product.html">
                        <img src="img/product/img1.jpg">
                    </a>
                    <div class="product-detail">
                        <h3>Men's / Watches</h3>
                        <h2>Gray Color Men's Watch</h2>
                        <a href="#">Add to Cart</a>
                        <p>Rs.4500/-</p>
                    </div>
                </div>
                <div class="product">
                    <a href="product.html">
                        <img src="img/product/img2.jpg">
                    </a>
                    <div class="product-detail">
                        <h3>Men's / Pants</h3>
                        <h2>Levi's Jeans Pant</h2>
                        <a href="#">Add to Cart</a>
                        <p>Rs.2000/-</p>
                    </div>
                </div>
                <div class="product">
                    <a href="product.html">
                        <img src="img/product/img3.jpg">
                    </a>
                    <div class="product-detail">
                        <h3>Men's / Watches</h3>
                        <h2>Black Men's Watch</h2>
                        <a href="#">Add to Cart</a>
                        <p>Rs.4000/-</p>
                    </div>
                </div>
                <div class="product">
                    <a href="product.html">
                        <img src="img/product/img4.jpg">
                    </a>
                    <div class="product-detail">
                        <h3>Men's / Shoes</h3>
                        <h2>Nick Black Sneakers</h2>
                        <a href="#">Add to Cart</a>
                        <p>Rs.3200/-</p>
                    </div>
                </div>
            </div>
        </div> <!-- Recommend Product Section -->
    </main> <!-- Main Area -->
</div>
@endsection
