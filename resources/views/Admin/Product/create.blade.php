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
        <div class="card-body ">
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

      <form action="{{route('backends.Product.store')}}"  method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control @error('name') is-invalid @enderror"  name="ProductName" required value="{{ old('name') }}">
    </div>

    <div class="mb-3">
        <label for="price" class="form-label">Price</label>
        <input type="number" class="form-control @error('price') is-invalid @enderror"  name="price" required value="{{ old('price') }}">
       
    </div>
   
    <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <input type="text" class="form-control @error('price') is-invalid @enderror"  name="description" required value="{{ old('price') }}">
       
    </div>


    <div class="mb-3">
        <label for="slug" class="form-label">Slug</label>
        <input type="text" class="form-control @error('price') is-invalid @enderror"  name="slug" required value="{{ old('price') }}">
       
    </div>
    <div class="row mb-3">
              <label class="col-sm-2 col-form-label">Brand</label>
              <div class="col-sm-12">
              


                <select class="form-select" aria-label="Default select example" name="brand_id">
                     @if($Brand)
                       @foreach ($Brand as $MyBrand )
                   
                  <option value="{{$MyBrand->id}}">{{$MyBrand->name}}</option>
                       @endforeach

                       @endif
                </select>
                
              
              </div>
            </div>


            <div class="row mb-3">
              <label class="col-sm-2 col-form-label">Categories</label>
              <div class="col-sm-12">
                <select class="form-select" aria-label="Default select example" name="category_id">
                    @if($SubCategories)
                      @foreach ($SubCategories as $Mysub )
                  <option value="{{$Mysub->id}}">{{$Mysub->name}}</option>
                      @endforeach
                    @endif
                </select>
              </div>
            </div>

    <div class="row mb-3">
        <label for="filePicUploade" class="col-sm-2 col-form-label">Product Upload</label>
        <div class="col-md-12">
            <input type="file" class="form-control"  name="product_images[]" id="product_images" multiple >
        </div>
    </div>




    <div class="mb-3">
    <label for="product_sizes" class="form-label">Choose Color</label><br>
@foreach ($allColor as $Mycolor) 
    <div class="form-check">
       
    <input 
            class="form-check-input" 
            type="checkbox" 
            name="product_colors[]" 
            value="{{ $Mycolor->id }}" 
        >
        <label class="form-check-label" > <!-- Label for the checkbox -->
            {{ $Mycolor->name }} 
        </label>
    </div>
@endforeach


  
</div>






<div class="mb-3">
    <label for="product_sizes" class="form-label">Choose Size</label><br>
@foreach ($allSize as $MySize) 
    <div class="form-check">
       
    <input 
            class="form-check-input" 
            type="checkbox" 
            name="product_sizes[]" 
            value="{{ $MySize->id }}" 
        >
        <label class="form-check-label" > <!-- Label for the checkbox -->
            {{ $MySize->name }} 
        </label>
    </div>
@endforeach


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