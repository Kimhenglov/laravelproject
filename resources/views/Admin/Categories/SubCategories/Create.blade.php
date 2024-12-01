
@extends('Mylayout.dashboard');
@section('content')

<main id="main" class="main">

<div class="pagetitle">
  <h1>Categories</h1>
  <nav>
    <ol class="breadcrumb">
    <div class="d-flex justify-content-end">
        

             <h4>Sub Categories</h4>
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

          <h5 class="card-title">Input SubCategories</h5>
            <form action="{{route('backends.SubCategories.Store')}}" method="POST"  enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">SubCategoriesName</label>
        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="SubCategories" required value="{{ old('name') }}">
    </div>
    <div class="row mb-3">
    <label class="col-sm-2 col-form-label">Categories</label>
            @if($Categories)
                  <div class="col-sm-12">
                <select class="form-select" aria-label="Default select example" name="Categories_id">
                @foreach ($Categories as $MyCategory )
                  <option value="{{$MyCategory->id}}">{{$MyCategory->name}}</option>
                  @endforeach
                </select>
              </div>
              @endif
            </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
        </div>
      </div>
    </div>
  </div>
</section>
</main>
@endsection
