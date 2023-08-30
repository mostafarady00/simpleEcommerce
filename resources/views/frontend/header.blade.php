<header>
    <div class="container">
        <div class="brand">
            <div class="logo">
                <a href="index.html">
                    <img src="img/icons/online_shopping.png">
                    <div class="logo-text">
                        <p class="big-logo">Ecommerce</p>
                        <p class="small-logo">online shop</p>
                    </div>
                </a>
            </div> <!-- logo -->
            <div class="shop-icon">
                <div class="dropdown">
                    <img src="img/icons/account.png">
                      <div class="dropdown-menu">
                        <ul>
                            <li><a href="account.html">My Account</a></li>
                            <li><a href="orders.html">My Orders</a></li>
                        </ul>
                    </div>
                </div>
                 <div class="dropdown">
                    
                    <div class="dropdown-menu wishlist-item">

                    </div>
                </div>

                <div class="dropdown">

                    <div class="dropdown-menu cart-item">

                    </div>
                </div>
            </div> <!-- shop icons -->
        </div> <!-- brand -->

        <div class="menu-bar">
            <div class="menu">
                <ul>
                    <li><a href="{{ route('Home')}}">Home</a></li>
                    <li><a href="{{ route('shop') }}">Shop</a></li>
                    <li><a href="{{ route('ABOUT') }}">About</a></li>
                    <li><a href="{{ route('CONTACT US') }}">Contact</a></li>
                </ul>
            </div>
            <div class="search-bar">
                <form>
                    <div class="form-group">
                        <input type="text" class="form-control" name="search" placeholder="Search">
                        <img src="img/icons/search.png">
                    </div>
                </form>
            </div>
        </div> <!-- menu -->
    </div> <!-- container -->
</header> <!-- header -->
