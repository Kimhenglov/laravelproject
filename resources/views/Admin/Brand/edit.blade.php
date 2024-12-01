@extends('Mylayout.dashboard');
@section('content')


<div class="pagetitle">
  <h1>Brand</h1>
  <nav>
    <ol class="breadcrumb">


           <div class="d-flex justify-content-end">
           <a class="nav-link  {{ request()->routeIs('backends.Brand.index') ? 'active' : '' }}" href="{{ route('backends.Brand.index') }}">
                  <span>Brand List</span>
              </a>
           </div>
  
    </ol>
 
  </nav>
  

</div>
<section class="section">
  <div class="row">
    <div class="col-lg-12">

      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Input Brand Data</h5>

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
            <form action="{{route('backends.Brand.update',$Brand->id)}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="name" class="form-label">Brand Name</label>
        
        <!-- Use old input value or current brand name -->
        <input type="text" 
               class="form-control @error('name') is-invalid @enderror" 
               id="name" 
               name="namebrand" 
               value="{{ old('name', $Brand->name) }}" 
               required>
        
        @error('name')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="row mb-3">
        <label for="filePicUploade" class="col-sm-2 col-form-label">Product Uploaded </label>
        <div class="col-md-12">
            
            <!-- If there's an existing image, show it -->
            @if($Brand->image)
                <div class="mb-2">
                    <img src="{{ asset('storage/' . $Brand->image) }}" alt="Current Image" style="max-width: 150px; max-height: 150px;">
                </div>
            @endif

            <!-- File upload input -->
            <input class="form-control @error('filePicUploade') is-invalid @enderror" 
                   type="file" 
                   name="BrandImage">
            
            @error('filePicUploade')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>



          
          <!-- End General Form Elements -->

        </div>
      </div>

    </div>

  
  </div>
</section>


 @endsection