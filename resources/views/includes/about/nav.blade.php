<nav class="header__menu mobile-menu">
    <ul>
        {{-- <li class=""><a href="{{ url('./index') }}">Home</a></li> --}}
        {{-- <li class="{{ request()->routeIs('pages.home') ? 'active' : '' }}" ><a href="{{ route('pages.home') }}">Home</a></li> --}}
        <li class="{{ request()->routeIs('pages.home') ? 'active' : '' }}">
            <a href="{{ route('pages.home') }}">Home</a>
        </li>

        <li><a href="{{ url('./shop') }}">Shop</a></li>
        
        <li><a href="#">Pages</a>
            <ul class="dropdown">
                <li><a href="{{ url('./about') }}">About Us</a></li>
                <li><a href="{{ url('./shop-details') }}">Shop Details</a></li>
                <li><a href="{{ url('./shopping-cart') }}">Shopping Cart</a></li>
                <li><a href="{{ url('./checkout') }}">Check Out</a></li>
                <li><a href="{{ url('./blog-details') }}">Blog Details</a></li>
            </ul>
        </li>
        {{-- <li><a href="{{ url('./blog') }}">Blog</a></li>
        <li><a href="{{ url('./contact') }}">Contacts</a></li> --}}
        <li class="{{ request()->routeIs('pages.blog') ? 'active' : '' }}">
            <a href="{{ route('pages.blog') }}">Blog</a>
        </li>
        {{-- <li><a href="{{ url('./shop') }}">Shop</a></li> --}}
        <li class="{{ request()->routeIs('pages.contact') ? 'active' : '' }}">
            <a href="{{ route('pages.contact') }}">Contact</a>
        </li>
    </ul>
</nav>
