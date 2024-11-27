<!DOCTYPE html>
<html lang="zxx">

<head>

    @include('includes.shop2.meta')

    <title>Male-Fashion | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&display=swap"
    rel="stylesheet">

    <!-- Css Styles -->

    @include('includes.shop2.style')

</head>

<body>
    <!-- Page Preloder -->


    <!-- Offcanvas Menu End -->

    <!-- Header Section Begin -->
    @include('includes.shop2.header')

    <!-- Header Section End -->

    <!-- Breadcrumb Section Begin -->
    <main class="main">
        @yield('content')
    </main>

    <!-- Breadcrumb Section End -->

    <!-- Shop Section Begin -->

    <!-- Shop Section End -->

    @include('includes.shop2.footer')
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
    @include('includes.shop2.script')
</body>

</html>
