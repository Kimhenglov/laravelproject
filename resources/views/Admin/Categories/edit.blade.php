@extends('Mylayout.dashboard');
@section('content')


<main id="main" class="main">

<div class="pagetitle">
  <h1>Categories</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.html">Home</a></li>
      <li class="breadcrumb-item">Forms</li>
      <li class="breadcrumb-item active">Elements</li>
    </ol>
  </nav>
</div><!-- End Page Title -->




<section class="section">
  <div class="row">
    <div class="col-lg-12">

      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Edit Categories</h5>

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

            <form method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">Categories Name</label>
          @if($updateCategories)
          <input type="text" value="{{$updateCategories->name}}" class="form-control @error('name') is-invalid @enderror" id="name" name="name" required value="{{ old('name') }}">
          @endif

      
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