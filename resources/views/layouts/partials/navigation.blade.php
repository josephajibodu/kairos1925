<ul class="nav navbar-nav mb-2 mb-lg-0">
    <li class="menu-item-has-children">
        <a class="{{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Home</a>
        <ul class="sub-menu">
            <li><a class="{{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Wedding Home 1</a></li>
            <li><a href="{{ route('home') }}#story">Wedding Home 2</a></li>
            <li><a href="{{ route('home') }}#couple">Announcement Home 1</a></li>
            <li><a href="{{ route('home') }}#gallery">Announcement Home 2</a></li>
            <li><a href="{{ route('home') }}#event">Muslim Wedding Home</a></li>
            <li><a href="{{ route('home') }}#team">Asian Wedding Home</a></li>
            <li><a href="{{ route('home') }}#rsvp">Muslim Wedding Home(RTL)</a></li>
            <li><a href="{{ route('invitation') }}">Wedding Invitation 1</a></li>
            <li><a href="{{ route('invitation') }}">Wedding Invitation 2</a></li>
        </ul>
    </li>
    <li class="menu-item-has-children">
        <a href="#">Pages</a>
        <ul class="sub-menu">
            <li><a href="{{ route('about') }}">About</a></li>
            <li class="menu-item-has-children">
                <a href="{{ route('story') }}">Our Story</a>
                <ul class="sub-menu">
                    <li><a href="{{ route('story') }}">Our Story Style 1</a></li>
                    <li><a href="{{ route('story') }}">Our Story Style 2</a></li>
                    <li><a href="{{ route('story') }}">Our Story Style 3</a></li>
                    <li><a href="{{ route('story') }}">Our Story Style 4</a></li>
                    <li><a href="{{ route('story') }}">Our Story Style 5</a></li>
                    <li><a href="{{ route('story') }}">Our Story Style 6</a></li>
                </ul>
            </li>
            <li><a href="{{ route('accommodation') }}">Accommodation</a></li>
            <li class="menu-item-has-children">
                <a href="{{ route('rsvp') }}">RSVP</a>
                <ul class="sub-menu">
                    <li><a href="{{ route('rsvp') }}">RSVP Style 1</a></li>
                    <li><a href="{{ route('rsvp') }}">RSVP Style 2</a></li>
                    <li><a href="{{ route('rsvp') }}">RSVP Style 3</a></li>
                    <li><a href="{{ route('rsvp') }}">RSVP Style 4</a></li>
                    <li><a href="{{ route('rsvp') }}">RSVP Style 5</a></li>
                    <li><a href="{{ route('rsvp') }}">RSVP Style 6</a></li>
                    <li><a href="{{ route('rsvp') }}">RSVP Style 7</a></li>
                </ul>
            </li>
            <li><a href="{{ route('gallery') }}">Gallery</a></li>
            <li><a href="{{ route('planners') }}">Planners</a></li>
            <li><a href="{{ route('team-single') }}">Planner Single</a></li>
            <li><a href="{{ route('groom-bride') }}">Brides & Grooms</a></li>
            <li class="menu-item-has-children">
                <a href="{{ route('services') }}">Service</a>
                <ul class="sub-menu">
                    <li><a href="{{ route('services') }}">Service</a></li>
                    <li><a href="{{ route('services') }}">Service S2</a></li>
                    <li><a href="{{ route('services') }}">Service S3</a></li>
                    <li><a href="{{ route('service-single') }}">Service Single</a></li>
                </ul>
            </li>
            <li><a href="{{ route('pricing') }}">Pricing</a></li>
            <li class="menu-item-has-children">
                <a href="#">Auth Pages</a>
                <ul class="sub-menu">
                    <li><a href="{{ route('login') }}">Login</a></li>
                    <li><a href="{{ route('register') }}">Register</a></li>
                    <li><a href="{{ route('password.request') }}">Forgot Password</a></li>
                </ul>
            </li>
            <li><a href="{{ route('coming-soon') }}">Coming Soon</a></li>
            <li><a href="{{ route('404') }}">404 Error</a></li>
        </ul>
    </li>
    <li class="menu-item-has-children">
        <a href="{{ route('portfolio') }}">Portfolio</a>
        <ul class="sub-menu">
            <li><a href="{{ route('portfolio') }}">Portfolio Grid</a></li>
            <li><a href="{{ route('portfolio-masonry') }}">Portfolio Masonry</a></li>
            <li><a href="{{ route('portfolio-masonry-s2') }}">Portfolio Masonry S2</a></li>
            <li><a href="{{ route('portfolio-masonry-s3') }}">Portfolio Masonry S3</a></li>
            <li><a href="{{ route('portfolio-single') }}">Portfolio Single</a></li>
        </ul>
    </li>
    <li class="menu-item-has-children">
        <a href="{{ route('shop') }}">Shop</a>
        <ul class="sub-menu">
            <li><a href="{{ route('shop') }}">Shop</a></li>
            <li><a href="{{ route('shop-single') }}">Shop Single</a></li>
            <li><a href="{{ route('cart') }}">Cart</a></li>
            <li><a href="{{ route('wishlist') }}">Wishlist</a></li>
            <li><a href="{{ route('checkout') }}">Checkout</a></li>
        </ul>
    </li>
    <li><a href="{{ route('contact') }}">Contact</a></li>
    <li class="menu-item-has-children">
        <a href="{{ route('blog') }}">Blog</a>
        <ul class="sub-menu">
            <li><a href="{{ route('blog') }}">Blog right sidebar</a></li>
            <li><a href="{{ route('blog-left-sidebar') }}">Blog left sidebar</a></li>
            <li><a href="{{ route('blog-fullwidth') }}">Blog fullwidth</a></li>
            <li class="menu-item-has-children">
                <a href="#">Blog details</a>
                <ul class="sub-menu">
                    <li><a href="{{ route('blog-single') }}">Blog details right sidebar</a></li>
                    <li><a href="{{ route('blog-single-left-sidebar') }}">Blog details left sidebar</a></li>
                    <li><a href="{{ route('blog-single-fullwidth') }}">Blog details fullwidth</a></li>
                </ul>
            </li>
        </ul>
    </li>
</ul>
