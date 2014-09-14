<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>@yield('title') | AstitvaStore</title>

        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

        <!-- Bootstrap -->
        {{ HTML::style('bootstrap/css/bootstrap.css') }}
        {{ HTML::style('bootstrap/css/bootstrap-responsive.css') }}
        <!-- Stylesheet -->
        {{ HTML::style('css/style.css') }}
        {{ HTML::style('images/favicon.ico') }}
        <!--Jquery Init -->
        {{ HTML::script('js/jquery.js') }}
        {{ HTML::script('bootstrap/js/bootstrap.min.js') }}
        
    </head>

    <body>

        <!-- 
        ==================================================================
        Header Area
        ==================================================================
        -->
@if(Session::has('message'))
<p>{{Session::get('message')}}</p>
@endif
        <div id="header">
            <div class="container">
                <div class="row">
                    <div class="span3">
                        <div class="logo">
                           <a href="/"> <h3 class="nopadding nomargin autolineheight font-light"><span class="mustard">Astitva</span> <span class="lightgray">Store</span></h3>
                            <h6 class="nomargin autolineheight darkgrey"></h6>
                        </div>
                    </div>
                    <div class="span7 offset1 twenty_margin_top" id="account_links">
                        <div class="row">
                            <ul class="inline pull-right">
                                @if(Auth::check())
                                <li>
                                    <i class="icon-user ten_padding_right"></i>{{ HTML::link('users/',Auth::user()->firstname) }}</a></p>
                                </li>
                                <li>
                                {{ HTML::link('users/signout','Sign Out') }}
                                </li>

                                @else
                                <li>
                                    <i class="icon-user ten_padding_right"></i>{{ HTML::link('users/signin','Sign In') }}</a></p>
                                </li>
                                @endif
                                <li>
                                    <i class="icon-empty ten_padding_right"></i><a href="cart.html">4</a>
                                </li>
                                <li>
                                    <span class="cart_total">
                                        $169
                                    </span>
                                    <div class="cart_dropdown">
                                        <div class="box">
                                            <ul class="list">
                                                <li class="item clearfix">
                                                    <figure class="pull-left">
                                                        <a href="product.html">
                                                            <img src="images/products/small13.png" width="55" height="60" alt=""/>
                                                        </a>
                                                    </figure>
                                                    <div class="content">
                                                        <div class="title">
                                                            Fresh Shirt-Shortsleeve by <a href="category_template_2.html">Carhartt</a>
                                                        </div>
                                                        <div class="price">
                                                            35.00€
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="item clearfix">
                                                    <figure class="pull-left">
                                                        <a href="product.html">
                                                            <img src="images/products/small14.png" width="55" height="60" alt=""/>
                                                        </a>
                                                    </figure>
                                                    <div class="content">
                                                        <div class="title">
                                                            AV Native American by <a href="category_template_2.html">Vans</a>
                                                        </div>
                                                        <div class="price">
                                                            65.00€
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="item clearfix">
                                                    <figure class="pull-left">
                                                        <a href="product.html">
                                                            <img src="images/products/small15.png" width="55" height="60" alt=""/>
                                                        </a>
                                                    </figure>
                                                    <div class="content">
                                                        <div class="title">
                                                            Coolwood T-shirt by <a href="category_template_2.html">Billabong</a>
                                                        </div>
                                                        <div class="price">
                                                            31.00€
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                            
                                            <div class="total_wrapper">
                                                <div class="total">
                                                    <div class="uppercase">Subtotal</div>
                                                    <div class="value">131.00€</div>
                                                </div>
                                                <a href="cart.html" class="button darkgrey">Checkout</a>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    
                </div>
                <div class="row ten_margin_top">
                    <div class="span3">
                        <button type="button" class="dd-menu-trigger btn btn-navbar toggle-navbar hidden-desktop" data-toggle="collapse" data-target=".nav-collapse">
                            <a href="#"><span class="lightgray uppercase nomargin">Select</span><h4 class="uppercase">department<span class="caret darkgrey"></span></h4></a>
                        </button>
                        <nav class="main-nav nav-collapse collapse" >
                            <ul role="navigation" class="nav light-layout">
                                <li class="complete-collapse">
                                    <a href="#" class="hidden-phone hidden-tablet"><span class="lightgray uppercase nomargin">Select</span><h4 class="uppercase">department<span class="caret darkgrey"></span></h4></a>
                                    <ul class="span12">
                                        <li>
                                            <ul>
                                                <li>
                                                    <a href="category_template_1.html" class="fancy-zoom-in-rotate"><span class="fancy-zoom-in-rotate-text uppercase">Men Wear</span><img src="images/men-wear.jpg" width="300" height="120" alt="mean wear" /></a>
                                                </li>
                                                <li>
                                                    <a href="account.html" class="has-separator"><strong>Account</strong></a>
                                                    <a href="address.html" class="has-separator"><strong>Address</strong></a>
                                                    <a href="#" class="has-separator"><strong>Bestseller </strong></a>
                                                </li>
                                                <li>
                                                    <a href="blog_single_2.html" class="has-separator">Single Post Full Width</a>
                                                    <a href="blog_single.html" class="has-separator">Single Post</a>
                                                </li>
                                                <li>
                                                    <a href="blog.html" class="has-separator">Blog</a>
                                                    <a href="shipping_information.html" class="has-separator">Shipping Information</a>
                                                    <a href="shipping.html" class="has-separator">Shipping</a>
                                                </li>
                                                <li>
                                                    <a href="#" class="has-separator">Pants</a>
                                                    <a href="#" class="has-separator">Headwear</a>
                                                    <a href="#" class="has-separator">Accesories</a>
                                                    <a href="#" class="has-separator">Shoes</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <ul>
                                                <li>
                                                    <a href="category_template_2.html" class="fancy-zoom-in-rotate"><span class="fancy-zoom-in-rotate-text uppercase">Women Wear</span><img src="images/women-wear.jpg" width="300" height="120" alt="women wear" /></a>
                                                </li>
                                                <li>
                                                    <a href="cart.html" class="has-separator"><strong>Cart</strong></a>
                                                    <a href="home.html" class="has-separator"><strong class="mustard">Menu V1</strong></a>
                                                    <a href="home_2.html" class="has-separator"><strong class="mustard">Menu V2 </strong></a>
                                                </li>
                                                <li>
                                                    <a href="category_template_1.html" class="has-separator">Category Page V1</a>
                                                    <a href="category_template_2.html" class="has-separator">Category Page V2</a>
                                                </li>
                                                <li>
                                                    <a href="login.html" class="has-separator">Login</a>
                                                    <a href="order_confirmation.html" class="has-separator">Order Confirmation</a>
                                                    <a href="product.html" class="has-separator">Product</a>
                                                </li>
                                                <li>
                                                    <a href="#" class="has-separator">Pants</a>
                                                    <a href="summary.html" class="has-separator">Summary</a>
                                                    <a href="home_popup.html" class="has-separator"><strong class="mustard">Popup Screen</strong></a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <ul>
                                                <li>
                                                    <a href="category_template_1.html" class="fancy-zoom-in-rotate"><span class="fancy-zoom-in-rotate-text fancy-zoom-in-rotate-smaller-text uppercase">Shoes</span><img src="images/shoes.jpg" width="260" height="50" alt="shoes wear" /></a>
                                                </li>
                                                <li>
                                                    <a href="category_template_2.html" class="fancy-zoom-in-rotate"><span class="fancy-zoom-in-rotate-text fancy-zoom-in-rotate-smaller-text uppercase">Outlet</span><img src="images/outlet.jpg" width="260" height="50" alt="outlet wear" /></a>
                                                </li>
                                                <li>
                                                    <a href="category_template_1.html" class="fancy-zoom-in-rotate"><span class="fancy-zoom-in-rotate-text fancy-zoom-in-rotate-smaller-text uppercase"><strong>Sale</strong></span><img src="images/sale.jpg" width="260" height="80" alt="sale" /></a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="span9">
                        <form class="form-search clearfix">
                            <input type="text" class="input-medium search_input pull-left" placeholder="Product search">
                            <button type="submit" class="search_button">Search <i class="icon-search icon-white"></i></button>
                        </form>
                    </div>
                </div>     

            </div>

        </div>


