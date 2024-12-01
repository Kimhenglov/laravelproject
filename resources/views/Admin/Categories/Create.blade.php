
@extends('Mylayout.dashboard');
@section('content')

<main id="main" class="main">

<div class="pagetitle">
  <h1>Categories</h1>
  <nav>
    <ol class="breadcrumb">
    <div class="d-flex justify-content-end">
           <a class="nav-link  {{ request()->routeIs('backends.Categories.index') ? 'active' : '' }}" href="{{ route('backends.Categories.index') }}">
                  <span>Categories List</span>
              </a>


              <a class="nav-link {{request()->routeIs('backends.SubCategories.Create') ? 'active' : ''}}"href="{{route('backends.SubCategories.Create')}}">Sub</a>

           

           </div>
    </ol>
  </nav>
</div>


<!-- End Page Title -->




<section class="section">
  <div class="row">
    <div class="col-lg-12">

      <div class="card">
        <div class="card-body">

          <h5 class="card-title">Input Categories</h5>
            <form action="{{route('backends.Categories.store')}}" method="POST"  enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">CategoriesName</label>
        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="nameCategories" required value="{{ old('name') }}">
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

