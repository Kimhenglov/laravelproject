<!DOCTYPE html>
<html lang="zxx">

<head>
    @include('includes.shop.meta')
    <title>Male-Fashion | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&display=swap"
    rel="stylesheet">

    <!-- Css Styles -->
    @include('includes.shop.style')
</head>

<body>
    <!-- Offcanvas Menu End -->

    <!-- Header Section Begin -->
    @include('includes.shop.header')

    <!-- Header Section End -->

    <main class="main">
        @yield('content')
    </main>

    <!-- Footer Section Begin -->

    @include('includes.shop.footer')


    <!-- Footer Section End -->

    <!-- Search Begin -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch">+</div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>
    <!-- Search End -->

    <!-- Js Plugins -->
    @include('includes.shop.script')
</body>

</html>