<!-- 
==================================================================
Featured Slider Area
==================================================================
-->
@yield('promo')

    <!-- 
    ==================================================================
    Featured Banner
    ==================================================================
    -->
    @yield('content')

    

    <!-- 
    ==================================================================
    Newsletter
    ==================================================================
    -->
<!--
    <div class="fullwidth clearfix newsletter_cta twenty_margin_top">
        <div class="container">
            <div class="row clearfix">
                <div class="span8">
                    <h3 class="pull-left uppercase font-light lightgray">subscribe  to newsletter <span class="mustard">get a 10% discount on 1st purchase</span></h3>
                </div>
                <div class="span4">
                    <form class="form-newsletter clearfix">
                        <input type="text" class="input-medium newsletter_input pull-left" placeholder="your email address">
                        <button type="submit" class="newsletter_button">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- 
    ==================================================================
    Small Products 3 Column Section
    ==================================================================
    -->

    <div class="container">
        <!--
        <div class="row twenty_margin_top clearfix">
            <div class="span4">
                <h4 class="heading darkgrey font-light uppercase twenty_margin_bottom"><span class="heading_whitebg">Top sellers</span></h4>
                <div class="product_row clearfix">
                    <div class="image">
                        <a href="product.html">
                            <img src="images/products/small1.png" width="90" height="100" alt="" />
                        </a>
                    </div>
                    <div class="detail">
                        <a class="darkgrey" href="product.html">
                            Eskimo Toast T-shirt<br/> by <span>Cleptomanicx</span>
                        </a><br/><br/>
                        <span class="price">
                            35.00€
                        </span>
                    </div>
                </div>
                <div class="product_row clearfix">
                    <div class="image">
                        <a href="product.html">
                            <img src="images/products/small4.png" width="90" height="100" alt="" />
                        </a>
                    </div>
                    <div class="detail">
                        <a class="darkgrey" href="product.html">
                            Era Black Shoes <br/>by <span>Vans</span>
                        </a><br/><br/>
                        <span class="price">
                            65.00€
                        </span>
                    </div>
                </div>
                <div class="product_row clearfix">
                    <div class="image">
                        <a href="product.html">
                            <img src="images/products/small7.png" width="90" height="100" alt="" />
                        </a>
                    </div>
                    <div class="detail">
                        <a class="darkgrey" href="product.html">
                            Corry T-shirt <br/> by <span>Element</span>
                        </a><br/><br/>
                        <span class="price">
                            39.50€
                        </span>
                    </div>
                </div>
            </div>
            <div class="span4">
                <h4 class="heading darkgrey font-light uppercase twenty_margin_bottom"><span class="heading_whitebg">on sale</span></h4>
                <div class="product_row clearfix">
                    <div class="image">
                        <a href="product.html">
                            <img src="images/products/small2.png" width="90" height="100" alt="" />
                        </a>
                    </div>
                    <div class="detail">
                        <a class="darkgrey" href="product.html">
                            Spicoli 4 Shades<br/> by <span>Vans</span>
                        </a><br/><br/>
                        <span class="price">
                            25.00€
                        </span>
                    </div>
                </div>
                <div class="product_row clearfix">
                    <div class="image">
                        <a href="product.html">
                            <img src="images/products/small5.png" width="90" height="100" alt="" />
                        </a>
                    </div>
                    <div class="detail">
                        <a class="darkgrey" href="product.html">
                            Side Zip Hoodie <br/>by <span>Chico</span>
                        </a><br/><br/>
                        <span class="price">
                            48.00€
                        </span>
                    </div>
                </div>
                <div class="product_row clearfix">
                    <div class="image">
                        <a href="product.html">
                            <img src="images/products/small8.png" width="90" height="100" alt="" />
                        </a>
                    </div>
                    <div class="detail">
                        <a class="darkgrey" href="product.html">
                            Bill Murray Sweatshirt <br/> by <span>Abandon Ship</span>
                        </a><br/><br/>
                        <span class="price">
                            59.50€
                        </span>
                    </div>
                </div>
            </div>
            <div class="span4">
                <h4 class="heading darkgrey font-light uppercase twenty_margin_bottom"><span class="heading_whitebg">new stuff</span></h4>
                <div class="product_row clearfix">
                    <div class="image">
                        <a href="product.html">
                            <img src="images/products/small3.png" width="90" height="100" alt="" />
                        </a>
                    </div>
                    <div class="detail">
                        <a class="darkgrey" href="product.html">
                            Fresh Shirt-Shortsleeve<br/> by <span>Carhartt</span>
                        </a><br/><br/>
                        <span class="price">
                            35.00€
                        </span>
                    </div>
                </div>
                <div class="product_row clearfix">
                    <div class="image">
                        <a href="product.html">
                            <img src="images/products/small6.png" width="90" height="100" alt="" />
                        </a>
                    </div>
                    <div class="detail">
                        <a class="darkgrey" href="product.html">
                            AV Native American <br/>by <span>Vans</span>
                        </a><br/><br/>
                        <span class="price">
                            65.00€
                        </span>
                    </div>
                </div>
                <div class="product_row clearfix">
                    <div class="image">
                        <a href="product.html">
                            <img src="images/products/small9.png" width="90" height="100" alt="" />
                        </a>
                    </div>
                    <div class="detail">
                        <a class="darkgrey" href="product.html">
                            Coolwood T-shirt <br/> by <span>Billabong</span>
                        </a><br/><br/>
                        <span class="price">
                            31.50€
                        </span>
                    </div>
                </div>
            </div>
        </div>


        <!-- 
        ==================================================================
        Low In Stock Section
        ==================================================================
        -->
        <!--
        <div class="row twenty_margin_top clearfix">
            <div class="span12">
                <h3 class="heading darkgrey font-light uppercase"><span class="heading_whitebg">Last Minute <span class="lightgray">Super Sale</span></span></h3>
            </div>
        </div>

        <div class="row twenty_margin_top clearfix">
            <div class="span4 product_detailed">
                <div class="row">
                    <div class="span4 product_image">
                        <div class="image flip_image">
                            <a href="product.html">
                                <div class="front_image">
                                    <img src="images/products/prod10.png" width="220" height="250" alt="" />
                                </div>
                                <div class="back_image">
                                    <img src="images/products/prod10-1.png" width="220" height="250" alt="" />
                                </div>
                            </a>
                        </div>
                        <div class="image_ux">
                            <div class="section">
                                Size<br/>
                                <select>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                            <div class="section">
                                Quantity<br/>
                                <select>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                            <div class="section">
                                <a class="cart uppercase" href="product.html">
                                    Add <br/>to cart
                                </a>
                            </div>
                            <div class="section nomobile">
                                <a class="lightgray wishlist" href="cart.html">
                                    Wishlist
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="span4">
                        <div class="description clearfix">
                            <p class="white nomargin">
                                Authentic Red Unisex Shoes<br/> by <a href="category_template_2.html">Vans</a>
                            </p>
                            <span class="price white">
                                109.50€
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="span4 product_detailed">
                <div class="row">
                    <div class="span4 product_image">
                        <div class="image flip_image">
                            <a href="product.html">
                                <div class="front_image">
                                    <img src="images/products/prod11.png" width="220" height="250" alt="" />
                                </div>
                                <div class="back_image">
                                    <img src="images/products/prod11-1.png" width="220" height="250" alt="" />
                                </div>
                            </a>
                        </div>
                        <div class="image_ux">
                            <div class="section">
                                Size<br/>
                                <select>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                            <div class="section">
                                Quantity<br/>
                                <select>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                            <div class="section">
                                <a class="cart uppercase" href="product.html">
                                    Add <br/>to cart
                                </a>
                            </div>
                            <div class="section nomobile">
                                <a class="lightgray wishlist" href="cart.html">
                                    Wishlist
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="span4">
                        <div class="description clearfix">
                            <p class="white nomargin">
                                Authentic Red Unisex Shoes<br/> by <a href="category_template_2.html">Vans</a>
                            </p>
                            <span class="price white">
                                109.50€
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="span4 product_detailed">
                <div class="row">
                    <div class="span4 product_image">
                        <div class="image flip_image">
                            <a href="product.html">
                                <div class="front_image">
                                    <img src="images/products/prod12.png" width="220" height="250" alt="" />
                                </div>
                                <div class="back_image">
                                    <img src="images/products/prod12-1.png" width="220" height="250" alt="" />
                                </div>
                            </a>
                        </div>
                        <div class="image_ux">
                            <div class="section">
                                Size<br/>
                                <select>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                            <div class="section">
                                Quantity<br/>
                                <select>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                            <div class="section">
                                <a class="cart uppercase" href="product.html">
                                    Add <br/>to cart
                                </a>
                            </div>
                            <div class="section nomobile">
                                <a class="lightgray wishlist" href="cart.html">
                                    Wishlist
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="span4">
                        <div class="description clearfix">
                            <p class="white nomargin">
                                Authentic Red Unisex Shoes<br/> by <a href="category_template_2.html">Vans</a>
                            </p>
                            <span class="price white">
                                109.50€
                            </span>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>

        <!-- 
        ==================================================================
        Blog | Instagram
        ==================================================================
        -->
