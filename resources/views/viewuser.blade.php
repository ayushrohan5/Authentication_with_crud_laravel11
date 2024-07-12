@extends('Layouts.masterlayout')
@section('viewuser')

<div class="col-lg-8 col-xlg-3 col-md-5" style ="margin-left: 273px; margin-top:92px">
        <div class="card flex flex-row">
            <div class="card-body">
                <center>   
                    <img
                      src="{{ asset('storage/' . $user->profile_image) }}"
                      style=" border-radius:1rem; "
                      width="200"
                    /> 
                </center>
            </div>
            <div class="card-body">
                <small class="text-muted pt-4 db">Name </small>
                <h4 class="card-title mt-2">{{$user->name}}</h4>
                <small class="text-muted">Email address </small>
                <h6>{{$user->email}}</h6>
                <small class="text-muted pt-4 db">Phone</small>
                <h6>{{$user->phone}}</h6>
                <small class="text-muted pt-4 db">Address</small>
                <h6>{{$user->address}}</h6>
            </div>
        </div>
</div>

@endsection