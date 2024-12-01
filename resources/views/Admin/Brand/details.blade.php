@extends('Mylayout.dashboard')
@section('content')


<main id="main" class="main">

    <div class="pagetitle">
        <h1>Brand Details</h1>
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
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body bg-slate-500">
                    <div class="card p-3 shadow-sm " >
    <div class="d-flex align-items-center">
        <!-- Brand Name -->
        <div class="me-3">
            @if($Brand)
            <h5 class="card-title text-dark mb-0">Brand Name: {{$Brand->name}}</h5>
            @endif
        </div>

        <!-- Brand Image -->
        <div>
            @if($Brand)
            <img src="{{ asset('storage/' . $Brand->image) }}" alt="Brand Image" class="img-fluid ms-3" style="width: 200px; height: 100px; object-fit: cover;">
            @endif
        </div>
    </div>
</div>



                        <div class="card mt-5">
                            <h5 class="card-header">Product</h5>
                            <div class="card-body">

                           




                                      <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>BrandList</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">

              <table class="table table-hover table-striped align-items-center mb-0">
  <thead class="thead-dark">
    <tr>
      <th class="text-uppercase text-secondary text-xxs font-weight-bold opacity-7">Brand ID</th>
      <th class="text-uppercase text-secondary text-xxs font-weight-bold opacity-7 ps-2">Product Image</th>
      <th class="text-uppercase text-secondary text-xxs font-weight-bold opacity-7 ps-2">Product Name</th>
      <th class="text-uppercase text-secondary text-xxs font-weight-bold opacity-7 ps-2">Category</th>
      <th class="text-uppercase text-secondary text-xxs font-weight-bold opacity-7 ps-2">Brand</th>
      <th class="text-uppercase text-secondary text-xxs font-weight-bold opacity-7 ps-2">Price</th>
      <th class="text-uppercase text-secondary text-xxs font-weight-bold opacity-7 ps-2">Size</th>
      <th class="text-uppercase text-secondary text-xxs font-weight-bold opacity-7 ps-2">Color</th>
      <th class="text-uppercase text-secondary text-xxs font-weight-bold opacity-7 ps-2">slug</th>

    </tr>
  </thead>
    <tbody>
    
       @if($Brand)
     @foreach ($Brand->products as $product)
       <tr>
          <td class="align-middle text-center">
          <span style="font-size: 12px;">
               {{$product->id}}
               </span>
          </td>
          <td class="align-middle">
    @if($product->productimage->first() && $product->productimage->first()->image_path)
        <img src="{{ asset('storage/' . $product->productimage->first()->image_path) }}" alt="BrandImage" style="width: 70px;">
    @endif
</td>

          <td class="align-middle">
              <span style="font-size: 12px;">
              {{$product->name}}
              </span>
               
</a>
          </td>
          <td class="align-middle">
          <span style="font-size: 12px;">
              {{$product->category->name}}
              </span>
         
          </td>
          <td class="align-middle">
          <span style="font-size: 12px;">
              {{$product->brand->name}}
          </span>
         
         </td>
         <td class="align-middle">
         <span style="font-size: 12px;">
             {{$product->price}}<span>$</span>
             </span>
         
         </td>
         <td>
    <span style="font-size: 12px;">
        @if($product->sizes->isNotEmpty())
            {{$product->sizes->first()->name}}
        @else
            No sizes available
        @endif
    </span>
</td>

       
         <td class="align-middle">
         <span style="font-size: 12px;">
    @if($product->colors->isNotEmpty())
    
        {{$product->colors->first()->name}}
    @else
        No Color Available
    @endif
</span>

         </td>
         <td class="align-middle">
         <span style="font-size: 12px;">
            {{$product->slug}}
            </span>
         </td>
     
        </tr>
       @endforeach


       <tr>


       <td>
              <p>TotalProduct</p>
           </td>
           <td>
              <p>{{$TotalProduct}}</p>
           </td>
       </tr>
      
 
    </tbody>
      @else
      <tbody>
      <tr>
        <td colspan="5" class="text-center text-muted">
          No SubCategories Available
        </td>
      </tr>
    </tbody>



    

</table>

              </div>
            </div>
          </div>

                                        
                                     


                                  @endif
                           
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Product Additional Details Column -->
            
        </div>
    </section>

</main>



 @endsection