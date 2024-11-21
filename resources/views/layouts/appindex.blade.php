<!DOCTYPE html>
<html lang="zxx">

<head>

    @include('includes.index.meta')

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+Knujsl7/6Xj1w5p2pm7TZQ8CT7WAw3KoZXeFczvO9/C9HP" crossorigin="anonymous">
    <title>BRANDKHMERSUPLIE | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&display=swap"
    rel="stylesheet">

    <!-- Css Styles -->
    @include('includes.index.style')

    <style>


        *::after,
        *::before {
        margin: 0;
        padding: 0;
        border: none;
        outline: none;
        box-sizing: border-box;
        overflow: hidden;
        }

        .containernew {
        display: flex;
        flex-direction: column;
        height: 100vh;
        width: 100%;
        }

        .scroll-container {
        height: 100vh;
        position: relative;
        }

        .carousel {
        position: absolute;
        width: 100%;
        top: 26%;
        white-space: nowrap;
        overflow: hidden;
        }

        .carousel img {
        width: 100%;
        margin-left: 50px;
        border-radius: 19px;
        }

        .carousel-primary {
        display: flex;
        justify-content: space-around;
        animation: scroll-horizontal-primary 10s linear infinite;
        }

        .carousel-secondary {
        display: flex;
        justify-content: space-around;
        animation: scroll-horizontal-secondary 20s linear infinite;
        animation-delay: 0s; /* Added delay for smoother synchronization */
        }


        @keyframes scroll-horizontal-primary {
        0% {
            left: 100%;
        }
        100% {
            left: -100%;
        }
        }

        @keyframes scroll-horizontal-secondary {
        0% {
            left: 200%;
        }
        100% {
            left: -200%;
        }
        }

        .carousel:hover {
        animation-play-state: paused;
        }

                /* Keyframes for the fade-in animation */
        @keyframes fadeIn {
            0% {
                opacity: 0; /* Start fully invisible */
            }
            100% {
                opacity: 1; /* End fully visible */
            }
        }

        /* Initial state for the product items */
        .product-item {
            opacity: 0; /* Start invisible */
            transition: opacity 0.3s ease; /* Smooth transition for opacity */
        }

        /* Class to show the item with animation */
        .visible {
            opacity: 1; /* Make it visible */
            animation: fadeIn 0.8s ease forwards; /* Apply the fade-in animation */
        }




        /* Container for the image */
        .product__item__pic {
            position: relative;
            overflow: hidden;
        }

        /* Image zoom effect */
        .product__item__pic img {
            transition: transform 0.3s ease-in-out;
        }

        /* Zoom in on hover */
        .product__item__pic:hover img {
            transform: scale(1.1); /* Slightly zoom the image */
        }

        /* Reset the zoom on hover out */
        .product__item__pic img:hover {
            transform: scale(1); /* Reset to original size */
        }


        /* Container for the image */
        .banner__item__pic {
            overflow: hidden;
            position: relative;
            display: inline-block;
        }

        /* Image zoom effect */
        .banner__item__pic img {
            transition: transform 0.3s ease-in-out; /* Smooth transition for zoom */
            width: 100%;
        }

        /* Zoom in on hover */
        .banner__item__pic:hover img {
            transform: scale(1.1); /* Slightly zoom the image */
        }







    </style>
</head>

<body>
    <!-- Page Preloder -->
    <!-- Offcanvas Menu End -->

    <!-- Header Section End -->
    @include('includes.index.header')

    <!-- Hero Section Begin -->
    <main class="main">
        @yield('content')
    </main>

</div>



    <!-- Latest Blog Section End -->

    <!-- Footer Section Begin -->
    {{-- <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer__about">
                        <div class="footer__logo">
                            <!-- <a href="#"><img src="img/footer-logo.png" alt=""></a> -->
                        </div>
                        <p>The customer is at the heart of our unique business model, which includes design.</p>
                        <a href="#"><img src="img/payment.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-2 offset-lg-1 col-md-3 col-sm-6">
                    <div class="footer__widget">
                        <h6>Shopping</h6>
                        <ul>
                            <li><a href="#">Clothing Store</a></li>
                            <li><a href="#">Trending Shoes</a></li>
                            <li><a href="#">Accessories</a></li>
                            <li><a href="#">Sale</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6">
                    <div class="footer__widget">
                        <h6>Shopping</h6>
                        <ul>
                            <li><a href="#">Contact Us</a></li>
                            <li><a href="#">Payment Methods</a></li>
                            <li><a href="#">Delivary</a></li>
                            <li><a href="#">Return & Exchanges</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 offset-lg-1 col-md-6 col-sm-6">
                    <div class="footer__widget">
                        <h6>NewLetter</h6>
                        <div class="footer__newslatter">
                            <p>Be the first to know about new arrivals, look books, sales & promos!</p>
                            <form action="#">
                                <input type="text" placeholder="Your email">
                                <button type="submit"><span class="icon_mail_alt"></span></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="footer__copyright__text">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        <p>Copyright ©
                            <script>
                                document.write(new Date().getFullYear());
                            </script>2020
                            All rights reserved | This template is made with <i class="fa fa-heart-o"
                            aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                        </p>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </div>
                </div>
            </div>
        </div>
    </footer> --}}
    @include('includes.index.footer')
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

    @include('includes.index.script')


    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const productItems = document.querySelectorAll('.product-item');

            const observerOptions = {
                root: null, // Use the viewport as the container
                threshold: 0.1 // Trigger when 10% of the item is visible
            };

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        // Add the visible class for animation
                        entry.target.classList.add('visible');
                        // Stop observing once the item has been animated
                        observer.unobserve(entry.target);
                    }
                });
            }, observerOptions);

            productItems.forEach(item => {
                observer.observe(item);
            });
        });
        </script>



</body>

</html>
