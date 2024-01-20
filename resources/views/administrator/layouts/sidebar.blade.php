  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    {{-- <a href="{{ URL::to('/admin/dashboard') }}" class="brand-link">
      <img src="{{ asset('/img/logo.png')}}" alt="Logo" class="brand-image img-circle elevation-3" width="50%" >
      <span class="brand-text font-weight-light">Admin</span>
    </a> --}}

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('/img/user.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{  auth()->user()->name }}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="{{ URL::to('/admin/dashboard') }}" class="nav-link {{ Request::is('admin/dashboard')? 'active' : '' }}">
              <i class="nav-icon fas fa-globe"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>          


          <li class="nav-header">Web</li>
          <li class="nav-item">
            <a href="{{ URL::to('/admin/company') }}" class="nav-link {{ Request::is('admin/company')? 'active' : '' }}">
              <i class="nav-icon fas fa-building"></i>
              <p>
                Main Data
              </p>
            </a>
          </li>          
          <li class="nav-item">
            <a href="{{ URL::to('/admin/about') }}" class="nav-link {{ Request::is('admin/about')? 'active' : '' }}">
              <i class="nav-icon  fa fa-file"></i>
              <p>
                About
              </p>
            </a>
          </li>           
          <li class="nav-item">
            <a href="{{ URL::to('/admin/banner') }}" class="nav-link {{ Request::is('admin/banner')? 'active' : '' }}">
              <i class="nav-icon fas fa-image"></i>
              <p>
                Banner
              </p>
            </a>
          </li>       
          <li class="nav-item">
            <a href="{{ URL::to('/admin/gallery') }}" class="nav-link {{ Request::is('admin/gallery')? 'active' : '' }}">
              <i class="nav-icon fas fa-images"></i>
              <p>
                Gallery
              </p>
            </a>
          </li>          
          <li class="nav-item">
            <a href="{{ URL::to('/admin/advantage') }}" class="nav-link {{ Request::is('admin/advantage')? 'active' : '' }}">
              <i class="nav-icon fas fa-plus-square"></i>
              <p>
                Advantage
              </p>
            </a>
          </li>        
          <li class="nav-item">
            <a href="{{ URL::to('/admin/facility') }}" class="nav-link {{ Request::is('admin/facility')? 'active' : '' }}">
              <i class="nav-icon fas fa-train"></i>
              <p>
                Facility
              </p>
            </a>
          </li>       
          <li class="nav-item">
            <a href="{{ URL::to('/admin/blog') }}" class="nav-link {{ Request::is('admin/blog')? 'active' : '' }}">
              <i class="nav-icon fas fa-blog"></i>
              <p>
                News
              </p>
            </a>
          </li>                                        
          <li class="nav-item {{ Request::is('admin/category') || Request::is('admin/type')? 'menu-is-opening menu-open' : '' }}">
            <a href="#" class="nav-link {{ Request::is('admin/category') || Request::is('admin/type')? 'active' : '' }}">
              <i class="nav-icon 	fa fa-home"></i>
              <p>
                House
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ URL::to('/admin/category') }}" class="nav-link {{ Request::is('admin/category')? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Type</p>
                </a>
              </li> 
              <li class="nav-item">
                <a href="{{ URL::to('/admin/type') }}" class="nav-link {{ Request::is('admin/type')? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Detail</p>
                </a>
              </li>              
            </ul>
          </li>
          <li class="nav-header">Master Data</li>
          <li class="nav-item">
            <a href="{{ URL::to('/admin/user') }}" class="nav-link {{ Request::is('admin/user')? 'active' : '' }}">
              <i class="nav-icon fas fa-users"></i>
              <p>
                User
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>