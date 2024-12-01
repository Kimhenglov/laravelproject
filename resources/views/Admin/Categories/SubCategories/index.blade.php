@extends('Mylayout.dashboard');
@section('content')

<div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
            
<div class="pagetitle">
  <h1>SubCategories</h1>
  <nav>
    <ol class="breadcrumb">
    <div class="d-flex justify-content-end">
            @if($Parent)
              <p class="pt-3 text-dark">
                {{$Parent->name}}
              </p>
            @endif
           </div>
    </ol>
  </nav>
</div>
          <div class="card mb-4">

          
            <div class="card-header pb-0">
              <h6>SubCategories List</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">

              <table class="table table-hover table-striped align-items-center mb-0">
  <thead class="thead-dark">
    <tr>
      <th class="text-uppercase text-secondary text-xxs font-weight-bold opacity-7">Categories ID</th>
      <th class="text-uppercase text-secondary text-xxs font-weight-bold opacity-7 ps-2">Categories Name</th>
      <th class="text-uppercase text-secondary text-xxs font-weight-bold opacity-7 ps-2">Edit</th>
      <th class="text-uppercase text-secondary text-xxs font-weight-bold opacity-7 ps-2">Delete</th>
      <th class="text-uppercase text-secondary text-xxs font-weight-bold opacity-7 ps-2">Details</th>
    </tr>
  </thead>
  
  @if($SubCategories && count($SubCategories) > 0)
    <tbody>
      @foreach ($SubCategories as $MySub)
        <tr>
          <td class="align-middle text-center">
            {{ $MySub->id }}
          </td>
          <td class="align-middle">
            {{ $MySub->name }}
          </td>
          <td class="align-middle">
  
          <a href="{{ route('backends.SubCategories.edit', parameters: ['SubCategories_id' => $MySub->id]) }}" 
   class="btn btn-primary btn-sm" 
   data-toggle="tooltip" 
   data-original-title="Edit user">
   Edit
</a>
          </td>
          <td class="align-middle">
            <form action="{{route('backends.SubCategories.Delete',['SubCategories_id' => $MySub->id])}}" method="POST"
            onsubmit="return confirm('Are you sure you want to delete this category?')">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-sm btn-danger">
                Delete
              </button>
            </form>
          </td>
          <td class="align-middle">
            <a href="#" class="btn btn-sm btn-info">
              Details
            </a>
          </td>
        </tr>
      @endforeach
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

