@extends('Mylayout.dashboard')
@section('content')

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Product Details</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item">Forms</li>
                <li class="breadcrumb-item active">Details</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <!-- Product Details Column -->
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Product Information</h5>
                        <div class="card">
                            <h5 class="card-header">Product</h5>
                            <div class="card-body">
                                @if ($allproduct)
                                    <h6 class="card-title text-dark">Product Name:</h6>
                                    <p class="card-text">{{ $allproduct->name }}</p>

                                    <h6 class="card-title text-dark">Product Price:</h6>
                                    <p class="card-text">{{ $allproduct->price }}</p>

                                    <h6 class="card-title text-dark">Product Description:</h6>
                                    <p class="card-text" style="font-size:13px">{{ $allproduct->description }}</p>

                                    <h6 class="card-title text-dark">Product Size:</h6>
                                    <p class="card-text">
                                        @if ($allproduct->sizes->isNotEmpty())
                                            @foreach ($allproduct->sizes as $size)
                                                {{ $size->name }}{{ !$loop->last ? ',' : '' }}
                                            @endforeach
                                        @else
                                            No sizes available
                                        @endif
                                    </p>

                                    <h6 class="card-title text-dark">Product Color:</h6>
                                    <p class="card-text">

                                      @if($allproduct->colors->isNotEmpty())
                                         @foreach ($allproduct->colors as $color )
                                              {{$color->name}}{{ !$loop->last ? ',' : ''}}
                                         
                                         @endforeach

                                           @else

                                              No Color available
                                                @endif
                                    </p>

                                    <h6 class="card-title text-dark">Product Slug:</h6>
                                    <p class="card-text">{{ $allproduct->slug }}</p>

                                    <h6 class="card-title text-dark">Product Images:</h6>
                                    @if ($allproduct->productimage->isNotEmpty())
                                        @foreach ($allproduct->productimage as $image)
                                            <img src="{{ asset('storage/' . $image->image_path) }}" alt="Product Image" style="width: 70px; margin-right: 5px;">
                                        @endforeach
                                    @else
                                        <p>No images available for this product.</p>
                                    @endif
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Product Additional Details Column -->
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Additional Details</h5>
                        <div class="card">
                            <h5 class="card-header">Product</h5>
                            <div class="card-body">
                                @if ($allproduct)
                                    <h6 class="card-title text-dark">Category:</h6>
                                    <p class="card-text">{{ $allproduct->category->name }}</p>

                                    <h6 class="card-title text-dark">Brand:</h6>
                                    <p class="card-text">{{ $allproduct->brand->name }}</p>

                                    @if ($allproduct->brand->image)
                                        <div class="mb-2">
                                            <img src="{{ asset('storage/' . $allproduct->brand->image) }}" alt="Brand Image" style="max-width: 150px; max-height: 150px;">
                                        </div>
                                    @endif

                                    <h6 class="card-title text-dark">Created At:</h6>
                                    <p class="card-text" style="font-size:13px">{{ $allproduct->created_at }}</p>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

@endsection
