@extends('Mylayout.dashboard');
@section('content')


<main id="main" class="main">

<div class="pagetitle">
  <h1>Product</h1>
  <nav>
    <ol class="breadcrumb">
    <div class="d-flex justify-content-end">
           <a class="nav-link  {{ request()->routeIs('backends.table') ? 'active' : '' }}" href="{{ route('backends.table') }}">
                  <span>Product List</span>
              </a>
           </div>
    </ol>
  </nav>
</div><!-- End Page Title -->




<section class="section">
  <div class="row">
    <div class="col-lg-12">

      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Input Product</h5>

          <!-- General Form Elements -->


             <!-- <form action="" method="post">
                 @csf
                 <label for="inputText" class="col-sm-2 col-form-label">Input Name</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="name">
              </div>
              <label for="inputText" class="col-sm-2 col-form-label">Input Price</label>
                <div class="col-sm-10  mt-4">
                       <input type="text" class="form-control" name="price">
                </div>
             </form> -->
             <!-- <form method="POST">
              @csrf
              <div class="mb-3">
                <label for="title" class="form-label">Title *</label>
                <input type="text" required class="form-control" id="title" name="name">
              </div>
              <div class="mb-3">
                <label for="title" class="form-label">Price</label>
                <input type="number" required class="form-control" id="title" name="price">
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form> -->

            <form action="{{ route('backends.Product.update', $allproduct->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" value="{{ $allproduct->name }}" class="form-control @error('ProductName') is-invalid @enderror" name="ProductName" required>
        @error('ProductName')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="price" class="form-label">Price</label>
        <input type="number" value="{{ $allproduct->price }}" class="form-control @error('price') is-invalid @enderror" name="price" required>
        @error('price')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <input type="text" value="{{ $allproduct->description }}" class="form-control @error('description') is-invalid @enderror" name="description" required>
        @error('description')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="slug" class="form-label">Slug</label>
        <input type="text" value="{{ $allproduct->slug }}" class="form-control @error('slug') is-invalid @enderror" name="slug" required>
        @error('slug')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <!-- Brand -->
    <div class="row mb-3">
        <label class="col-sm-2 col-form-label">Brand</label>
        <div class="col-sm-12">
            <select class="form-select" name="brand_id">
                <option value="{{ $allproduct->brand_id }}" selected>{{ $allproduct->brand->name }}</option>
                @foreach ($allBrand as $brand)
                    <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                @endforeach
            </select>
        </div>
    </div>

    <!-- Category -->
    <div class="row mb-3">
        <label class="col-sm-2 col-form-label">Categories</label>
        <div class="col-sm-12">
            <select class="form-select" name="category_id">
                <option value="{{ $allproduct->category_id }}" selected>{{ $allproduct->category->name ?? 'No Category Selected' }}</option>
                @foreach ($allCategories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
    </div>

    <!-- Colors -->
    <div class="mb-3">
        <label class="form-label">Colors</label>
        @foreach ($allColor as $color)
            <div class="form-check">
                <input type="checkbox" class="form-check-input" name="product_colors[]" value="{{ $color->id }}" {{ $allproduct->colors->contains('id', $color->id) ? 'checked' : '' }}>
                <label class="form-check-label">{{ $color->name }}</label>
            </div>
        @endforeach
    </div>

    <!-- Sizes -->
    <div class="mb-3">
        <label class="form-label">Sizes</label>
        @foreach ($allSize as $size)
            <div class="form-check">
                <input type="checkbox" class="form-check-input" name="product_sizes[]" value="{{ $size->id }}" {{ $allproduct->sizes->contains('id', $size->id) ? 'checked' : '' }}>
                <label class="form-check-label">{{ $size->name }}</label>
            </div>
        @endforeach
    </div>

    <!-- Images -->
    <div class="mb-3">
        <label class="form-label">Product Images</label>
        @foreach ($allproduct->productimage as $image)
            <img src="{{ asset('storage/' . $image->image_path) }}" alt="Image" style="max-width: 150px; max-height: 150px;">
        @endforeach
        <input type="file" name="product_images[]" class="form-control" multiple>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>



          <!-- End General Form Elements -->

        </div>
      </div>

    </div>

 
  </div>
</section>

</main>


@endsection