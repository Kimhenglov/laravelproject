@extends('layouts.appproduct-details')

@section('content')


<section class="shop-details">
    <div class="product__details__pic" style="background-color: white">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="product__details__breadcrumb">
              <a href="{{ route('pages.home') }}">Home</a>
              <a href="{{ route('pages.shop') }}">Shop</a>
              <span>Product Details</span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-1 col-md-3">
            <ul class="nav nav-tabs" role="tablist">
              <li class="nav-item">
                <a
                  class="nav-link active"
                  data-toggle="tab"
                  href="#tabs-1"
                  role="tab"
                >
                  <div
                    class="product__thumb__pic set-bg"
                    data-setbg="{{ asset('theme/img/product/avMercedes.webp') }}"
                  ></div>
                </a>
              </li>
              <li class="nav-item">
                <a
                  class="nav-link"
                  data-toggle="tab"
                  href="#tabs-2"
                  role="tab"
                >
                  <div
                    class="product__thumb__pic set-bg"
                    data-setbg="{{ asset('theme/img/product/avSecond.webp') }}"
                  ></div>
                </a>
              </li>
              <li class="nav-item">
                <a
                  class="nav-link"
                  data-toggle="tab"
                  href="#tabs-3"
                  role="tab"
                >
                  <div
                    class="product__thumb__pic set-bg"
                    data-setbg="{{ asset('theme/img/product/Third.webp') }}"
                  ></div>
                </a>
              </li>
              <!-- <li class="nav-item">
                              <a class="nav-link" data-toggle="tab" href="#tabs-4" role="tab">
                                  <div class="product__thumb__pic set-bg" data-setbg="img/shop-details/thumb-4.png">
                                      <i class="fa fa-play"></i>
                                  </div>
                              </a>
                          </li> -->
            </ul>
          </div>
          <div class="col-lg-6 col-md-9">
            <div class="tab-content">
              <div
                class="tab-pane active"
                id="tabs-1"
                role="tabpanel"
                style="margin-left: 30px"
              >
                <div class="product__details__pic__item">
                  <img src="{{ asset('theme/img/product/avMercedes.webp') }}" alt="" />
                </div>
              </div>
              <div
                class="tab-pane"
                id="tabs-2"
                role="tabpanel"
                style="margin-left: 30px"
              >
                <div class="product__details__pic__item">
                  <img src="{{ asset('theme/img/product/avSecond.webp') }}" alt="" />
                </div>
              </div>
              <div
                class="tab-pane"
                id="tabs-3"
                role="tabpanel"
                style="margin-left: 30px"
              >
                <div class="product__details__pic__item">
                  <img src="{{ asset('theme/img/product/Third.webp') }}" alt="" />
                </div>
              </div>
              <div class="tab-pane" id="tabs-4" role="tabpanel">
                <div class="product__details__pic__item">
                  <img src="{{ asset('theme/img/shop-details/product-big-4.png') }}" alt="" />
                  <a
                    href="https://www.youtube.com/watch?v=8PJ3_p7VqHw&list=RD8PJ3_p7VqHw&start_radio=1"
                    class="video-popup"
                    ><i class="fa fa-play"></i
                  ></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-5">
            <div class="product__details__text">
              <div class="d-flex flex-column mb-3">
                <div
                  class="p-2 text-danger"
                  style="font-weight: 500; font-size: 30px"
                >
                  AMG Petronas
                </div>
                <div class="" style="font-size: 20px">
                  William Racing 2024 F1 Blue Polo-Shirt
                </div>
              </div>

              <div class="d-flex flex-column mt-5">
                <div class="product__details__option__size">
                  <span>Size:</span>
                  <label for="xxl"
                    >xxl
                    <input type="radio" id="xxl" />
                  </label>
                  <label class="active" for="xl"
                    >xl
                    <input type="radio" id="xl" />
                  </label>
                  <label for="l"
                    >l
                    <input type="radio" id="l" />
                  </label>
                  <label for="sm"
                    >s
                    <input type="radio" id="sm" />
                  </label>
                </div>
              </div>
              <!-- <div class="d-flex flex-column mt-4">
                                      <div class="product__details__option__color">
                                          <span>Color:</span>
                                          <label class="c-2" for="sp-2">
                                              <input type="radio" id="sp-2">
                                          </label>
                                      </div>
                                     </div> -->

              <div class="product__details__cart__option mt-5">
                <div class="quantity">
                  <h5>Quantity:</h5>
                  <div class="pro-qty mt-4">
                    <input type="text" value="1" />
                  </div>
                </div>
              </div>
              <div class="theprice">
                <h3>$109.00</h3>
              </div>
              <a
                href="#"
                class="primary-btn mt-3"
                type="button"
                data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasRight"
                aria-controls="offcanvasRight"
                style="width: 500px"
                >add to cart</a
              >
              <div class="d-flex flex-column">
                <div class="product__details__last__option mt-4">
                  <img src="{{ asset('theme/img/shop-details/details-payment.png') }}" alt="" />
                  <ul>
                    <li><span>SKU:</span> 3812912</li>
                    <li><span>Categories:</span> Clothes</li>
                    <li><span>Tag:</span> Clothes, Skin, Body</li>
                  </ul>
                </div>
              </div>
              <!--


                                     <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target=
                                     "#offcanvasRight" aria-controls="offcanvasRight">Toggle right offcanvas</button> -->
              <div
                class="offcanvas offcanvas-end"
                tabindex="-1"
                id="offcanvasRight"
                aria-labelledby="offcanvasRightLabel"
                style="width: 700px"
              >
                <div class="offcanvas-header">
                  <h2
                    class="offcanvas-title"
                    id="offcanvasRightLabel"
                    style="font-weight: 700"
                  >
                    Shoping Card
                  </h2>
                  <button
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="offcanvas"
                    aria-label="Close"
                  ></button>
                </div>
                <div class="offcanvas-body">
                  <section class="shopping-cart spad">
                    <div class="container">
                      <div class="row">
                        <div class="col-lg-12">
                          <div class="shopping__cart__table">
                            <table>
                              <thead>
                                <tr>
                                  <th>Product</th>
                                  <th>Quantity</th>
                                  <th>Total</th>
                                  <th></th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td class="product__cart__item">
                                    <div class="product__cart__item__pic">
                                      <img
                                        src="{{ asset('theme/img/product/avMercedes.webp') }}"
                                        alt=""
                                        style="width: 130px; height: 210px"
                                      />
                                    </div>
                                    <div
                                      class="product__cart__item__textn"
                                      style="margin-top: 20px"
                                    >
                                      <h6>T-shirt Contrast Pocket</h6>
                                      <h5>$109.00</h5>
                                    </div>
                                  </td>
                                  <td class="quantity__item">
                                    <div class="quantity">
                                      <div class="pro-qty-2">
                                        <input type="text" value="1" />
                                      </div>
                                    </div>
                                  </td>
                                  <td class="cart__price">$ 30.00</td>
                                  <td class="cart__close">
                                    <i class="fa fa-close"></i>
                                  </td>
                                </tr>
                                <tr>
                                  <td class="product__cart__item">
                                    <div class="product__cart__item__pic">
                                      <img
                                        src="img/product/avSecond.webp"
                                        alt=""
                                        style="width: 120px; height: 180px"
                                      />
                                    </div>
                                    <div class="product__cart__item__text">
                                      <h6>Diagonal Textured Cap</h6>
                                      <h5>$98.49</h5>
                                    </div>
                                  </td>
                                  <td class="quantity__item">
                                    <div class="quantity">
                                      <div class="pro-qty-2">
                                        <input type="text" value="1" />
                                      </div>
                                    </div>
                                  </td>
                                  <td class="cart__price">$ 32.50</td>
                                  <td class="cart__close">
                                    <i class="fa fa-close"></i>
                                  </td>
                                </tr>
                                <tr>
                                  <td class="product__cart__item">
                                    <div class="product__cart__item__pic">
                                      <img
                                        src="{{ asset('theme/img/product/newWh.webp') }}"
                                        alt=""
                                        style="width: 120px; height: 180px"
                                      />
                                    </div>
                                    <div class="product__cart__item__text">
                                      <h6>Basic Flowing Scarf</h6>
                                      <h5>$98.49</h5>
                                    </div>
                                  </td>
                                  <td class="quantity__item">
                                    <div class="quantity">
                                      <div class="pro-qty-2">
                                        <input type="text" value="1" />
                                      </div>
                                    </div>
                                  </td>
                                  <td class="cart__price">$ 47.00</td>
                                  <td class="cart__close">
                                    <i class="fa fa-close"></i>
                                  </td>
                                </tr>
                                <tr>
                                  <!-- <td class="product__cart__item">
                                                                              <div class="product__cart__item__pic">
                                                                                  <img src="img/shopping-cart/cart-4.jpg" alt="">
                                                                              </div>
                                                                              <div class="product__cart__item__text">
                                                                                  <h6>Basic Flowing Scarf</h6>
                                                                                  <h5>$98.49</h5>
                                                                              </div>
                                                                          </td> -->
                                </tr>
                              </tbody>
                            </table>
                          </div>
                          <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                              <div class="continue__btn update__btn">
                                <a href="{{ route('pages.checkout') }}"
                                  ><i class="fa fa-spinner"></i> Check Out</a
                                >
                              </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                              <div class="continue__btn update__btn">
                                <a href="{{ route('pages.product-detail') }}"
                                  ><i class="fa fa-spinner"></i> View Card</a
                                >
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- <div class="col-lg-4">
                                                          <div class="cart__discount">
                                                              <h6>Discount codes</h6>
                                                              <form action="#">
                                                                  <input type="text" placeholder="Coupon code">
                                                                  <button type="submit">Apply</button>
                                                              </form>
                                                          </div>
                                                          <div class="cart__total">
                                                              <h6>Cart total</h6>
                                                              <ul>
                                                                  <li>Subtotal <span>$ 169.50</span></li>
                                                                  <li>Total <span>$ 169.50</span></li>
                                                              </ul>
                                                              <a href="#" class="primary-btn">Proceed to checkout</a>
                                                          </div>
                                                      </div> -->
                      </div>
                    </div>
                  </section>

                  ...
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="product__details__content">
      <div class="container">
        <div class="row d-flex justify-content-center">
          <div class="col-lg-8"></div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <div class="product__details__tab">
              <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                  <a
                    class="nav-link active"
                    data-toggle="tab"
                    href="#tabs-5"
                    role="tab"
                    >Description</a
                  >
                </li>
                <li class="nav-item">
                  <a
                    class="nav-link"
                    data-toggle="tab"
                    href="#tabs-6"
                    role="tab"
                    >Customer Previews(5)</a
                  >
                </li>
                <li class="nav-item">
                  <a
                    class="nav-link"
                    data-toggle="tab"
                    href="#tabs-7"
                    role="tab"
                    >Additional information</a
                  >
                </li>
              </ul>
              <div class="tab-content">
                <div class="tab-pane active" id="tabs-5" role="tabpanel">
                  <div class="product__details__tab__content">
                    <p class="note">
                      Nam tempus turpis at metus scelerisque placerat nulla
                      deumantos solicitud felis. Pellentesque diam dolor,
                      elementum etos lobortis des mollis ut risus. Sedcus
                      faucibus an sullamcorper mattis drostique des commodo
                      pharetras loremos.
                    </p>
                    <div class="product__details__tab__content__item">
                      <h5>Products Infomation</h5>
                      <p>
                        A Pocket PC is a handheld computer, which features
                        many of the same capabilities as a modern PC. These
                        handy little devices allow individuals to retrieve and
                        store e-mail messages, create a contact file,
                        coordinate appointments, surf the internet, exchange
                        text messages and more. Every product that is labeled
                        as a Pocket PC must be accompanied with specific
                        software to operate the unit and must feature a
                        touchscreen and touchpad.
                      </p>
                      <p>
                        As is the case with any new technology product, the
                        cost of a Pocket PC was substantial during it’s early
                        release. For approximately $700.00, consumers could
                        purchase one of top-of-the-line Pocket PCs in 2003.
                        These days, customers are finding that prices have
                        become much more reasonable now that the newness is
                        wearing off. For approximately $350.00, a new Pocket
                        PC can now be purchased.
                      </p>
                    </div>
                    <div class="product__details__tab__content__item">
                      <h5>Material used</h5>
                      <p>
                        Polyester is deemed lower quality due to its none
                        natural quality’s. Made from synthetic materials, not
                        natural like wool. Polyester suits become creased
                        easily and are known for not being breathable.
                        Polyester suits tend to have a shine to them compared
                        to wool and cotton suits, this can make the suit look
                        cheap. The texture of velvet is luxurious and
                        breathable. Velvet is a great choice for dinner party
                        jacket and can be worn all year round.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="tab-pane" id="tabs-6" role="tabpanel">
                  <div class="product__details__tab__content">
                    <div class="product__details__tab__content__item">
                      <h5>Products Infomation</h5>
                      <p>
                        A Pocket PC is a handheld computer, which features
                        many of the same capabilities as a modern PC. These
                        handy little devices allow individuals to retrieve and
                        store e-mail messages, create a contact file,
                        coordinate appointments, surf the internet, exchange
                        text messages and more. Every product that is labeled
                        as a Pocket PC must be accompanied with specific
                        software to operate the unit and must feature a
                        touchscreen and touchpad.
                      </p>
                      <p>
                        As is the case with any new technology product, the
                        cost of a Pocket PC was substantial during it’s early
                        release. For approximately $700.00, consumers could
                        purchase one of top-of-the-line Pocket PCs in 2003.
                        These days, customers are finding that prices have
                        become much more reasonable now that the newness is
                        wearing off. For approximately $350.00, a new Pocket
                        PC can now be purchased.
                      </p>
                    </div>
                    <div class="product__details__tab__content__item">
                      <h5>Material used</h5>
                      <p>
                        Polyester is deemed lower quality due to its none
                        natural quality’s. Made from synthetic materials, not
                        natural like wool. Polyester suits become creased
                        easily and are known for not being breathable.
                        Polyester suits tend to have a shine to them compared
                        to wool and cotton suits, this can make the suit look
                        cheap. The texture of velvet is luxurious and
                        breathable. Velvet is a great choice for dinner party
                        jacket and can be worn all year round.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="tab-pane" id="tabs-7" role="tabpanel">
                  <div class="product__details__tab__content">
                    <p class="note">
                      Nam tempus turpis at metus scelerisque placerat nulla
                      deumantos solicitud felis. Pellentesque diam dolor,
                      elementum etos lobortis des mollis ut risus. Sedcus
                      faucibus an sullamcorper mattis drostique des commodo
                      pharetras loremos.
                    </p>
                    <div class="product__details__tab__content__item">
                      <h5>Products Infomation</h5>
                      <p>
                        A Pocket PC is a handheld computer, which features
                        many of the same capabilities as a modern PC. These
                        handy little devices allow individuals to retrieve and
                        store e-mail messages, create a contact file,
                        coordinate appointments, surf the internet, exchange
                        text messages and more. Every product that is labeled
                        as a Pocket PC must be accompanied with specific
                        software to operate the unit and must feature a
                        touchscreen and touchpad.
                      </p>
                      <p>
                        As is the case with any new technology product, the
                        cost of a Pocket PC was substantial during it’s early
                        release. For approximately $700.00, consumers could
                        purchase one of top-of-the-line Pocket PCs in 2003.
                        These days, customers are finding that prices have
                        become much more reasonable now that the newness is
                        wearing off. For approximately $350.00, a new Pocket
                        PC can now be purchased.
                      </p>
                    </div>
                    <div class="product__details__tab__content__item">
                      <h5>Material used</h5>
                      <p>
                        Polyester is deemed lower quality due to its none
                        natural quality’s. Made from synthetic materials, not
                        natural like wool. Polyester suits become creased
                        easily and are known for not being breathable.
                        Polyester suits tend to have a shine to them compared
                        to wool and cotton suits, this can make the suit look
                        cheap. The texture of velvet is luxurious and
                        breathable. Velvet is a great choice for dinner party
                        jacket and can be worn all year round.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Shop Details Section End -->

  <!-- Related Section Begin -->
  <section class="related spad">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h3 class="related-title">Related Product</h3>
        </div>
      </div>
      <!--
          <div id="carouselExampleIndicators" class="carousel slide">
              <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
              </div>
              <div class="carousel-inner">
                <div class="carousel-item active flex">
                     <div class="row">
                      <div class="product__item__pic set-bg" data-setbg="img/product/product-1.jpg" class="d-block" style="width: 270px;height: 230px;">
                          <span class="label">New</span>
                          <ul class="product__hover">
                              <li><a href="#"><img src="img/icon/heart.png" alt=""></a></li>
                              <li><a href="#"><img src="img/icon/compare.png" alt=""> <span>Compare</span></a></li>
                              <li><a href="#"><img src="img/icon/search.png" alt=""></a></li>
                          </ul>
                      </div>
                      <div class="product__item__pic set-bg" data-setbg="img/product/product-1.jpg" class="d-block" style="width: 270px;height: 230px;">
                          <span class="label">New</span>
                          <ul class="product__hover">
                              <li><a href="#"><img src="img/icon/heart.png" alt=""></a></li>
                              <li><a href="#"><img src="img/icon/compare.png" alt=""> <span>Compare</span></a></li>
                              <li><a href="#"><img src="img/icon/search.png" alt=""></a></li>
                          </ul>
                      </div>
                     </div>
                   <img src="..." class="d-block w-100" alt="..."> -->
      <!-- <div class="product__item__pic set-bg" data-setbg="img/product/product-1.jpg" class="d-block" style="width: 270px;height: 230px;">
                      <span class="label">New</span>
                      <ul class="product__hover">
                          <li><a href="#"><img src="img/icon/heart.png" alt=""></a></li>
                          <li><a href="#"><img src="img/icon/compare.png" alt=""> <span>Compare</span></a></li>
                          <li><a href="#"><img src="img/icon/search.png" alt=""></a></li>
                      </ul>
                  </div> -->
      <!--
                  <div class="product__item__pic set-bg" data-setbg="img/product/product-1.jpg" class="d-block" style="width: 270px;height: 230px;">
                      <span class="label">New</span>
                      <ul class="product__hover">
                          <li><a href="#"><img src="img/icon/heart.png" alt=""></a></li>
                          <li><a href="#"><img src="img/icon/compare.png" alt=""> <span>Compare</span></a></li>
                          <li><a href="#"><img src="img/icon/search.png" alt=""></a></li>
                      </ul>
                  </div>
                  <div class="product__item__pic set-bg" data-setbg="img/product/product-1.jpg" class="d-block" style="width: 270px;height: 230px;">
                      <span class="label">New</span>
                      <ul class="product__hover">
                          <li><a href="#"><img src="img/icon/heart.png" alt=""></a></li>
                          <li><a href="#"><img src="img/icon/compare.png" alt=""> <span>Compare</span></a></li>
                          <li><a href="#"><img src="img/icon/search.png" alt=""></a></li>
                      </ul>
                  </div>
                </div>
                <div class="carousel-item">
                  <img src="..." class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="..." class="d-block w-100" alt="...">
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>  -->
      <!-- <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">

              <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="2" aria-label="Slide 3"></button>
              </div> -->

      <!-- Slides -->
      <!-- <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="https://via.placeholder.com/1200x500" class="d-block w-100" alt="Slide 1">
                </div>
                <div class="carousel-item">
                  <img src="https://via.placeholder.com/1200x500" class="d-block w-100" alt="Slide 2">
                </div>
                <div class="carousel-item">
                  <img src="https://via.placeholder.com/1200x500" class="d-block w-100" alt="Slide 3">
                </div>
              </div> -->

      <!-- Next and Previous buttons -->
      <!-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div> -->
      <div id="carouselExample" class="carousel slide">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="row mt-5">
              <div class="col-lg-3 col-md-6 col-sm-6 col-sm-6">
                <div class="product__item">
                  <div
                    class="product__item__pic set-bg"
                    data-setbg="img/product/BMWshirt.webp"
                  >
                    <span class="label">New</span>
                    <ul class="product__hover">
                      <li>
                        <a href="#"
                          ><img src="img/icon/heart.png" alt=""
                        /></a>
                      </li>
                      <li>
                        <a href="#"
                          ><img src="img/icon/compare.png" alt="" />
                          <span>Compare</span></a
                        >
                      </li>
                      <li>
                        <a href="#"
                          ><img src="img/icon/search.png" alt=""
                        /></a>
                      </li>
                    </ul>
                  </div>
                  <div class="product__item__text">
                    <h6>Piqué Biker Jacket</h6>
                    <a href="#" class="add-cart">+ Add To Cart</a>
                    <div class="rating">
                      <i class="fa fa-star-o"></i>
                      <i class="fa fa-star-o"></i>
                      <i class="fa fa-star-o"></i>
                      <i class="fa fa-star-o"></i>
                      <i class="fa fa-star-o"></i>
                    </div>
                    <h5>$67.24</h5>
                    <div class="product__color__select">
                      <label for="pc-1">
                        <input type="radio" id="pc-1" />
                      </label>
                      <label class="active black" for="pc-2">
                        <input type="radio" id="pc-2" />
                      </label>
                      <label class="grey" for="pc-3">
                        <input type="radio" id="pc-3" />
                      </label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-6 col-sm-6">
                <div class="product__item">
                  <div
                    class="product__item__pic set-bg"
                    data-setbg="img/product/hugo2.webp"
                  >
                    <ul class="product__hover">
                      <li>
                        <a href="#"
                          ><img src="img/icon/heart.png" alt=""
                        /></a>
                      </li>
                      <li>
                        <a href="#"
                          ><img src="img/icon/compare.png" alt="" />
                          <span>Compare</span></a
                        >
                      </li>
                      <li>
                        <a href="#"
                          ><img src="img/icon/search.png" alt=""
                        /></a>
                      </li>
                    </ul>
                  </div>
                  <div class="product__item__text">
                    <h6>Piqué Biker Jacket</h6>
                    <a href="#" class="add-cart">+ Add To Cart</a>
                    <div class="rating">
                      <i class="fa fa-star-o"></i>
                      <i class="fa fa-star-o"></i>
                      <i class="fa fa-star-o"></i>
                      <i class="fa fa-star-o"></i>
                      <i class="fa fa-star-o"></i>
                    </div>
                    <h5>$67.24</h5>
                    <div class="product__color__select">
                      <label for="pc-4">
                        <input type="radio" id="pc-4" />
                      </label>
                      <label class="active black" for="pc-5">
                        <input type="radio" id="pc-5" />
                      </label>
                      <label class="grey" for="pc-6">
                        <input type="radio" id="pc-6" />
                      </label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-6 col-sm-6">
                <div class="product__item sale">
                  <div
                    class="product__item__pic set-bg"
                    data-setbg="img/product/mercedeshat.jpg"
                  >
                    <span class="label">Sale</span>
                    <ul class="product__hover">
                      <li>
                        <a href="#"
                          ><img src="img/icon/heart.png" alt=""
                        /></a>
                      </li>
                      <li>
                        <a href="#"
                          ><img src="img/icon/compare.png" alt="" />
                          <span>Compare</span></a
                        >
                      </li>
                      <li>
                        <a href="#"
                          ><img src="img/icon/search.png" alt=""
                        /></a>
                      </li>
                    </ul>
                  </div>
                  <div class="product__item__text">
                    <h6>Multi-pocket Chest Bag</h6>
                    <a href="#" class="add-cart">+ Add To Cart</a>
                    <div class="rating">
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star-o"></i>
                    </div>
                    <h5>$43.48</h5>
                    <div class="product__color__select">
                      <label for="pc-7">
                        <input type="radio" id="pc-7" />
                      </label>
                      <label class="active black" for="pc-8">
                        <input type="radio" id="pc-8" />
                      </label>
                      <label class="grey" for="pc-9">
                        <input type="radio" id="pc-9" />
                      </label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-6 col-sm-6">
                <div class="product__item">
                  <div
                    class="product__item__pic set-bg"
                    data-setbg="img/product/offwhite.webp"
                  >
                    <ul class="product__hover">
                      <li>
                        <a href="#"
                          ><img src="img/icon/heart.png" alt=""
                        /></a>
                      </li>
                      <li>
                        <a href="#"
                          ><img src="img/icon/compare.png" alt="" />
                          <span>Compare</span></a
                        >
                      </li>
                      <li>
                        <a href="#"
                          ><img src="img/icon/search.png" alt=""
                        /></a>
                      </li>
                    </ul>
                  </div>
                  <div class="product__item__text">
                    <h6>Diagonal Textured Cap</h6>
                    <a href="#" class="add-cart">+ Add To Cart</a>
                    <div class="rating">
                      <i class="fa fa-star-o"></i>
                      <i class="fa fa-star-o"></i>
                      <i class="fa fa-star-o"></i>
                      <i class="fa fa-star-o"></i>
                      <i class="fa fa-star-o"></i>
                    </div>
                    <h5>$60.9</h5>
                    <div class="product__color__select">
                      <label for="pc-10">
                        <input type="radio" id="pc-10" />
                      </label>
                      <label class="active black" for="pc-11">
                        <input type="radio" id="pc-11" />
                      </label>
                      <label class="grey" for="pc-12">
                        <input type="radio" id="pc-12" />
                      </label>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="row mt-5">
              <div class="col-lg-3 col-md-6 col-sm-6 col-sm-6">
                <div class="product__item">
                  <div
                    class="product__item__pic set-bg"
                    data-setbg="{{ asset('/theme/img/product/mercedeshat.jpg') }}"
                  >
                    <span class="label">New</span>
                    <ul class="product__hover">
                      <li>
                        <a href="#"
                          ><img src="{{ asset('/theme/img/icon/heart.png') }}" alt=""
                        /></a>
                      </li>
                      <li>
                        <a href="#"
                          ><img src="{{ asset('/theme/img/icon/compare.png') }}" alt="" />
                          <span>Compare</span></a
                        >
                      </li>
                      <li>
                        <a href="#"
                          ><img src="{{ asset('/theme/img/icon/search.png') }}" alt=""
                        /></a>
                      </li>
                    </ul>
                  </div>
                  <div class="product__item__text">
                    <h6>Piqué Biker Jacket</h6>
                    <a href="{{ route('pages.shopping-cart') }}" class="add-cart">+ Add To Cart</a>
                    <div class="rating">
                      <i class="fa fa-star-o"></i>
                      <i class="fa fa-star-o"></i>
                      <i class="fa fa-star-o"></i>
                      <i class="fa fa-star-o"></i>
                      <i class="fa fa-star-o"></i>
                    </div>
                    <h5>$67.24</h5>
                    <div class="product__color__select">
                      <label for="pc-1">
                        <input type="radio" id="pc-1" />
                      </label>
                      <label class="active black" for="pc-2">
                        <input type="radio" id="pc-2" />
                      </label>
                      <label class="grey" for="pc-3">
                        <input type="radio" id="pc-3" />
                      </label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-6 col-sm-6">
                <div class="product__item">
                  <div
                    class="product__item__pic set-bg"
                    data-setbg="{{ asset('/theme/img/product/essensaialtshirt.webp') }}"
                  >
                    <ul class="product__hover">
                      <li>
                        <a href="#"
                          ><img src="{{ asset('/theme/img/icon/heart.png') }}" alt=""
                        /></a>
                      </li>
                      <li>
                        <a href="#"
                          ><img src="{{ asset('/theme/img/icon/compare.png') }}" alt="" />
                          <span>Compare</span></a
                        >
                      </li>
                      <li>
                        <a href="#"
                          ><img src="{{ asset('/theme/img/icon/search.png') }}" alt=""
                        /></a>
                      </li>
                    </ul>
                  </div>
                  <div class="product__item__text">
                    <h6>Piqué Biker Jacket</h6>
                    <a href="#" class="add-cart">+ Add To Cart</a>
                    <div class="rating">
                      <i class="fa fa-star-o"></i>
                      <i class="fa fa-star-o"></i>
                      <i class="fa fa-star-o"></i>
                      <i class="fa fa-star-o"></i>
                      <i class="fa fa-star-o"></i>
                    </div>
                    <h5>$67.24</h5>
                    <div class="product__color__select">
                      <label for="pc-4">
                        <input type="radio" id="pc-4" />
                      </label>
                      <label class="active black" for="pc-5">
                        <input type="radio" id="pc-5" />
                      </label>
                      <label class="grey" for="pc-6">
                        <input type="radio" id="pc-6" />
                      </label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-6 col-sm-6">
                <div class="product__item sale">
                  <div
                    class="product__item__pic set-bg"
                    data-setbg="{{ asset('/theme/img/product/product-3.jpg') }}"
                  >
                    <span class="label">Sale</span>
                    <ul class="product__hover">
                      <li>
                        <a href="#"
                          ><img src="{{ asset('/theme/img/icon/heart.png') }}" alt=""
                        /></a>
                      </li>
                      <li>
                        <a href="#"
                          ><img src="{{ asset('/theme/img/icon/compare.png') }}" alt="" />
                          <span>Compare</span></a
                        >
                      </li>
                      <li>
                        <a href="#"
                          ><img src="{{ asset('/theme/img/icon/search.png') }}" alt=""
                        /></a>
                      </li>
                    </ul>
                  </div>
                  <div class="product__item__text">
                    <h6>Multi-pocket Chest Bag</h6>
                    <a href="#" class="add-cart">+ Add To Cart</a>
                    <div class="rating">
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star-o"></i>
                    </div>
                    <h5>$43.48</h5>
                    <div class="product__color__select">
                      <label for="pc-7">
                        <input type="radio" id="pc-7" />
                      </label>
                      <label class="active black" for="pc-8">
                        <input type="radio" id="pc-8" />
                      </label>
                      <label class="grey" for="pc-9">
                        <input type="radio" id="pc-9" />
                      </label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-6 col-sm-6">
                <div class="product__item">
                  <div
                    class="product__item__pic set-bg"
                    data-setbg="{{ asset('/theme/img/product/product-4.jpg') }}"
                  >
                    <ul class="product__hover">
                      <li>
                        <a href="#"
                          ><img src="{{ asset('/theme/img/icon/heart.png') }}" alt=""
                        /></a>
                      </li>
                      <li>
                        <a href="#"
                          ><img src="{{ asset('/theme/img/icon/compare.png') }}" alt="" />
                          <span>Compare</span></a
                        >
                      </li>
                      <li>
                        <a href="#"
                          ><img src="{{ asset('/theme/img/icon/search.png') }}" alt=""
                        /></a>
                      </li>
                    </ul>
                  </div>
                  <div class="product__item__text">
                    <h6>Diagonal Textured Cap</h6>
                    <a href="#" class="add-cart">+ Add To Cart</a>
                    <div class="rating">
                      <i class="fa fa-star-o"></i>
                      <i class="fa fa-star-o"></i>
                      <i class="fa fa-star-o"></i>
                      <i class="fa fa-star-o"></i>
                      <i class="fa fa-star-o"></i>
                    </div>
                    <h5>$60.9</h5>
                    <div class="product__color__select">
                      <label for="pc-10">
                        <input type="radio" id="pc-10" />
                      </label>
                      <label class="active black" for="pc-11">
                        <input type="radio" id="pc-11" />
                      </label>
                      <label class="grey" for="pc-12">
                        <input type="radio" id="pc-12" />
                      </label>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="row mt-5" >
              <div class="col-lg-3 col-md-6 col-sm-6 col-sm-6">
                <div class="product__item">
                  <div
                    class="product__item__pic set-bg"
                    data-setbg="img/product/thenewera.webp"
                  >
                    <span class="label">New</span>
                    <ul class="product__hover">
                      <li>
                        <a href="#"
                          ><img src="img/icon/heart.png" alt=""
                        /></a>
                      </li>
                      <li>
                        <a href="#"
                          ><img src="img/icon/compare.png" alt="" />
                          <span>Compare</span></a
                        >
                      </li>
                      <li>
                        <a href="#"
                          ><img src="img/icon/search.png" alt=""
                        /></a>
                      </li>
                    </ul>
                  </div>
                  <div class="product__item__text">
                    <h6>Piqué Biker Jacket</h6>
                    <a href="#" class="add-cart">+ Add To Cart</a>
                    <div class="rating">
                      <i class="fa fa-star-o"></i>
                      <i class="fa fa-star-o"></i>
                      <i class="fa fa-star-o"></i>
                      <i class="fa fa-star-o"></i>
                      <i class="fa fa-star-o"></i>
                    </div>
                    <h5>$67.24</h5>
                    <div class="product__color__select">
                      <label for="pc-1">
                        <input type="radio" id="pc-1" />
                      </label>
                      <label class="active black" for="pc-2">
                        <input type="radio" id="pc-2" />
                      </label>
                      <label class="grey" for="pc-3">
                        <input type="radio" id="pc-3" />
                      </label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-6 col-sm-6">
                <div class="product__item">
                  <div
                    class="product__item__pic set-bg"
                    data-setbg="img/product/OvalD Faded.webp"
                  >
                    <ul class="product__hover">
                      <li>
                        <a href="#"
                          ><img src="img/icon/heart.png" alt=""
                        /></a>
                      </li>
                      <li>
                        <a href="#"
                          ><img src="img/icon/compare.png" alt="" />
                          <span>Compare</span></a
                        >
                      </li>
                      <li>
                        <a href="#"
                          ><img src="img/icon/search.png" alt=""
                        /></a>
                      </li>
                    </ul>
                  </div>
                  <div class="product__item__text">
                    <h6>Piqué Biker Jacket</h6>
                    <a href="#" class="add-cart">+ Add To Cart</a>
                    <div class="rating">
                      <i class="fa fa-star-o"></i>
                      <i class="fa fa-star-o"></i>
                      <i class="fa fa-star-o"></i>
                      <i class="fa fa-star-o"></i>
                      <i class="fa fa-star-o"></i>
                    </div>
                    <h5>$67.24</h5>
                    <div class="product__color__select">
                      <label for="pc-4">
                        <input type="radio" id="pc-4" />
                      </label>
                      <label class="active black" for="pc-5">
                        <input type="radio" id="pc-5" />
                      </label>
                      <label class="grey" for="pc-6">
                        <input type="radio" id="pc-6" />
                      </label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-6 col-sm-6">
                <div class="product__item sale">
                  <div
                    class="product__item__pic set-bg"
                    data-setbg="img/product/product-3.jpg"
                  >
                    <span class="label">Sale</span>
                    <ul class="product__hover">
                      <li>
                        <a href="#"
                          ><img src="img/icon/heart.png" alt=""
                        /></a>
                      </li>
                      <li>
                        <a href="#"
                          ><img src="img/icon/compare.png" alt="" />
                          <span>Compare</span></a
                        >
                      </li>
                      <li>
                        <a href="#"
                          ><img src="img/icon/search.png" alt=""
                        /></a>
                      </li>
                    </ul>
                  </div>
                  <div class="product__item__text">
                    <h6>Multi-pocket Chest Bag</h6>
                    <a href="#" class="add-cart">+ Add To Cart</a>
                    <div class="rating">
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star-o"></i>
                    </div>
                    <h5>$43.48</h5>
                    <div class="product__color__select">
                      <label for="pc-7">
                        <input type="radio" id="pc-7" />
                      </label>
                      <label class="active black" for="pc-8">
                        <input type="radio" id="pc-8" />
                      </label>
                      <label class="grey" for="pc-9">
                        <input type="radio" id="pc-9" />
                      </label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-6 col-sm-6">
                <div class="product__item">
                  <div
                    class="product__item__pic set-bg"
                    data-setbg="img/product/burbary.jpg"
                  >
                    <ul class="product__hover">
                      <li>
                        <a href="#"
                          ><img src="img/icon/heart.png" alt=""
                        /></a>
                      </li>
                      <li>
                        <a href="#"
                          ><img src="img/icon/compare.png" alt="" />
                          <span>Compare</span></a
                        >
                      </li>
                      <li>
                        <a href="#"
                          ><img src="img/icon/search.png" alt=""
                        /></a>
                      </li>
                    </ul>
                  </div>
                  <div class="product__item__text">
                    <h6>Diagonal Textured Cap</h6>
                    <a href="#" class="add-cart">+ Add To Cart</a>
                    <div class="rating">
                      <i class="fa fa-star-o"></i>
                      <i class="fa fa-star-o"></i>
                      <i class="fa fa-star-o"></i>
                      <i class="fa fa-star-o"></i>
                      <i class="fa fa-star-o"></i>
                    </div>
                    <h5>$60.9</h5>
                    <div class="product__color__select">
                      <label for="pc-10">
                        <input type="radio" id="pc-10" />
                      </label>
                      <label class="active black" for="pc-11">
                        <input type="radio" id="pc-11" />
                      </label>
                      <label class="grey" for="pc-12">
                        <input type="radio" id="pc-12" />
                      </label>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Carousel Control Buttons with Custom SVG Icons -->
        <button
          class="carousel-control-prev"
          type="button"
          data-bs-target="#carouselExample"
          data-bs-slide="prev"
        >
          <span aria-hidden="true">
            <!-- Custom Black SVG for the Previous Icon -->
            <svg
              xmlns="http://www.w3.org/2000/svg"
              fill="black"
              viewBox="0 0 16 16"
              width="30"
              height="30"
            >
              <path
                fill-rule="evenodd"
                d="M11.354 1.146a.5.5 0 0 1 0 .708L5.207 8l6.147 6.146a.5.5 0 0 1-.708.708l-6.5-6.5a.5.5 0 0 1 0-.708l6.5-6.5a.5.5 0 0 1 .708 0z"
              />
            </svg>
          </span>
          <span class="visually-hidden">Previous</span>
        </button>

        <button
          class="carousel-control-next"
          type="button"
          data-bs-target="#carouselExample"
          data-bs-slide="next"
        >
          <span aria-hidden="true">
            <!-- Custom Black SVG for the Next Icon -->
            <svg
              xmlns="http://www.w3.org/2000/svg"
              fill="black"
              viewBox="0 0 16 16"
              width="30"
              height="30"
            >
              <path
                fill-rule="evenodd"
                d="M4.646 14.854a.5.5 0 0 1 0-.708L10.793 8 4.646 1.854a.5.5 0 1 1 .708-.708l6.5 6.5a.5.5 0 0 1 0 .708l-6.5 6.5a.5.5 0 0 1-.708 0z"
              />
            </svg>
          </span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
  </section>




@endsection
