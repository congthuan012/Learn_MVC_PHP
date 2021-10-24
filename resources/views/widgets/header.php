<header class="header-area header-default sticky-header">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-6 col-sm-4 col-lg-3">
                <div class="header-logo-area">
                    <a href="index.html">
                        <img class="logo-main" src="<?= asset('assets/img/logo.png'); ?>" alt="Logo" />
                        <img class="logo d-none" src="<?= asset('assets/img/logo-light.png'); ?>" alt="Logo" />
                    </a>
                </div>
            </div>
            <div class="col-sm-4 col-lg-7 d-none d-lg-block">
                <div class="header-navigation-area">
                    <ul class="main-menu nav position-relative">
                        <li class="has-submenu"><a href="#/">Home</a>
                            <ul class="submenu-nav">
                                <li><a href="index.html">Home Demo 1</a></li>
                                <li><a href="index-two.html">Home Demo 2</a></li>
                            </ul>
                        </li>
                        <li class="has-submenu full-width"><a href="#/">Shop</a>
                            <ul class="submenu-nav submenu-nav-mega">
                                <li class="mega-menu-item"><a href="#/" class="mega-title">Shop Layouts</a>
                                    <ul>
                                        <li><a href="shop-3-grid.html">Shop 3 Column</a></li>
                                        <li><a href="shop-4-grid.html">Shop 4 Column</a></li>
                                        <li><a href="shop-left-sidebar.html">Shop Left Sidebar</a></li>
                                        <li><a href="shop.html">Shop Right Sidebar</a></li>
                                        <li><a href="shop-list.html">Shop Listing View</a></li>
                                        <li><a href="shop-list-left-sidebar.html">Shop List left Sidebar</a></li>
                                        <li><a href="shop-list-right-sidebar.html">Shop List Right Sidebar</a></li>
                                    </ul>
                                </li>
                                <li class="mega-menu-item"><a href="#/" class="mega-title">Shop Pages</a>
                                    <ul>
                                        <li><a href="login.html">My Account</a></li>
                                        <li><a href="wishlist.html">Wishlist</a></li>
                                        <li><a href="cart.html">Cart</a></li>
                                        <li><a href="checkout.html">Checkout</a></li>
                                    </ul>
                                </li>
                                <li class="mega-menu-item"><a href="#/" class="mega-title">WOMEN</a>
                                    <ul>
                                        <li><a href="single-product-name-1.html">Bags &amp; Purses</a></li>
                                        <li><a href="single-product-name-1.html">Beauty</a></li>
                                        <li><a href="single-product-name-1.html">Coats &amp; Jackets</a></li>
                                        <li><a href="single-product-name-1.html">Curve &amp; Plus Size</a></li>
                                        <li><a href="single-product-name-1.html">Denim</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="has-submenu"><a href="#/">Products</a>
                            <ul class="submenu-nav">
                                <li><a href="single-product-simple.html">Simple Product</a></li>
                                <li><a href="single-product.html">Variable Product</a></li>
                                <li><a href="single-product-affiliate.html">Affiliate Link product</a></li>
                                <li><a href="single-product-soldout.html">Soldout Product</a></li>
                                <li><a href="single-product-countdown.html">Countdown Product</a></li>
                            </ul>
                        </li>
                        <li class="has-submenu"><a href="#/">Blog</a>
                            <ul class="submenu-nav">
                                <li><a href="blog-left-sidebar.html">Blog Left Sidebar</a></li>
                                <li><a href="blog.html">Blog Right Sidebar</a></li>
                                <li><a href="blog-grid.html">Blog Grid Layout</a></li>
                                <li><a href="single-blog.html">Single Blog Left Sidebar</a></li>
                                <li><a href="single-blog-right-sidebar.html">Single Blog Right Sidebar</a></li>
                            </ul>
                        </li>
                        <li><a href="contact.html">Contact</a></li>
                        <li><a href="about-us.html">About</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-7 col-lg-2 d-none d-sm-block text-end">
                <div class="header-action-area">
                    <ul class="header-action">
                        <li class="search-item">
                            <a class="action-item" href="page-search.html">
                                <i class="zmdi zmdi-search icon"></i>
                            </a>
                        </li>
                        <li class="currency-menu">
                            <a class="action-item" href="#/"><i class="zmdi zmdi-lock-outline icon"></i></a>
                            <ul class="currency-dropdown">
                                <li class="currency">
                                    <a href="#/"><span class="current-currency">USD</span></a>
                                    <ul>
                                        <li class="active"><a href="#/">USD - US Dollar</a></li>
                                        <li class="#/"><a href="#/">EUR - Euro</a></li>
                                        <li class="#/"><a href="#/">GBP - British Pound</a></li>
                                        <li class="#/"><a href="#/">INR - Indian Rupee</a></li>
                                        <li class="#/"><a href="#/">BDT - Bangladesh Taka</a></li>
                                        <li class="#/"><a href="#/">JPY - Japan Yen</a></li>
                                        <li class="#/"><a href="#/">CAD - Canada Dollar</a></li>
                                        <li class="#/"><a href="#/">AUD - Australian Dollar</a></li>
                                    </ul>
                                </li>
                                <li class="account">
                                    <a href="#/"><span class="current-account">My account</span></a>
                                    <ul>
                                        <li><a href="login.html">Login</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="mini-cart">
                            <a class="action-item" href="#/">
                                <i class="zmdi zmdi-shopping-cart-plus icon"></i>
                                <span class="cart-quantity">2</span>
                            </a>
                            <div class="mini-cart-dropdown">
                                <div class="cart-item">
                                    <div class="thumb">
                                        <img class="w-100" src="<?= asset('assets/img/shop/cart/1.jpg'); ?>" alt="Image-HasTech">
                                    </div>
                                    <div class="content">
                                        <h5 class="title"><a href="#/">Literature Classical - s</a></h5>
                                        <span class="product-quantity">1 ×</span>
                                        <span class="product-price">$79.00</span>
                                        <a class="cart-trash" href="javascript:void(0);"><i class="fa fa-trash"></i></a>
                                    </div>
                                </div>
                                <div class="cart-item">
                                    <div class="thumb">
                                        <img class="w-100" src="<?= asset('assets/img/shop/cart/2.jpg'); ?>" alt="Image-HasTech">
                                    </div>
                                    <div class="content">
                                        <h5 class="title"><a href="#/">Fit Wool Suit - m / gold</a></h5>
                                        <span class="product-quantity">1 ×</span>
                                        <span class="product-price">$80.00</span>
                                        <a class="cart-trash" href="javascript:void(0);"><i class="fa fa-trash"></i></a>
                                    </div>
                                </div>
                                <div class="cart-total-money">
                                    <h5>Total: <span class="money">$159.00</span></h5>
                                </div>
                                <div class="cart-btn">
                                    <a href="cart.html">View Cart</a>
                                    <a href="checkout.html">Checkout</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-6 col-sm-1 d-block d-lg-none text-end">
                <button class="btn-menu" type="button"><i class="zmdi zmdi-menu"></i></button>
            </div>
        </div>
    </div>
</header>