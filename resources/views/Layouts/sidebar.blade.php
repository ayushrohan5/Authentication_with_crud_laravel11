<aside class="left-sidebar">
        <!-- Sidebar scroll-->
        <div class="scroll-sidebar">
          <!-- User profile -->
          <div
            class="user-profile position-relative"
            style="
              background: url(../../assets/images/background/user-info.jpg)
                no-repeat;
            "
          >
            <!-- User profile image -->
            <div class="profile-img">
              <img
                src="{{ asset('storage/' . Auth::user()->profile_image) }}"
                alt="user"
                class=" rounded-circle"
                style="width: 57px; height: 57px;"
              />
            </div>
            <!-- User profile text-->
            <div class="profile-text pt-1 dropdown">
              <a
                href="#"
                class="
                  dropdown-toggle
                  u-dropdown
                  w-100
                  text-white
                  d-block
                  position-relative
                "
                id="dropdownMenuLink"
                data-bs-toggle="dropdown"
                aria-expanded="false"
                >{{Auth::user()->name}}</a
              >
              <div
                class="dropdown-menu animated flipInY"
                aria-labelledby="dropdownMenuLink"
              >
                <a class="dropdown-item" href="{{route('userprofile')}}"
                  ><i
                    data-feather="user"
                    class="feather-sm text-info me-1 ms-1"
                  ></i>
                  My Profile</a
                >
                <a class="dropdown-item" href="/account/dashboard"
                    ><i
                    data-feather="credit-card"
                    class="feather-sm text-info me-1 ms-1"
                  ></i>
                    User Lists</a
                  >
                  <a class="dropdown-item" href="/permissions"
                    ><i
                  data-feather="tag"
                  class="feather-sm text-info me-1 ms-1"
                ></i>
                    Permissions</a
                  >
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="/roles"
                    ><i
                      data-feather="folder"
                      class="feather-sm text-warning me-1 ms-1"
                    ></i>
                    Roles</a
                  >
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="{{route('account.logout')}}"
                  ><i
                    data-feather="log-out"
                    class="feather-sm text-danger me-1 ms-1"
                  ></i>
                  Logout</a
                >
                <div class="dropdown-divider"></div>
                <div class="ps-4 p-2">
                  <a href="{{route('userprofile')}}" class="btn d-block w-100 btn-info rounded-pill"
                    >View Profile</a
                  >
                </div>
              </div>
            </div>
          </div>
          <!-- End User profile text-->
          <!-- Sidebar navigation-->
          <nav class="sidebar-nav">
            <ul id="sidebarnav">
              <li class="nav-small-cap">
                <i class="mdi mdi-dots-horizontal"></i>
                <span class="hide-menu">Personal</span>
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link  waves-effect waves-dark"
                  href="/account/dashboard"
                  aria-expanded="false"
                >
                  <i class="mdi mdi-gauge"></i>
                  <span >Dashboard</span>
                </a>
                
              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark"
                  href="/userprofile"
                  aria-expanded="false"
                  ><i class="mdi mdi-account-multiple"></i
                  ><span >User Profile</span></a
                >
                <li class="sidebar-item">
                <a
                  class="sidebar-link  waves-dark"
                  href="/permissions"
                  aria-expanded="false"
                  ><i class="mdi mdi-account-multiple"></i
                  ><span >Permission List</span></a
                >
                <li class="sidebar-item">
                <a
                  class="sidebar-link waves-dark"
                  href="/roles"
                  aria-expanded="false"
                  ><i class="mdi mdi-account-multiple"></i
                  ><span >Role List</span></a
                >
              
                
              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="{{route('account.logout')}}"
                  aria-expanded="false"
                  ><i class="mdi mdi-directions"></i
                  ><span class="hide-menu">Log Out</span></a
                >
              </li>
            </ul>
          </nav>
          <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
        <!-- Bottom points-->
        <!-- <div class="sidebar-footer"> 
          
          <a
            href=""
            class="link"
            data-bs-toggle="tooltip"
            data-bs-placement="top"
            title="Settings"
            ><i class="ti-settings"></i
          ></a>
          
          <a
            href=""
            class="link"
            data-bs-toggle="tooltip"
            data-bs-placement="top"
            title="Email"
            ><i class="mdi mdi-gmail"></i
          ></a>
         
          <a
            href="{{route('account.logout')}}"
            class="link"
            data-bs-toggle="tooltip"
            data-bs-placement="top"
            title="Logout"
            ><i class="mdi mdi-power"></i
          ></a> 
        </div>  -->
        <!-- End Bottom points-->
      </aside>