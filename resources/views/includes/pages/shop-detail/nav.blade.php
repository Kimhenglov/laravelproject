<nav class="header__menu mobile-menu">
    <ul>
        {{-- <li class="active"><a href="{{ url('./') }}">Home</a></li> --}}
        {{-- <li class="{{ request()->routeIs('pages.home') ? 'active' : '' }}" href="{{ route('pages.home') }}">Home</li> --}}
        <li class="{{ request()->routeIs('pages.home') ? 'active' : '' }}">
            <a href="{{ route('pages.home') }}">Home</a>
        </li>

        <li class="{{ request()->routeIs('pages.shop') ? 'active' : '' }}">
            <a href="{{ route('pages.shop') }}">Shop</a>
        </li>

        {{-- <li class="{{ request()->routeIs(['pages.about', 'pages.shop-details', 'pages.shopping-cart', 'pages.checkout', 'pages.blog-details']) ? 'active' : '' }}">
            <a href="#">Pages</a>
            <ul class="dropdown">
                <li class="{{ request()->routeIs('pages.about') ? 'active' : '' }}">
                    <a href="{{ url('about') }}">About Us</a>
                </li>
                <li class="{{ request()->routeIs('pages.shop-details') ? 'active' : '' }}">
                    <a href="{{ url('shop-details') }}">Shop Details</a>
                </li>
                <li class="{{ request()->routeIs('pages.shopping-cart') ? 'active' : '' }}">
                    <a href="{{ url('shopping-cart') }}">Shopping Cart</a>
                </li>
                <li class="{{ request()->routeIs('checkout') ? 'active' : '' }}">
                    <a href="{{ url('checkout') }}">Check Out</a>
                </li>
                <li class="{{ request()->routeIs('blog.details') ? 'active' : '' }}">
                    <a href="{{ url('blog-details') }}">Blog Details</a>
                </li>
            </ul>
        </li> --}}

        <li><a href="#">Pages</a>
            <ul class="dropdown">
                <li><a href="{{ route('pages.about') }}">About Us</a></li>
                <li><a href="{{ route('pages.shop-detail') }}">Shop Details</a></li>
                <li><a href="{{ route('pages.shopping-cart') }}">Shopping Cart</a></li>
                <li><a href="{{ url('./checkout') }}">Check Out</a></li>
                <li><a href="{{ url('./blog-details') }}">Blog Details</a></li>
            </ul>
        </li>

        <li class="{{ request()->routeIs('pages.blog') ? 'active' : '' }}">
            <a href="{{ route('pages.blog') }}">Blog</a>
        </li>
        {{-- <li><a href="{{ url('./shop') }}">Shop</a></li> --}}
        <li class="{{ request()->routeIs('pages.contact') ? 'active' : '' }}">
            <a href="{{ route('pages.contact') }}">Contact</a>
        </li>
    </ul>
</nav>
