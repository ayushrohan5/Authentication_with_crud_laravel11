@extends('Layouts.masterlayout')

@section('content')
<div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="row page-titles">
          <div class="col-md-5 col-12 align-self-center">
            <h3 class="text-themecolor mb-0">Profile Page</h3>
            <ol class="breadcrumb mb-0">
              <li class="breadcrumb-item">
                <a href="javascript:void(0)">Home</a>
              </li>
              <li class="breadcrumb-item active">Profile Page</li>
            </ol>
          </div>
         
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- -------------------------------------------------------------- -->
        <!-- Container fluid  -->
        <!-- -------------------------------------------------------------- -->
        <div class="container-fluid">
          <!-- -------------------------------------------------------------- -->
          <!-- Start Page Content -->
          <!-- -------------------------------------------------------------- -->
          <!-- Row -->
          <div class="row">
            <!-- Column -->
            <div class="col-lg-4 col-xlg-3 col-md-5">
              <div class="card">
                <div class="card-body">
                  <center class="mt-4">
                    <img
                      src="{{ asset('storage/' . Auth::user()->profile_image) }}"
                    class=" rounded-circle"
                style="width: 183px; height: 183px;"
                    />
                    <h4 class="card-title mt-2">{{Auth::user()->name}}</h4>
                    <h6 class="card-subtitle">{{Auth::user()->role}}</h6>
                    <div class="row text-center justify-content-md-center">
                      <div class="col-4">
                        
                      </div>
                      <div class="col-4">
                        
                      </div>
                    </div>
                  </center>
                </div>
                <div>
                  <hr />
                </div>
                <div class="card-body">
                  <small class="text-muted">Email address </small>
                  <h6>{{Auth::user()->email}}</h6>
                  <small class="text-muted pt-4 db">Phone</small>
                  <h6>{{Auth::user()->phone}}</h6>
                  <small class="text-muted pt-4 db">Address</small>
                  <h6>{{Auth::user()->address}}</h6>
                 
                  <div class="map-box">
                   
                  </div>
                  <small class="text-muted pt-4 db">Social Profile</small>
                  <br />
                  <button class="btn btn-circle btn-secondary">
                    <i class="fab fa-facebook-f"></i>
                  </button>
                  <button class="btn btn-circle btn-secondary">
                    <i class="fab fa-twitter"></i>
                  </button>
                  <button class="btn btn-circle btn-secondary">
                    <i class="fab fa-youtube"></i>
                  </button>
                </div>
              </div>
            </div>
            <!-- Column -->
            <!-- Column -->
            <div class="col-lg-8 col-xlg-9 col-md-7">
              <div class="card">
                <!-- Tabs -->
                <ul
                  class="nav nav-pills custom-pills"
                  id="pills-tab"
                  role="tablist"
                >
                 
                
                  <li class="nav-item">
                    <a
                      class="nav-link"
                      id="pills-profile-tab"
                      data-bs-toggle="pill"
                      href="#last-month"
                      role="tab"
                      aria-controls="pills-profile"
                      aria-selected="false"
                      >Profile</a
                    >
                  </li>
                
                </ul>
                <!-- Tabs -->
             
                  
                  <div
                    class="tab-content"
                    id="last-month"
                    role="tabpanel"
                    aria-labelledby="pills-profile-tab"
                  >
                    <div class="card-body">
                      <div class="row">
                        <div class="col-md-3 col-xs-6 b-r">
                          <strong>Full Name</strong>
                          <br />
                          <p class="text-muted">{{Auth::user()->name}}</p>
                        </div>
                        <div class="col-md-3 col-xs-6 b-r">
                          <strong>Mobile</strong>
                          <br />
                          <p class="text-muted">{{Auth::user()->phone}}</p>
                        </div>
                        <div class="col-md-3 col-xs-6 b-r">
                          <strong>Email</strong>
                          <br />
                          <p class="text-muted">{{Auth::user()->email}}</p>
                        </div>
                        <div class="col-md-3 col-xs-6">
                          <strong>Location</strong>
                          <br />
                          <p class="text-muted">{{Auth::user()->address}}</p>
                        </div>
                      </div>
                      <hr />
                    
                      <h4 class="font-weight-medium mt-4">Skill Set</h4>
                      <hr />
                      <h5 class="mt-4">
                        HTML <span class="pull-right">90%</span>
                      </h5>
                      <div class="progress">
                        <div
                          class="progress-bar bg-success"
                          role="progressbar"
                          aria-valuenow="80"
                          aria-valuemin="0"
                          aria-valuemax="100"
                          style="width: 90%; height: 6px"
                        >
                          <span class="sr-only">50% Complete</span>
                        </div>
                      </div>
                      <h5 class="mt-4">
                        CSS <span class="pull-right">90%</span>
                      </h5>
                      <div class="progress">
                        <div
                          class="progress-bar bg-info"
                          role="progressbar"
                          aria-valuenow="90"
                          aria-valuemin="0"
                          aria-valuemax="100"
                          style="width: 90%; height: 6px"
                        >
                          <span class="sr-only">50% Complete</span>
                        </div>
                      </div>
                      <h5 class="mt-4">
                        jQuery <span class="pull-right">50%</span>
                      </h5>
                      <div class="progress">
                        <div
                          class="progress-bar bg-danger"
                          role="progressbar"
                          aria-valuenow="50"
                          aria-valuemin="0"
                          aria-valuemax="100"
                          style="width: 50%; height: 6px"
                        >
                          <span class="sr-only">50% Complete</span>
                        </div>
                      </div>
                      <h5 class="mt-4">
                        Reactjs <span class="pull-right">70%</span>
                      </h5>
                      <div class="progress">
                        <div
                          class="progress-bar bg-warning"
                          role="progressbar"
                          aria-valuenow="70"
                          aria-valuemin="0"
                          aria-valuemax="100"
                          style="width: 70%; height: 6px"
                        >
                          <span class="sr-only">50% Complete</span>
                        </div>
                      </div>
                    </div>
                  </div>
                 
            <!-- Column -->
          </div>
          <!-- Row -->
          <!-- -------------------------------------------------------------- -->
          <!-- End PAge Content -->
          <!-- -------------------------------------------------------------- -->
        </div>
@endsection