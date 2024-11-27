

<!DOCTYPE html>
<html lang="zxx">
  <head>
    @include('includes.pages.product-detail.meta')

    <title>Male-Fashion | Template</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Google Font -->
    <link
      href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
      integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />

    <!-- Css Styles -->
    @include('includes.pages.product-detail.style')

    <style>
      .carousel-control-prev-icon,
      .carousel-control-next-icon {
        background-color: black; /* Set the background color to black */
        border-radius: 50%; /* Optional: Make it circular */
        width: 50px; /* Adjust the size as needed */
        height: 50px; /* Adjust the size as needed */
      }
    </style>
  </head>

  <body>
    <!-- Page Preloder -->
    <div id="preloder">
      <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu Begin -->
    {{-- <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
      <div class="offcanvas__option">
        <div class="offcanvas__links">
          <a href="#">Sign in</a>
          <a href="#">FAQs</a>
        </div>
        <div class="offcanvas__top__hover">
          <span>Usd <i class="arrow_carrot-down"></i></span>
          <ul>
            <li>USD</li>
            <li>EUR</li>
            <li>USD</li>
          </ul>
        </div>
      </div>
      <div class="offcanvas__nav__option">
        <a href="#" class="search-switch"
          ><img src="img/icon/search.png" alt=""
        /></a>
        <a href="#"><img src="img/icon/heart.png" alt="" /></a>
        <a href="#"><img src="img/icon/cart.png" alt="" /> <span>0</span></a>
        <div class="price">$0.00</div>
      </div>
      <div id="mobile-menu-wrap"></div>
      <div class="offcanvas__text">
        <p>Free shipping, 30-day return or refund guarantee.</p>
      </div>
    </div> --}}
    <!-- Offcanvas Menu End -->

    <!-- Header Section Begin -->
    @include('includes.pages.product-detail.header')
    <!-- Header Section End -->

    <!-- Shop Details Section Begin -->
    <main class="main">
        @yield('content')
    </main>s

    <!-- Related Section End -->

    <!-- Footer Section Begin -->
    @include('includes.pages.product-detail.footer')

    <!-- Footer Section End -->

    <!-- Search Begin -->
    <div class="search-model">
      <div class="h-100 d-flex align-items-center justify-content-center">
        <div class="search-close-switch">+</div>
        <form class="search-model-form">
          <input type="text" id="search-input" placeholder="Search here....." />
        </form>
      </div>
    </div>
    <!-- Search End -->

    <!-- Js Plugins -->
    @include('includes.pages.product-detail.script')

  </body>
</html>