<!--
        <div class="row twenty_margin_top clearfix">
            <div class="span6 home_blog">
                <div class="row clearfix">
                    <div class="span6">
                        <h3 class="heading darkgrey font-light uppercase"><span class="heading_whitebg">Blog <span class="lightgray">By Our Team </span></span></h3>
                    </div>
                </div>
                <div class="row twenty_margin_top clearfix">
                    <div class="span6">
                        <div class="image">
                            <a href="blog.html">
                                <img src="images/blog1.png" width="100" height="100" alt="" />
                            </a>
                        </div>
                        <div class="excerpt">
                            <a class="darkgrey uppercase nomargin title" href="blog.html">How to choose shoes</a>
                            <p class="darkgrey nomargin nopadding">Lorem ipsum dolor sit amet, consectetur adipi elit. Ut vel lacus justo. Nullam feugiat velit euismod auctor volutpat. In congue, libero.</p>
                            <a href="blog.html" class="uppercase">Read more</a>
                        </div>
                    </div>
                </div>
                <div class="row twenty_margin_top clearfix">
                    <div class="span6">
                        <div class="image">
                            <a href="blog.html">
                                <img src="images/blog1.png" width="100" height="100" alt="" />
                            </a>
                        </div>
                        <div class="excerpt">
                            <a class="darkgrey uppercase nomargin title" href="blog.html">How to choose shoes pt.2</a>
                            <p class="darkgrey nomargin nopadding">Lorem ipsum dolor sit amet, consectetur adipi elit. Ut vel lacus justo. Nullam feugiat velit euismod auctor volutpat. In congue, libero.</p>
                            <a href="blog.html" class="uppercase">Read more</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="span6 instagram">
                <div class="row clearfix">
                    <div class="span6">
                        <h3 class="heading darkgrey font-light uppercase"><span class="heading_whitebg">Instagram <span class="lightgray">Photos </span></span></h3>
                    </div>
                </div>
                <div class="row twenty_margin_top clearfix">
                    <div class="span6">
                        <div class="image">
                            <a href="blog.html">
                                <img src="images/instagram/inst1.png" width="100" height="100" alt="" />
                            </a>
                        </div>
                        <div class="image">
                            <a href="blog.html">
                                <img src="images/instagram/inst2.png" width="100" height="100"  alt="" />
                            </a>
                        </div>
                        <div class="image">
                            <a href="blog.html">
                                <img src="images/instagram/inst3.png" width="100" height="100"  alt="" />
                            </a>
                        </div>
                        <div class="image last">
                            <a href="blog.html">
                                <img src="images/instagram/inst4.png" width="100" height="100"  alt="" />
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row twenty_margin_top clearfix">
                    <div class="span6">
                        <div class="image">
                            <a href="blog.html">
                                <img src="images/instagram/inst5.png" width="100" height="100"  alt="" />
                            </a>
                        </div>
                        <div class="image">
                            <a href="blog.html">
                                <img src="images/instagram/inst6.png" width="100" height="100"  alt="" />
                            </a>
                        </div>
                        <div class="image">
                            <a href="blog.html">
                                <img src="images/instagram/inst7.png" width="100" height="100"  alt="" />
                            </a>
                        </div>
                        <div class="image nomargin">
                            <a href="blog.html">
                                <img src="images/instagram/inst8.png" width="100" height="100"  alt="" />
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>



