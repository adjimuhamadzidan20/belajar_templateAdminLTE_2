<nav class="mt-2">
  <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
    <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
    <li class="nav-item">
      <a href="index.php?page=dashboard" class="nav-link">
        <i class="nav-icon fas fa-th"></i>
        <p>
          Dashboard
          <!-- <span class="right badge badge-danger">New</span> -->
        </p>
      </a>
    </li>
    <li class="nav-item menu-open">
      <a href="#" class="nav-link">
        <i class="nav-icon fas fa-users"></i>
        <p>
          Akademik
          <i class="right fas fa-angle-left"></i>
        </p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item">
          <a href="index.php?page=data_mahasiswa" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Data Mahasiswa</p>
          </a>
        </li>
      </ul>
    </li>
    <li class="nav-item">
      <a onclick="logout()" class="nav-link">
        <i class="nav-icon fas fa-power-off"></i>
        <p>
          Log Out
          <!-- <span class="right badge badge-danger">New</span> -->
        </p>
      </a>
    </li>
  </ul>
</nav>