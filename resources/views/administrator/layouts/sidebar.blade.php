  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{ asset('/img/logo.png')}}" alt="Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Admin</span>
    </a>

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
            <a href="{{ URL::to('/admin/banner') }}" class="nav-link {{ Request::is('admin/banner')? 'active' : '' }}">
              <i class="nav-icon fas fa-image"></i>
              <p>
                Banner
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
            <a href="{{ URL::to('/admin/type') }}" class="nav-link {{ Request::is('admin/type')? 'active' : '' }}">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Type
              </p>
            </a>
          </li>                       
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-envelope"></i>
              <p>
                Mailbox
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/mailbox/mailbox.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Inbox</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/mailbox/compose.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Compose</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/mailbox/read-mail.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Read</p>
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