<!-- 
==================================================================
Footer
==================================================================
-->

<div id="footer">
    <div class="container">
        <div class="row clearfix">
            <div class="span5">
                <h4 class="uppercase font-light darkgrey">Brands</h4>
                <a class="darkgrey" href="#">Adidas</a>, <a class="darkgrey" href="#">Adio</a>, <a class="darkgrey" href="#">Birdhouse</a>, <a class="darkgrey" href="#">C1rca</a>, <a class="darkgrey" href="#">Calvin Klein</a>, <br/><a class="darkgrey" href="#">Cheap Monday</a>, <a class="darkgrey" href="#">Dickies</a>, <a class="darkgrey" href="#">Element</a>, <a class="darkgrey" href="#">Emerica</a>, <a class="darkgrey" href="#">Fallen</a>,<br/> <a class="darkgrey" href="#">Herschel</a>, <a class="darkgrey" href="#">HUF</a>, <a class="darkgrey" href="#">Irie Daily</a>, <a class="darkgrey" href="#">Lee</a>, <a class="darkgrey" href="#">Levis</a>, <a class="darkgrey" href="#">LRG</a>, <a class="darkgrey" href="#">Mishka</a>, <a class="darkgrey" href="#">Nike</a>,<br/> <a class="darkgrey" href="#">Obey</a>, <a class="darkgrey" href="#">Puma</a>, <a class="darkgrey" href="#">Ray-ban</a>, <a class="darkgrey" href="#">Roxy</a>, <a class="darkgrey" href="#">Quicksilver</a>, <a class="darkgrey" href="#">Supra</a>,<br/> <a class="darkgrey" href="#">Supreme</a>, <a class="darkgrey" href="#">The Hundreds</a>, <a class="darkgrey" href="#">Vans</a>, <a class="darkgrey" href="#">Volcom</a>
            </div>
            <div class="span2">
                <h4 class="uppercase font-light darkgrey">Customer Service</h4>
                <a href="#" class="darkgrey">Help</a><br/>
                <a href="#" class="darkgrey">FAQ</a><br/>
                <a href="#" class="darkgrey">Gift Cards</a><br/>
                <a href="#" class="darkgrey">Order Status</a><br/>
                <a href="#" class="darkgrey">Free Shipping</a><br/>
                <a href="#" class="darkgrey">Returns & Exchanges</a><br/>
            </div>
            <div class="span2">
                <h4 class="uppercase font-light darkgrey">Information</h4>
                <a href="#" class="darkgrey">Shipping </a><br/>
                <a href="#" class="darkgrey">Returns </a><br/>
                <a href="#" class="darkgrey">Payments </a><br/>
                <a href="#" class="darkgrey">Contact </a><br/>
            </div>
            <div class="span3">
                <h4 class="uppercase font-light darkgrey">Stay connected</h4>
                <ul class="inline social_footer">
                    <li class="nopadding_left">
                        <a href="#">
                            <img src="images/social/facebook.png" widht="29" height="28" alt="" />
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="images/social/twitter.png" widht="29" height="28" alt="" />
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="images/social/pinterest.png" widht="29" height="28" alt="" />
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="images/social/instagram.png" widht="29" height="28" alt="" />
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="images/social/flickr.png" widht="29" height="28" alt="" />
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>


