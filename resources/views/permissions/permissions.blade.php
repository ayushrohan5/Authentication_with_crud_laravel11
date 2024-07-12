
@extends('Layouts.masterlayout')
@section('permission-content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <div class="page-wrapper">
        <div class="container-fluid">
        <div class="card  ">
            <div class="row">
        <div class="widget-content searchable-container list">
        <div class="d-flex justify-content-end mb-3 mt-3
                     ">
          <a href="/addpermissions" style="margin-right: 17px;"> <button class="btn btn-primary">Add Permissions</button></a>
        </div></div></div></div>
        <div class="card card-body">
            <div class="table-responsive">
        <table class="table table-bordered search-table v-middle">
            <thead>
                <tr>
                    <th>Permission ID</th>
                    <th>Permission Group ID</th>
                    <th>Permission Name</th>
                    <th>Permission Key</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
              @foreach($permission as $permissions)
                <tr>
                  <td>{{$permissions->id}}</td>
                  <td>{{$permissions->permission_group_id}}</td>
                  <td>{{$permissions->permission_name}}</td>
                  <td>{{$permissions->permission_key}}</td>
                  <td>{{$permissions->status}}</td>
                  <td>
                  @if($permissions->status == 'active')
                  <a href="{{('/permissions/'.$permissions->id)}}" style=" background-color:#6610f2; border-radius: .3rem; padding: .13rem .6rem; margin-right: .4rem;">
                   
                  <i class="fa-regular fa-pen-to-square" style="color: white;"></i>
                   
                  </a>
                 
                  <a href="{{('/deletee/'.$permissions->id)}}" style=" background-color: red; border-radius: .3rem; padding: .14rem .1rem; margin-right: .1rem;"><span class="badge mb-2">
                          <i
                          data-feather="trash-2"
                          class="feather-sm fill-white"></i></span></a>
                          @else
                          <div>

                          </div>
                          @endif
                          @if($permissions->status == 'inactive')
                  <a href="{{('/active-permissions/'.$permissions->id)}}" style="background-color: #1dd1a1; border-radius: .3rem; padding: .13rem .6rem;
                  margin-right: .5rem;">
                    <i class="fa-solid fa-check" style="color: #fff;"></i>
                  </a>
                  @else
                  <a href="{{('/active-permissions/'.$permissions->id)}}" class="bg-danger rounded" style="padding: .13rem .6rem;
                  margin-right: .5rem;">
                    <i class="fa-solid fa-xmark" style="color: #fff;"></i>
                  </a>
                  @endif
                  </td>
                </tr>
                @endforeach
            </tbody>
        </table>
</div>
</div>
</div>

    </div>
    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

@endsection