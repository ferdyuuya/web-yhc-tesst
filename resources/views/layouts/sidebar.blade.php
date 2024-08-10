<div class="sidebar" style="background-color: black">
  <!-- Sidebar user panel (optional) -->
  <div class="info" style="margin-bottom: 5px;">
    <a href="#" class="d-block" style="color: #ecf0f1; text-decoration: none; font-weight: bold;"></a>
  </div>
  <div class="info">
    <a href="#" class="d-block" style="color: #ecf0f1; text-decoration: none; font-weight: bold;"></a>
  </div>
  <!-- Sidebar Menu -->
  <nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
      <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
      <li class="nav-item">
        <a href="/" class="nav-link active">
          <i class="nav-icon fas fa-th"></i>
          <p>
            Dashboard
          </p>
        </a>
      </li>
      <li class="nav-item">
        <a href="" class="nav-link">
          <i class="nav-icon fas fa-th"></i>
          <p>
            Course
          </p>
        </a>
      </li>
      {{-- <li class="nav-item">
        <a href="" class="nav-link">
          <i class="nav-icon fas fa-th"></i>
          <p>
            Materi
          </p>
        </a>
      </li> --}}
      <li class="nav-item">
        <a href="" class="nav-link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
          <i class="nav-icon fas fa-sign-out-alt"></i>  
          <p>Logout</p>
        </a>
        <form id="logout-form" action="" method="POST" style="display: none;">
        </form>
      </li>
    </ul>
  </nav>
</div>
<!-- /.sidebar-menu -->
