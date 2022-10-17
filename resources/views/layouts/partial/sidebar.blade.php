<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="" class="brand-link">
        <img src="{{ asset('backend/dist/img/AdminLTELogo1.png') }}" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity:0.8">
        <span class="brand-text font-weight-light"><b>Better Think BD</b></span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('backend/dist/img/shohag.jpg') }}" class="img-circle elevation-2" alt="User Image">
                {{-- must 128*128 --}}
            </div>
            <div class="info">
                <a href="#" class="d-block">Aktarozzaman</a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                    aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                 with font-awesome or any other icon font library -->
                <li class="nav-item">

                    <a href="#" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    {{-- catagorys dashbord show --}}
                    <ul class="nav-treeview">

                        <li class="nav-item">
                            <a href="#" class="nav-link ">
                                <i class="nav-icon fas fa-copy"></i>
                                <p>Catagory
                                    <i class="fas fa-angle-left right"></i>
                                </p>

                            </a>

                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('catagory.create') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Add Catagory</p>

                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('catagory.index') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>All Catagory</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        {{-- user dashboard --}}
                        <li class="nav-item">
                          <a href="#" class="nav-link ">
                              <i class="nav-icon fas fa-copy"></i>
                              <p>post
                                  <i class="fas fa-angle-left right"></i>
                              </p>

                          </a>

                          <ul class="nav nav-treeview">
                              <li class="nav-item">
                                  <a href="{{ route('post.create') }}" class="nav-link">
                                      <i class="far fa-circle nav-icon"></i>
                                      <p>Create post</p>

                                  </a>
                              </li>
                              <li class="nav-item">
                                  <a href="{{ route('catagory.index') }}" class="nav-link">
                                      <i class="far fa-circle nav-icon"></i>
                                      <p>Menage post</p>
                                  </a>
                              </li>
                          </ul>
                      </li>
                      {{-- end user dashboard --}}
                    </ul>

                    {{-- end catagory dashboard --}}
                    <ul class="nav-treeview">

                      <li class="nav-item">
                          <a href="#" class="nav-link ">
                              <i class="nav-icon fas fa-copy"></i>
                              <p>Sub Catagory
                                  <i class="fas fa-angle-left right"></i>
                              </p>

                          </a>

                          <ul class="nav nav-treeview">
                              <li class="nav-item">
                                  <a href="{{ route('subcatagory.create') }}" class="nav-link">
                                      <i class="far fa-circle nav-icon"></i>
                                      <p>Add SubCatagorys</p>

                                  </a>
                              </li>
                              <li class="nav-item">
                                  <a href="{{ route('subcatagory.index') }}" class="nav-link">
                                      <i class="far fa-circle nav-icon"></i>
                                      <p>All SubCatagorys</p>
                                  </a>
                              </li>
                          </ul>
                      </li>
                  </ul>

                </li>

                <li class="nav-header">LABELS</li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon far fa-circle text-danger"></i>
                        <p class="text">Important</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon far fa-circle text-danger"></i>
                        <p>Warning</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('password.request') }}" class="nav-link">
                        <i class="nav-icon far fa-circle text-warning"></i>
                        <p>Password Chennge</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('logout') }}" class="nav-link"
                        onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">
                        <i class="nav-icon far fa-circle text-info"></i>
                        <p>Logout</p>
                        <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
