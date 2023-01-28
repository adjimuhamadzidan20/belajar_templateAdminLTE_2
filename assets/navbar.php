<nav class="main-header navbar navbar-expand navbar-white navbar-light">
  <!-- Left navbar links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
    </li>
  </ul>

  <!-- Right navbar links -->
  <ul class="navbar-nav ml-auto">
    <!-- Messages Dropdown Menu -->
    <li class="nav-item">
      <div class="info">
        <a href="index.php" class="nav-link"><?php echo strtoupper($_SESSION['nama']); ?> | <?php echo strtoupper($_SESSION['level']); ?></a>
      </div>
    </li>
  </ul>
</nav>