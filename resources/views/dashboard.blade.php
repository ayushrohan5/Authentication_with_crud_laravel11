

@extends('Layouts.masterlayout')
@section('main-content')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
       
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
          <div class="widget-content searchable-container list">
            <div class="card card-body">
              <div class="row">
                <div class="col-md-4 col-xl-2">
                  <!-- <form>
                    <input
                      type="text"
                      class="form-control product-search"
                      id="input-search"
                      placeholder="Search Users..."
                    />
                  </form> -->
               
        
    
                </div>
                <div
                  class="
                    col-md-8 col-xl-10
                    text-end
                    d-flex
                    justify-content-md-end justify-content-center
                    mt-3 mt-md-0
                  "
                >
                  <div class="action-btn show-btn" style="display: none">
                    <a
                      href="javascript:void(0)"
                      class="
                        delete-multiple
                        btn-light-danger btn
                        me-2
                        text-danger
                        d-flex
                        align-items-center
                        font-weight-medium
                      "
                    >
                      <i
                        data-feather="trash-2"
                        class="feather-sm fill-white me-1"
                      ></i>
                      Delete All Row</a
                    >
                  </div>
                  <a
                    href="/Adduser"
                    id="btn-add-contact"
                    class="btn btn-info"
                  >
                    <i data-feather="users" class="feather-sm fill-white me-1">
                    </i>
                    Add Users</a
                  >
                </div>
              </div>
            </div>
            <!-- Modal -->
            <div
              class="modal fade"
              id="addContactModal"
              tabindex="-1"
              role="dialog"
              aria-labelledby="addContactModalTitle"
              aria-hidden="true"
            >
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header d-flex align-items-center">
                    <h5 class="modal-title">Contact</h5>
                    <button
                      type="button"
                      class="btn-close"
                      data-bs-dismiss="modal"
                      aria-label="Close"
                    ></button>
                  </div>
                  <div class="modal-body">
                    <div class="add-contact-box">
                      <div class="add-contact-content">
                        <form id="addContactModalTitle">
                          <div class="row">
                            <div class="col-md-6">
                              <div class="mb-3 contact-name">
                                <input
                                  type="text"
                                  id="c-name"
                                  class="form-control"
                                  placeholder="Name"
                                />
                                <span
                                  class="validation-text text-danger"
                                ></span>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="mb-3 contact-email">
                                <input
                                  type="text"
                                  id="c-email"
                                  class="form-control"
                                  placeholder="Email"
                                />
                                <span
                                  class="validation-text text-danger"
                                ></span>
                              </div>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-md-6">
                              <div class="mb-3 contact-occupation">
                                <input
                                  type="text"
                                  id="c-occupation"
                                  class="form-control"
                                  placeholder="Occupation"
                                />
                              </div>
                            </div>

                            <div class="col-md-6">
                              <div class="mb-3 contact-phone">
                                <input
                                  type="text"
                                  id="c-phone"
                                  class="form-control"
                                  placeholder="Phone"
                                />
                                <span
                                  class="validation-text text-danger"
                                ></span>
                              </div>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-md-12">
                              <div class="mb-3 contact-location">
                                <input
                                  type="text"
                                  id="c-location"
                                  class="form-control"
                                  placeholder="Location"
                                />
                              </div>
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button
                      id="btn-add"
                      class="btn btn-success rounded-pill px-4"
                    >
                      Add
                    </button>
                    <button
                      id="btn-edit"
                      class="btn btn-success rounded-pill px-4"
                    >
                      Save
                    </button>
                    <button
                      class="btn btn-danger rounded-pill px-4"
                      data-bs-dismiss="modal"
                    >
                      Discard
                    </button>
                  </div>
                </div>
              </div>
            </div>
            <div class="card card-body">
              <div class="table-responsive">
                <table class="table search-table v-middle">
                  <thead class="header-item">
                    <th>id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone no</th>
                    <th>Role</th>
                    <th>Action</th>
                  </thead>
                  <tbody>
                    <!-- row -->
                    @foreach($users as $users)
                     <tr>
                       
                        <td>{{$users->id}}</td>
                        <td>{{$users->name}}</td>
                        <td>{{$users->email}}</td>
                        <td>{{$users->phone}}</td>
                        <td>{{$users->role}}</td>
                        <td>
                            <!-- <a href="/delete/{{$users->id}}"> <span class="badge bg-danger  me-2 "><i
                          data-feather="trash-2"
                          class="feather-sm fill-white"></i></span>
                          </a>
                            <a href="/updateuser/{{$users->id}}" style=" background-color:#6610f2; border-radius: .3rem; padding: .13rem .6rem; margin-right: .4rem;><i class="fa-regular fa-pen-to-square" style="color: white;"></i></a>

                            <a href="{{'/viewuser/'.$users->id}}" 
                       style=" background-color: #6f42c1; border-radius: .3rem; padding: .13rem .6rem; margin-right: .4rem;">
                       <i class="fa-regular fa-eye" style="color: white;"></i></a> -->

                            <a href="/delet/{{$users->id}}" ><span class="badge bg-danger  me-2 ">
                          <i
                          data-feather="trash-2"
                          class="feather-sm fill-white"></i></span>
                          </a>
                        <a href="/updateuser/{{$users->id}}" 
                          style=" background-color:#6610f2; border-radius: .3rem; padding: .13rem .6rem; margin-right: .4rem;">
                          <i class="fa-regular fa-pen-to-square" style="color: white;"></i></a>
                       <a href="/viewuser/{{$users->id}}" 
                       style=" background-color: #6f42c1; border-radius: .3rem; padding: .13rem .6rem; margin-right: .4rem;">
                       <i class="fa-regular fa-eye" style="color: white;"></i></a>
                        </td>
                    </tr>
                    @endforeach
                 
                    <!-- /.row -->
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <!-- -------------------------------------------------------------- -->
          <!-- End PAge Content -->
          <!-- -------------------------------------------------------------- -->
        </div>
        <!-- Share Modal -->
        <div
          class="modal fade"
          id="Sharemodel"
          tabindex="-1"
          role="dialog"
          aria-labelledby="exampleModalLabel"
          aria-hidden="true"
        >
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <form>
                <div class="modal-header d-flex align-items-center">
                  <h5 class="modal-title" id="exampleModalLabel">
                    <i class="mdi mdi-auto-fix me-2"></i> Share With
                  </h5>
                  <button
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="modal"
                    aria-label="Close"
                  ></button>
                </div>
                <div class="modal-body">
                  <div class="input-group mb-3">
                    <button type="button" class="btn btn-info">
                      <i class="ti-user text-white"></i>
                    </button>
                    <input
                      type="text"
                      class="form-control"
                      placeholder="Enter Name Here"
                      aria-label="Username"
                    />
                  </div>
                  <div class="row">
                    <div class="col-3 text-center">
                      <a href="#Whatsapp" class="text-success">
                        <i class="display-6 mdi mdi-whatsapp"></i><br /><span
                          class="text-muted"
                          >Whatsapp</span
                        >
                      </a>
                    </div>
                    <div class="col-3 text-center">
                      <a href="#Facebook" class="text-info">
                        <i class="display-6 mdi mdi-facebook"></i><br /><span
                          class="text-muted"
                          >Facebook</span
                        >
                      </a>
                    </div>
                    <div class="col-3 text-center">
                      <a href="#Instagram" class="text-danger">
                        <i class="display-6 mdi mdi-instagram"></i><br /><span
                          class="text-muted"
                          >Instagram</span
                        >
                      </a>
                    </div>
                    <div class="col-3 text-center">
                      <a href="#Skype" class="text-cyan">
                        <i class="display-6 mdi mdi-skype"></i><br /><span
                          class="text-muted"
                          >Skype</span
                        >
                      </a>
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button
                    type="button"
                    class="btn btn-secondary"
                    data-bs-dismiss="modal"
                  >
                    Close
                  </button>
                  <button type="submit" class="btn btn-success">
                    <i class="fas fa-paper-plane"></i> Send
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
        <script>
        function showResults() {
            document.getElementById('results').style.display = 'block';
        }
    </script>
   
@endsection
 
