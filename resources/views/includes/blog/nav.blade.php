<nav class="header__menu mobile-menu">
    <ul>
        {{-- <li class="active"><a href="{{ url('./') }}">Home</a></li> --}}
        <li class="{{ request()->routeIs('pages.home') ? 'active' : '' }}">
            <a href="{{ route('pages.home') }}">Home</a>
        </li>

        <li class="{{ request()->routeIs('pages.shop') ? 'active' : '' }}">
            <a href="{{ route('pages.shop') }}">Shop</a>
        </li>
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
