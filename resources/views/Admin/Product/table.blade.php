@extends('Mylayout.dashboard');
@section('content')

<div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
            
<div class="pagetitle">
  <h1>All Product</h1>
  <nav>
    <ol class="breadcrumb">
    <div class="d-flex justify-content-end">
    <a class="nav-link {{ request()->routeIs('backends.create') || request()->routeIs('backends.table') ? 'active' : '' }}" href="{{ route('backends.create') }}">
    <span>Product Create</span>
</a>




                  

                

              <a class="nav-link ms-3  {{ request()->routeIs('backends.table') ? 'active' : '' }}" href="{{ route('backends.Productcolor') }}">
                  <span>Create ProductColor</span>
              </a>

              <a class="nav-link ms-3  {{ request()->routeIs('backends.Productsize') ? 'active' : '' }}" href="{{ route('backends.Productsize') }}">
                  <span>Create Productsize</span>
              </a>
            
           </div>
    </ol>
  </nav>
</div>
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
      <th class="text-uppercase text-secondary text-xxs font-weight-bold opacity-7 ps-2">Edit</th>
      <th class="text-uppercase text-secondary text-xxs font-weight-bold opacity-7 ps-2">delete</th>
      <th class="text-uppercase text-secondary text-xxs font-weight-bold opacity-7 ps-2">details</th>
    </tr>
  </thead>
    <tbody>
     @if($Product && count($Product) > 0)
       @foreach ($Product as $MyProduct )
       <tr>
          <td class="align-middle text-center">
          <span style="font-size: 12px;">
               {{$MyProduct->id}}
               </span>
          </td>
          <td class="align-middle">
    @if($MyProduct->productimage->first() && $MyProduct->productimage->first()->image_path)
        <img src="{{ asset('storage/' . $MyProduct->productimage->first()->image_path) }}" alt="BrandImage" style="width: 70px;">
    @endif
</td>

          <td class="align-middle">
              <span style="font-size: 12px;">
              {{$MyProduct->name}}
              </span>
               
</a>
          </td>
          <td class="align-middle">
          <span style="font-size: 12px;">
              {{$MyProduct->category->name}}
              </span>
         
          </td>
          <td class="align-middle">
          <span style="font-size: 12px;">
              {{$MyProduct->brand->name}}
          </span>
         
         </td>
         <td class="align-middle">
         <span style="font-size: 12px;">
             {{$MyProduct->price}}<span>$</span>
             </span>
         
         </td>
         <td>
    <span style="font-size: 12px;">
        @if($MyProduct->sizes->isNotEmpty())
            {{$MyProduct->sizes->first()->name}}
        @else
            No sizes available
        @endif
    </span>
</td>

       
         <td class="align-middle">
         <span style="font-size: 12px;">
    @if($MyProduct->colors->isNotEmpty())
    
        {{$MyProduct->colors->first()->name}}
    @else
        No Color Available
    @endif
</span>

         </td>
         <td class="align-middle">
         <span style="font-size: 12px;">
            {{$MyProduct->slug}}
            </span>
         </td>
         <td class="align-middle">
         <a href="{{route('backends.edit',$MyProduct->id)}}" class="btn btn-sm btn-info">
              Edit
            </a>
         </td>
        
          <td class="align-middle">
          <form action="{{route('backends.Product.destroy',$MyProduct->id)}}" method="POST"
            onsubmit="return confirm('Are you sure you want to delete this category?')">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-sm btn-primary">
                 delete
              </button>
            </form>
          </td>
          <td class="align-middle">
            <a href="{{route('backends.Product.details',$MyProduct->id)}}" class="btn btn-sm btn-info">
              Details
            </a>
          </td>
        </tr>
       @endforeach

               <tr>
                     <td class="align-middle">
                             <p class="text-dark pt-1 " style="font-size:17px">TotalProduct:</p>
                     </td>

                        <td class="align-middle">
                        <p class="text-dark pt-1 ps-5 " style="font-size:17px">
                            {{$TotalProduct}}
                        </p>

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
      @endif


    

</table>

              </div>
            </div>
          </div>
        </div>
      </div>
  
      
      </div>
      <footer class="footer pt-3  ">
        <div class="container-fluid">
          <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6 mb-lg-0 mb-4">
              <div class="copyright text-center text-sm text-muted text-lg-start">
                © <script>
                  document.write(new Date().getFullYear())
                </script>,
                made with <i class="fa fa-heart"></i> by
                <a href="https://www.creative-tim.com" class="font-weight-bold" target="_blank">Creative Tim</a>
                for a better web.
              </div>
            </div>
            <div class="col-lg-6">
              <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                <li class="nav-item">
                  <a href="https://www.creative-tim.com" class="nav-link text-muted" target="_blank">Creative Tim</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/presentation" class="nav-link text-muted" target="_blank">About Us</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/blog" class="nav-link text-muted" target="_blank">Blog</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/license" class="nav-link pe-0 text-muted" target="_blank">License</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </footer>
    </div>



@endsection 
