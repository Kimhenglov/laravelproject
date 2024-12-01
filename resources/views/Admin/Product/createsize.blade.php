

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
          <h5 class="card-title">Input Product Color</h5>

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

            <form action="{{route('backend.productsize.store')}}"  method="POST">
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" name="size" class="form-control @error('name') is-invalid @enderror"  name="color" required value="{{ old('name') }}">
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