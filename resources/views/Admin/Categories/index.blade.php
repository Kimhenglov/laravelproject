
@extends('Mylayout.dashboard');
@section('content')

<div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>Categories List</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">

                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">CategoriesID</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">CategoriesName</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Edit</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Delete</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Details</th>
                    </tr>
                  </thead>
                  <tbody>
                       @foreach ($Categories as $MyCategories)
                       <tr>
                      <td>
                      <div class="d-flex px-2 py-1 ms-4">
                             {{$MyCategories->id}}
                      </div>
                     
                           
                        <!-- <div class="d-flex px-2 py-1">
                          <div>
                             {{$MyCategories->id}}
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">
                              {{$MyCategories->name}}
                            </h6>
                            <p class="text-xs text-secondary mb-0">alexa@creative-tim.com</p>
                          </div>
                        </div> -->
                      </td>

                          <td>
                              <div class="d-flex px-2 py-1 ms-4">
                                   {{$MyCategories->name}}
                              </div>
                                
                          </td>
                   
                  
                      <td class="align-middle">
                        <a href="{{route('backends.Categories.edit',$MyCategories->id)}} " class="text-secondary font-weight-bold text-xs btn btn-primary" data-toggle="tooltip" data-original-title="Edit user">
                          Edit Data
                        </a>
                      </td>
                         <td class="align-middle">
                         <button type="submit" class="btn btn-sm btn-danger mt-3">Delete</button>
                         </td>
                         <td class="align-middle">
                         <button type="submit" class="btn btn btn-info mt-3">
                         <a class="nav-link ms-2 {{ request()->routeIs('backends.SubCategories.index') ? 'active' : '' }}" href="{{ route('backends.SubCategories.index',$MyCategories->id) }}">
                  <span>Details</span>
              </a>
                         </button>
                         </td>
                    </tr> 
                       @endforeach
                  
                  </tbody>
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