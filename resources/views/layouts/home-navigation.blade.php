<header class="header-area">
    <div class="header-top bg-img" style="background-image:url(assets/img/icon-img/header-shape.png);">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-7 col-12 col-sm-8">
                    <div class="header-contact">
                        <ul>
                            <li><i class="fa fa-phone"></i> +88
                                @if (!empty($information->phone))
                                    {{ $information->phone }}
                                @else
                                    01XXXXXXXXX
                                @endif
                            </li>
                            <li><i class="fa fa-envelope-o"></i><a href="#">
                                    @if (!empty($information->email))
                                        {{ $information->email }}
                                    @else
                                        test@email.com
                                    @endif
                                </a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-5 col-12 col-sm-4">
                    <div class="login-register">
                        <ul>
                            @if (Route::has('login'))

                                @auth
                                    <li> <a href="{{ url('/dashboard') }}">Dashboard</a></li>
                                @else
                                    <li><a href="{{ route('login') }}">Login</a></li>

                                    @if (Route::has('register'))
                                        <li><a href="{{ route('register') }}">Register</a></li>
                                    @endif
                                @endauth
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="header-bottom sticky-bar clearfix">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-6 col-4">
                    <div class="logo">
                        @if (!empty($information->logo))
                            <a href="{{ route('home') }}">
                                <img alt="" src="{{ asset("storage/$information->logo") }}">
                            </a>
                        @endif
                    </div>
                </div>
                <div class="col-lg-10 col-md-6 col-8">
                    <div class="menu-cart-wrap">
                        <div class="main-menu">
                            <nav>
                                <ul>
                                    <li><a href="{{ route('home') }}"> HOME </a></li>
                                    <li><a href="{{ route('about.page') }}"> ABOUT </a></li>
                                    <li><a href="{{ route('course.page') }}"> COURSES / PROGRAMMES</a></li>
                                    <li><a href="{{ route('contact.page') }}"> Institute </a></li>
                                    <li><a href="{{ route('blogs.page') }}"> BLOG </a></li>
                                    <li><a href="{{ route('contact.page') }}"> CONTACT </a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mobile-menu-area">
                <div class="mobile-menu">
                    <nav id="mobile-menu-active">
                        <ul class="menu-overflow">
                            <li><a href="index.html">HOME</a>
                                <ul>
                                    <li><a href="index.html">home version 1</a></li>
                                    <li><a href="index-2.html">home version 2</a></li>
                                    <li><a href="index-3.html">home version 3</a></li>
                                </ul>
                            </li>
                            <li><a href="about-us.html">About</a></li>
                            <li><a href="shop.html">Shop</a>
                                <ul>
                                    <li><a href="#">Categories 01</a>
                                        <ul>
                                            <li><a href="shop.html">bag</a></li>
                                            <li><a href="shop.html">Pen</a></li>
                                            <li><a href="shop.html">Erasers</a></li>
                                            <li><a href="shop.html">Glue sticks</a></li>
                                            <li><a href="shop.html">Lunchbox </a></li>
                                            <li><a href="shop.html">Pencil box </a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Categories 02</a>
                                        <ul>
                                            <li><a href="shop.html">bag</a></li>
                                            <li><a href="shop.html">Pen</a></li>
                                            <li><a href="shop.html">Erasers</a></li>
                                            <li><a href="shop.html">Glue sticks</a></li>
                                            <li><a href="shop.html">Lunchbox </a></li>
                                            <li><a href="shop.html">Pencil box </a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Categories 03</a>
                                        <ul>
                                            <li><a href="shop.html">bag</a></li>
                                            <li><a href="shop.html">Pen</a></li>
                                            <li><a href="shop.html">Erasers</a></li>
                                            <li><a href="shop.html">Glue sticks</a></li>
                                            <li><a href="shop.html">Lunchbox </a></li>
                                            <li><a href="shop.html">Pencil box </a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Categories 04</a>
                                        <ul>
                                            <li><a href="shop.html">bag</a></li>
                                            <li><a href="shop.html">Pen</a></li>
                                            <li><a href="shop.html">Erasers</a></li>
                                            <li><a href="shop.html">Glue sticks</a></li>
                                            <li><a href="shop.html">Lunchbox </a></li>
                                            <li><a href="shop.html">Pencil box </a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="#">Pages</a>
                                <ul>
                                    <li><a href="course.html">course page</a></li>
                                    <li><a href="event.html">event page</a></li>
                                    <li><a href="shop.html">shop page</a></li>
                                    <li><a href="course-details.html">course details</a></li>
                                    <li><a href="event-details.html">event details</a></li>
                                    <li><a href="single-product.html">single product</a></li>
                                    <li><a href="cart.html">cart page</a></li>
                                    <li><a href="checkout.html">checkout</a></li>
                                    <li><a href="wishlist.html">wishlist</a></li>
                                    <li><a href="login-register.html">login / register</a></li>
                                </ul>
                            </li>
                            <li><a href="about-us.html">About us</a></li>
                            <li><a href="blog.html">Blog</a>
                                <ul>
                                    <li><a href="blog.html">blog</a></li>
                                    <li><a href="blog-details.html">blog details</a></li>
                                </ul>
                            </li>
                            <li><a href="contact.html">Contact</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