<!-- 
==================================================================
Copyright Information
==================================================================
-->

<div id="copyright">
    <div class="container">
        <div class="row clearfix">
            <div class="span8">
                <p class="darkgrey uppercase nomargin noppading">&copy; 2014 Astitva store </p>
            </div>
            <div class="span4 credit clearfix">
                <ul class="inline pull-right nopadding nomargin">
                    <li>
                        CASH ON DELIVERY
                    </li>
                    
            </div>
        </div>
    </div>
</div>

<!-- Popup -->
<div class="popup">
    <div class="mask"></div>
    <div class="box span9 clearfix">
        <i class="close">&#9587;</i>
        <figure class="product_fb">
            <img src="images/products/prod-detail.png" alt="">
        </figure>
    </div>
</div>
<!-- /Popup -->

<!-- Popup 2-->
<div class="container popup offer">
    <div class="mask"></div>
    <div class="row">
        <div class="box span9 clearfix">
            <i class="close">&#9587;</i>
            <div class="row">
                <figure class="promo span4">
                    <img src="images/subscribe_promo.jpg" alt=""/>
                </figure>
                <div class="content span5">
                    <div class="header">
                        <span class="off font-oswald special-text">20%</span>
                        <span class="uppercase text">one day 
                            <span class="special-text">discount</span> every month
                        </span>
                    </div>
                    <div class="main">
                        <h4 class="uppercase font-light">Subscribe and don’t miss it!</h4>
                        <form>
                            <input type="text" placeholder="Your Email" name="email" class="uppercase"/>
                            <input type="submit" value="Send" class="button mustard"/>
                        </form>
                        <div class="social ten_margin_top">
                            <span class="lbl uppercase">recommend for friends</span>
                            <div class="icons pull-right">
                                <a href="#" class="dib">
                                    <img src="images/social/facebook.png" alt=""/>
                                </a>
                                <a href="#" class="dib">
                                    <img src="images/social/twitter.png" alt=""/>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /Popup 2-->
{{ HTML::script('js/jquery.isotope.min.js') }}
{{ HTML::script('js/jquery-ui-custom.min.js') }}
{{ HTML::script('js/jquery.cookie.js') }} 
{{ HTML::script('js/script.js') }}

</body>
</html>