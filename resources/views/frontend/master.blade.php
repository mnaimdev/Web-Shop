<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="template" content="greeny">
    <meta name="title" content="greeny - Ecommerce Food Store HTML Template">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="keywords"
        content="organic, food, shop, ecommerce, store, html, bootstrap, template, agriculture, vegetables, products, farm, grocery, natural, online">
    <title>Samira Ecommerce</title>


    <link rel="icon" href="{{ asset('/frontend_assets/images/favicon.png') }}">
    <link rel="stylesheet" href="{{ asset('/frontend_assets/fonts/flaticon/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('/frontend_assets/fonts/icofont/icofont.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/frontend_assets/fonts/fontawesome/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/frontend_assets/vendor/venobox/venobox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/frontend_assets/vendor/slickslider/slick.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/frontend_assets/vendor/niceselect/nice-select.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/frontend_assets/vendor/bootstrap/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/frontend_assets/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('/frontend_assets/css/index.css') }}">
</head>


<body>
    <div class="backdrop"></div><a class="backtop fas fa-arrow-up" href="#"></a>
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-5">
                    <div class="header-top-welcome">
                        <p>Welcome to Ecomart in Your Dream Online Store!</p>
                    </div>
                </div>
                <div class="col-md-5 col-lg-3">
                    <div class="header-top-select">
                        <div class="header-select"><i class="icofont-world"></i><select class="select">
                                <option value="english" selected>english</option>
                                <option value="bangali">bangali</option>
                                <option value="arabic">arabic</option>
                            </select></div>
                        <div class="header-select"><i class="icofont-money"></i><select class="select">
                                <option value="english" selected>doller</option>
                                <option value="bangali">pound</option>
                                <option value="arabic">taka</option>
                            </select></div>
                    </div>
                </div>
                <div class="col-md-7 col-lg-4">

                    @auth('customerlogin')
                        <span
                            style="background-color: black; border-radius: 10px; padding: 5px; color: white; ">{{ Auth::guard('customerlogin')->user()->name }}
                            <sup>*</sup></span>
                        <a href="{{ route('customer.profile') }}" class="text-white"
                            style="font-size: 14px; margin-left: 10px;">Profile</a>
                        <a href="{{ route('customer.logout') }}" class="text-white"
                            style="font-size: 14px; margin-left: 10px;">Logout</a>
                    @else
                        <ul class="header-top-list">
                            <li><a href="">Contact Us</a></li>
                            <li><a href="{{ route('customer.login') }}">Sign In</a></li>
                            <li><a href="{{ route('customer.register') }}">Sign Up</a></li>
                        </ul>
                    @endauth

                </div>
            </div>
        </div>
    </div>
    <header class="header-part">
        <div class="container">
            <div class="header-content">
                <div class="header-media-group"><button class="header-user"><img
                            src="{{ asset('/frontend_assets/images/user.png') }}" alt="user"></button><a
                        href="{{ route('index') }}"><img src="{{ asset('/frontend_assets/images/logo.png') }}"
                            alt="logo"></a><button class="header-src"><i class="fas fa-search"></i></button></div><a
                    href="{{ route('index') }}" class="header-logo"><img
                        src="{{ asset('/frontend_assets/images/logo.png') }}" alt="logo"></a>
                {{-- search --}}
                <div class="header-form">
                    <input type="text" name="search_input" id="search_input" placeholder="Search anything...">
                    <button id="search">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
                {{-- end search --}}



                <div class="header-widget-group"><a href="compare.html" class="header-widget" title="Compare List"><i
                            class="fas fa-random"></i><sup>0</sup></a><a href="wishlist.html" class="header-widget"
                        title="Wishlist"><i class="fas fa-heart"></i><sup>0</sup></a><button
                        class="header-widget header-cart" title="Cartlist"><i
                            class="fas fa-shopping-basket"></i><sup>{{ App\Models\Cart::where('customer_id', Auth::guard('customerlogin')->id())->count() }}</sup></button>
                </div>
            </div>
        </div>
    </header>


    <nav class="navbar-part">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="navbar-content">
                        <ul class="navbar-list">
                            <li class="navbar-item dropdown"><a class="navbar-link" href="#">home</a>

                            </li>
                            <li class="navbar-item dropdown-megamenu"><a class="navbar-link" href="#">shop</a>
                                <div class="megamenu">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="megamenu-wrap">
                                                    <h5 class="megamenu-title">shop pages</h5>

                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="megamenu-wrap">
                                                    <h5 class="megamenu-title">product pages</h5>

                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="megamenu-wrap">
                                                    <h5 class="megamenu-title">user action</h5>

                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="megamenu-wrap">
                                                    <h5 class="megamenu-title">other pages</h5>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li class="navbar-item dropdown-megamenu"><a class="nav-link" href="#">category</a>

                            </li>
                            <li class="navbar-item dropdown"><a class="navbar-link" href="#">pages</a>

                            </li>
                            <li class="navbar-item dropdown"><a class="navbar-link" href="#">authentic</a>

                            </li>

                        </ul>
                        <div class="navbar-info-group">
                            <div class="navbar-info"><i class="icofont-ui-touch-phone"></i>
                                <p><small>call us</small><span>(+880) 183 8288 389</span></p>
                            </div>
                            <div class="navbar-info"><i class="icofont-ui-email"></i>
                                <p><small>email us</small><span>support@example.com</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <aside class="category-sidebar">
        <div class="category-header">
            <h4 class="category-title"><i class="fas fa-align-left"></i><span>categories</span></h4><button
                class="category-close"><i class="icofont-close"></i></button>
        </div>
        <ul class="category-list">
            <li class="category-item"><a class="category-link dropdown-link" href="#"><i
                        class="flaticon-vegetable"></i><span>vegetables</span></a>
                <ul class="dropdown-list">
                    <li><a href="#">asparagus</a></li>
                    <li><a href="#">broccoli</a></li>
                    <li><a href="#">carrot</a></li>
                </ul>
            </li>
            <li class="category-item"><a class="category-link dropdown-link" href="#"><i
                        class="flaticon-groceries"></i><span>groceries</span></a>
                <ul class="dropdown-list">
                    <li><a href="#">Grains & Bread</a></li>
                    <li><a href="#">Dairy & Eggs</a></li>
                    <li><a href="#">Oil & Fat</a></li>
                </ul>
            </li>
            <li class="category-item"><a class="category-link dropdown-link" href="#"><i
                        class="flaticon-fruit"></i><span>fruits</span></a>
                <ul class="dropdown-list">
                    <li><a href="#">Apple</a></li>
                    <li><a href="#">Orange</a></li>
                    <li><a href="#">Strawberry</a></li>
                </ul>
            </li>
            <li class="category-item"><a class="category-link dropdown-link" href="#"><i
                        class="flaticon-dairy-products"></i><span>dairy farm</span></a>
                <ul class="dropdown-list">
                    <li><a href="#">Egg</a></li>
                    <li><a href="#">milk</a></li>
                    <li><a href="#">butter</a></li>
                </ul>
            </li>
            <li class="category-item"><a class="category-link dropdown-link" href="#"><i
                        class="flaticon-crab"></i><span>sea foods</span></a>
                <ul class="dropdown-list">
                    <li><a href="#">Lobster</a></li>
                    <li><a href="#">Octopus</a></li>
                    <li><a href="#">Shrimp</a></li>
                </ul>
            </li>
            <li class="category-item"><a class="category-link dropdown-link" href="#"><i
                        class="flaticon-salad"></i><span>diet foods</span></a>
                <ul class="dropdown-list">
                    <li><a href="#">Salmon</a></li>
                    <li><a href="#">Potatoes</a></li>
                    <li><a href="#">Greens</a></li>
                </ul>
            </li>
            <li class="category-item"><a class="category-link dropdown-link" href="#"><i
                        class="flaticon-dried-fruit"></i><span>dry foods</span></a>
                <ul class="dropdown-list">
                    <li><a href="#">noodles</a></li>
                    <li><a href="#">Powdered milk</a></li>
                    <li><a href="#">nut & yeast</a></li>
                </ul>
            </li>
            <li class="category-item"><a class="category-link dropdown-link" href="#"><i
                        class="flaticon-fast-food"></i><span>fast foods</span></a>
                <ul class="dropdown-list">
                    <li><a href="#">mango</a></li>
                    <li><a href="#">plumsor</a></li>
                    <li><a href="#">raisins</a></li>
                </ul>
            </li>
            <li class="category-item"><a class="category-link dropdown-link" href="#"><i
                        class="flaticon-cheers"></i><span>drinks</span></a>
                <ul class="dropdown-list">
                    <li><a href="#">Wine</a></li>
                    <li><a href="#">Juice</a></li>
                    <li><a href="#">Water</a></li>
                </ul>
            </li>
            <li class="category-item"><a class="category-link dropdown-link" href="#"><i
                        class="flaticon-beverage"></i><span>coffee</span></a>
                <ul class="dropdown-list">
                    <li><a href="#">Cappuchino</a></li>
                    <li><a href="#">Espresso</a></li>
                    <li><a href="#">Latte</a></li>
                </ul>
            </li>
            <li class="category-item"><a class="category-link dropdown-link" href="#"><i
                        class="flaticon-barbecue"></i><span>meats</span></a>
                <ul class="dropdown-list">
                    <li><a href="#">Meatball</a></li>
                    <li><a href="#">Sausage</a></li>
                    <li><a href="#">Poultry</a></li>
                </ul>
            </li>
            <li class="category-item"><a class="category-link dropdown-link" href="#"><i
                        class="flaticon-fish"></i><span>fishes</span></a>
                <ul class="dropdown-list">
                    <li><a href="#">Agujjim</a></li>
                    <li><a href="#">saltfish</a></li>
                    <li><a href="#">pazza</a></li>
                </ul>
            </li>
        </ul>
        <div class="category-footer">
            <p>All Rights Reserved by <a href="#">Mironcoder</a></p>
        </div>
    </aside>

    <aside class="cart-sidebar">
        <div class="cart-header">
            <div class="cart-total"><i class="fas fa-shopping-basket"></i><span>total item
                    ({{ App\Models\Cart::where('customer_id', Auth::guard('customerlogin')->id())->count() }})</span>
            </div><button class="cart-close"><i class="icofont-close"></i></button>
        </div>

        <ul class="cart-list">
            @php
                $sub_total = 0;
            @endphp
            @forelse (App\Models\Cart::where('customer_id', Auth::guard('customerlogin')->id())->get() as $cart)
                <li class="cart-item">

                    <div class="cart-info-group d-flex justify-content-between">
                        <div class="cart-info">
                            <h6>{{ $cart->rel_to_product->product_name }}</h6>
                            <p>Color: {{ $cart->rel_to_color->color_name }}</p>
                            <p>Size: {{ $cart->rel_to_size->size_name }}</p>
                            <p>Price: {{ $cart->rel_to_product->after_discount }}TK</p>
                        </div>
                        <div>
                            <a href="{{ route('cart.clear.item', $cart->id) }}">X</a>
                        </div>

                    </div>

                    @php
                        $sub_total += $cart->rel_to_product->after_discount * $cart->quantity;
                    @endphp
                </li>
            @empty
                <h5>Cart Empty</h5>
            @endforelse

            <li>Total Price : {{ $sub_total }} TK</li>

        </ul>
        <div class="cart-footer">
            <a style="border-color: black; background-color: tomato; padding: 5px; border-radius: 5px; width: 100%; margin-bottom: 10px; color: white"
                href="{{ route('cart.clear') }}">Clear
                Cart</a>
            <a style="border-color: black; background-color: black; padding: 5px; border-radius: 5px; width: 100%; margin-bottom: 10px; color: white;"
                href="{{ route('cart') }}">
                View Cart
            </a>
        </div>
    </aside>

    <aside class="nav-sidebar">
        <div class="nav-header"><a href="#"><img src="images/logo.png" alt="logo"></a><button
                class="nav-close"><i class="icofont-close"></i></button></div>
        <div class="nav-content">
            <div class="nav-btn"><a href="login.html" class="btn btn-inline"><i
                        class="fa fa-unlock-alt"></i><span>join here</span></a></div>
            <div class="nav-select-group">
                <div class="nav-select"><i class="icofont-world"></i><select class="select">
                        <option value="english" selected>English</option>
                        <option value="bangali">Bangali</option>
                        <option value="arabic">Arabic</option>
                    </select></div>
                <div class="nav-select"><i class="icofont-money"></i><select class="select">
                        <option value="english" selected>Doller</option>
                        <option value="bangali">Pound</option>
                        <option value="arabic">Taka</option>
                    </select></div>
            </div>
            <ul class="nav-list">
                <li><a class="nav-link dropdown-link" href="#"><i class="icofont-home"></i>Home</a>
                    <ul class="dropdown-list">
                        <li><a href="home-grid.html">Home grid</a></li>
                        <li><a href="{{ route('index') }}">Home index</a></li>
                        <li><a href="home-classic.html">Home classic</a></li>
                        <li><a href="home-standard.html">Home standard</a></li>
                        <li><a href="home-category.html">Home category</a></li>
                    </ul>
                </li>
                <li><a class="nav-link dropdown-link" href="#"><i class="icofont-food-cart"></i>shop</a>
                    <ul class="dropdown-list">
                        <li><a href="shop-5column.html">shop 5 column</a></li>
                        <li><a href="shop-4column.html">shop 4 column</a></li>
                        <li><a href="shop-3column.html">shop 3 column</a></li>
                        <li><a href="shop-2column.html">shop 2 column</a></li>
                        <li><a href="shop-1column.html">shop 1 column</a></li>
                    </ul>
                </li>
                <li><a class="nav-link dropdown-link" href="#"><i class="icofont-page"></i>product</a>
                    <ul class="dropdown-list">
                        <li><a href="product-tab.html">product tab</a></li>
                        <li><a href="product-grid.html">product grid</a></li>
                        <li><a href="product-video.html">product video</a></li>
                        <li><a href="product-simple.html">product simple</a></li>
                    </ul>
                </li>
                <li><a class="nav-link dropdown-link" href="#"><i class="icofont-bag-alt"></i>my account</a>
                    <ul class="dropdown-list">
                        <li><a href="profile.html">profile</a></li>
                        <li><a href="wallet.html">wallet</a></li>
                        <li><a href="wishlist.html">wishlist</a></li>
                        <li><a href="compare.html">compare</a></li>
                        <li><a href="checkout.html">checkout</a></li>
                        <li><a href="orderlist.html">order history</a></li>
                        <li><a href="invoice.html">order invoice</a></li>
                        <li><a href="email-template.html">email template</a></li>
                    </ul>
                </li>
                <li><a class="nav-link dropdown-link" href="#"><i class="icofont-lock"></i>authentication</a>
                    <ul class="dropdown-list">
                        <li><a href="login.html">login</a></li>
                        <li><a href="register.html">register</a></li>
                        <li><a href="reset-password.html">reset password</a></li>
                        <li><a href="change-password.html">change password</a></li>
                    </ul>
                </li>
                <li><a class="nav-link dropdown-link" href="#"><i class="icofont-book-alt"></i>blogs</a>
                    <ul class="dropdown-list">
                        <li><a href="blog-grid.html">blog grid</a></li>
                        <li><a href="blog-standard.html">blog standard</a></li>
                        <li><a href="blog-details.html">blog details</a></li>
                        <li><a href="blog-author.html">blog author</a></li>
                    </ul>
                </li>
                <li><a class="nav-link" href="offer.html"><i class="icofont-sale-discount"></i>offers</a></li>
                <li><a class="nav-link" href="about.html"><i class="icofont-info-circle"></i>about us</a></li>
                <li><a class="nav-link" href="faq.html"><i class="icofont-support-faq"></i>need help</a></li>
                <li><a class="nav-link" href="contact.html"><i class="icofont-contacts"></i>contact us</a></li>
                <li><a class="nav-link" href="privacy.html"><i class="icofont-warning"></i>privacy policy</a></li>
                <li><a class="nav-link" href="coming-soon.html"><i class="icofont-options"></i>coming soon</a></li>
                <li><a class="nav-link" href="error.html"><i class="icofont-ui-block"></i>404 error</a></li>
                <li><a class="nav-link" href="login.html"><i class="icofont-logout"></i>logout</a></li>
            </ul>
            <div class="nav-info-group">
                <div class="nav-info"><i class="icofont-ui-touch-phone"></i>
                    <p><small>call us</small><span>(+880) 183 8288 389</span></p>
                </div>
                <div class="nav-info"><i class="icofont-ui-email"></i>
                    <p><small>email us</small><span>support@example.com</span></p>
                </div>
            </div>
            <div class="nav-footer">
                <p>All Rights Reserved by <a href="#">Mironcoder</a></p>
            </div>
        </div>
    </aside>


    <div class="mobile-menu"><a href="{{ route('index') }}" title="Home Page"><i
                class="fas fa-home"></i><span>Home</span></a><button class="cate-btn" title="Category List"><i
                class="fas fa-list"></i><span>category</span></button><button class="cart-btn" title="Cartlist"><i
                class="fas fa-shopping-basket"></i><span>cartlist</span><sup>9+</sup></button><a href="wishlist.html"
            title="Wishlist"><i class="fas fa-heart"></i><span>wishlist</span><sup>0</sup></a><a href="compare.html"
            title="Compare List"><i class="fas fa-random"></i><span>compare</span><sup>0</sup></a></div>
    <div class="modal fade" id="product-view">
        <div class="modal-dialog">
            <div class="modal-content"><button class="modal-close icofont-close" data-bs-dismiss="modal"></button>
                <div class="product-view">
                    <div class="row">
                        <div class="col-md-6 col-lg-6">
                            <div class="view-gallery">
                                <div class="view-label-group"><label class="view-label new">new</label><label
                                        class="view-label off">-10%</label></div>
                                <ul class="preview-slider slider-arrow">
                                    <li><img src="images/product/01.jpg" alt="product"></li>
                                    <li><img src="images/product/01.jpg" alt="product"></li>
                                    <li><img src="images/product/01.jpg" alt="product"></li>
                                    <li><img src="images/product/01.jpg" alt="product"></li>
                                    <li><img src="images/product/01.jpg" alt="product"></li>
                                    <li><img src="images/product/01.jpg" alt="product"></li>
                                    <li><img src="images/product/01.jpg" alt="product"></li>
                                </ul>
                                <ul class="thumb-slider">
                                    <li><img src="images/product/01.jpg" alt="product"></li>
                                    <li><img src="images/product/01.jpg" alt="product"></li>
                                    <li><img src="images/product/01.jpg" alt="product"></li>
                                    <li><img src="images/product/01.jpg" alt="product"></li>
                                    <li><img src="images/product/01.jpg" alt="product"></li>
                                    <li><img src="images/product/01.jpg" alt="product"></li>
                                    <li><img src="images/product/01.jpg" alt="product"></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <div class="view-details">
                                <h3 class="view-name"><a href="product-video.html">existing product name</a></h3>
                                <div class="view-meta">
                                    <p>SKU:<span>1234567</span></p>
                                    <p>BRAND:<a href="#">radhuni</a></p>
                                </div>
                                <div class="view-rating"><i class="active icofont-star"></i><i
                                        class="active icofont-star"></i><i class="active icofont-star"></i><i
                                        class="active icofont-star"></i><i class="icofont-star"></i><a
                                        href="product-video.html">(3 reviews)</a></div>
                                <h3 class="view-price"><del>$38.00</del><span>$24.00<small>/per kilo</small></span>
                                </h3>
                                <p class="view-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit non
                                    tempora magni repudiandae sint suscipit tempore quis maxime explicabo veniam eos
                                    reprehenderit fuga</p>
                                <div class="view-list-group"><label class="view-list-title">tags:</label>
                                    <ul class="view-tag-list">
                                        <li><a href="#">organic</a></li>
                                        <li><a href="#">vegetable</a></li>
                                        <li><a href="#">chilis</a></li>
                                    </ul>
                                </div>
                                <div class="view-list-group"><label class="view-list-title">Share:</label>
                                    <ul class="view-share-list">
                                        <li><a href="#" class="icofont-facebook" title="Facebook"></a></li>
                                        <li><a href="#" class="icofont-twitter" title="Twitter"></a></li>
                                        <li><a href="#" class="icofont-linkedin" title="Linkedin"></a></li>
                                        <li><a href="#" class="icofont-instagram" title="Instagram"></a></li>
                                    </ul>
                                </div>
                                <div class="view-add-group"><button class="product-add" title="Add to Cart"><i
                                            class="fas fa-shopping-basket"></i><span>add to cart</span></button>
                                    <div class="product-action"><button class="action-minus"
                                            title="Quantity Minus"><i class="icofont-minus"></i></button><input
                                            class="action-input" title="Quantity Number" type="text"
                                            name="quantity" value="1"><button class="action-plus"
                                            title="Quantity Plus"><i class="icofont-plus"></i></button></div>
                                </div>
                                <div class="view-action-group"><a class="view-wish wish" href="#"
                                        title="Add Your Wishlist"><i class="icofont-heart"></i><span>add to
                                            wish</span></a><a class="view-compare" href="compare.html"
                                        title="Compare This Item"><i class="fas fa-random"></i><span>Compare
                                            This</span></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    @yield('content')


    {{-- subscriber --}}
    <section class="news-part" style="background: url(images/newsletter.jpg) no-repeat center;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-5 col-lg-6 col-xl-7">
                    <div class="news-text">
                        <h2>Get 20% Discount for Subscriber</h2>
                        <p>Lorem ipsum dolor consectetur adipisicing accusantium</p>
                    </div>
                </div>
                <div class="col-md-7 col-lg-6 col-xl-5">
                    <form class="news-form"><input type="text"
                            placeholder="Enter Your Email Address"><button><span><i
                                    class="icofont-ui-email"></i>Subscribe</span></button></form>
                </div>
            </div>
        </div>
    </section>

    {{-- intro part --}}
    <section class="intro-part">
        <div class="container">
            <div class="row intro-content">
                <div class="col-sm-6 col-lg-3">
                    <div class="intro-wrap">
                        <div class="intro-icon"><i class="fas fa-truck"></i></div>
                        <div class="intro-content">
                            <h5>free home delivery</h5>
                            <p>Lorem ipsum dolor sit amet adipisicing elit nobis.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="intro-wrap">
                        <div class="intro-icon"><i class="fas fa-sync-alt"></i></div>
                        <div class="intro-content">
                            <h5>instant return policy</h5>
                            <p>Lorem ipsum dolor sit amet adipisicing elit nobis.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="intro-wrap">
                        <div class="intro-icon"><i class="fas fa-headset"></i></div>
                        <div class="intro-content">
                            <h5>quick support system</h5>
                            <p>Lorem ipsum dolor sit amet adipisicing elit nobis.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="intro-wrap">
                        <div class="intro-icon"><i class="fas fa-lock"></i></div>
                        <div class="intro-content">
                            <h5>secure payment way</h5>
                            <p>Lorem ipsum dolor sit amet adipisicing elit nobis.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <footer class="footer-part">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-xl-3">
                    <div class="footer-widget"><a class="footer-logo" href="#"><img
                                src="{{ asset('/frontend_assets/images/logo.png') }}" alt="logo"></a>
                        <p class="footer-desc">Adipisci asperiores ipsum ipsa repellat consequatur repudiandae
                            quisquam assumenda dolor perspiciatis sit ipsum dolor amet.</p>
                        <ul class="footer-social">
                            <li><a class="icofont-facebook" href="#"></a></li>
                            <li><a class="icofont-twitter" href="#"></a></li>
                            <li><a class="icofont-linkedin" href="#"></a></li>
                            <li><a class="icofont-instagram" href="#"></a></li>
                            <li><a class="icofont-pinterest" href="#"></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-12 col-xl-6 m-auto">
                    <div class="footer-widget contact">
                        <h3 class="footer-title">contact us</h3>
                        <ul class="footer-contact">
                            <li><i class="icofont-ui-email"></i>
                                <p><span>support@example.com</span><span>carrer@example.com</span></p>
                            </li>
                            <li><i class="icofont-ui-touch-phone"></i>
                                <p><span>+120 279 532 13</span><span>+120 279 532 14</span></p>
                            </li>
                            <li><i class="icofont-location-pin"></i>
                                <p>1Hd- 50, 010 Avenue, NY 90001 United States</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-12 col-xl-3">
                    <div class="footer-widget">
                        <h3 class="footer-title">quick Links</h3>
                        <div class="footer-links">
                            <ul>
                                <li><a href="#">My Account</a></li>
                                <li><a href="#">Order History</a></li>
                                <li><a href="#">Order Tracking</a></li>
                                <li><a href="#">Best Seller</a></li>
                                <li><a href="#">New Arrivals</a></li>
                            </ul>

                        </div>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-12" style="margin-bottom: 10px;">
                    <div class="footer-bottom">
                        <p class="footer-copytext">&copy; All Copyrights Reserved by <a href="#">Mironcoder</a>
                        </p>
                        <div class="footer-card"><a href="#"><img
                                    src="{{ asset('/frontend_assets/images/payment/jpg/01.jpg') }}"
                                    alt="payment"></a><a href="#"><img
                                    src="{{ asset('/frontend_assets/images/payment/jpg/02.jpg') }}"
                                    alt="payment"></a><a href="#"><img
                                    src="{{ asset('/frontend_assets/images/payment/jpg/03.jpg') }}"
                                    alt="payment"></a><a href="#"><img
                                    src="{{ asset('/frontend_assets/images/payment/jpg/04.jpg') }}"
                                    alt="payment"></a></div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="{{ asset('/frontend_assets/vendor/bootstrap/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('/frontend_assets/vendor/bootstrap/popper.min.js') }}"></script>
    <script src="{{ asset('/frontend_assets/vendor/bootstrap/bootstrap.min.js') }}"></script>
    <script src="{{ asset('/frontend_assets/vendor/countdown/countdown.min.js') }}"></script>
    <script src="{{ asset('/frontend_assets/vendor/niceselect/nice-select.min.js') }}"></script>
    <script src="{{ asset('/frontend_assets/vendor/slickslider/slick.min.js') }}"></script>
    <script src="{{ asset('/frontend_assets/vendor/venobox/venobox.min.js') }}"></script>
    <script src="{{ asset('/frontend_assets/js/nice-select.js') }}"></script>
    <script src="{{ asset('/frontend_assets/js/countdown.js') }}"></script>
    <script src="{{ asset('/frontend_assets/js/accordion.js') }}"></script>
    <script src="{{ asset('/frontend_assets/js/venobox.js') }}"></script>
    <script src="{{ asset('/frontend_assets/js/slick.js') }}"></script>
    <script src="{{ asset('/frontend_assets/js/main.js') }}"></script>


    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>



    <script>
        $('#search').click(function() {
            var search_input = $('#search_input').val();
            var min = $('#min').val();
            var max = $('#max').val();
            var category_id = $('input[class="category_id"]:checked').attr('value');
            var brand_id = $('input[class="brand_id"]:checked').attr('value');
            var color_id = $('input[class="color_id"]:checked').attr('value');
            var size_id = $('input[class="size_id"]:checked').attr('value');
            var sort = $('.sort').val();

            var link = '{{ route('search') }}' + '?q=' + search_input + "&min=" + min + "&max=" + max +
                "&category_id=" + category_id + "&brand_id=" + brand_id + "&color_id=" + color_id + "&size_id=" +
                size_id + "&sort=" + sort;

            location.href = link;
        });
    </script>


    @yield('footer_scripts')
</body>


</html>
