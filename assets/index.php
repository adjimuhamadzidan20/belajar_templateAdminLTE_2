<?php  
  session_start();
  if (!$_SESSION['nama']) {
    header('Location: ../index.php?session=expired');
  }
  
  include '../config/koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">

<?php  
  include 'header.php';
?>

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <!-- <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div> -->

  <!-- Navbar -->
  <?php  
    include 'navbar.php';
  ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link ml-2">
      <span class="brand-text font-weight-bold">SIKAMPUS</span>
    </a>

    <!-- Sidebar -->
    <?php  
      include 'sidebar.php';
    ?>    
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Main content -->
    <?php 
      if (isset($_GET['page'])) {
        if ($_GET['page'] == 'dashboard') {
          include 'dashboard.php';
        } 
        else if ($_GET['page'] == 'data_mahasiswa') {
          include 'data_mahasiswa.php';
        } 
        else if ($_GET['page'] == 'data_mk') {
          include 'data_mk.php';
        } 
        else if ($_GET['page'] == 'data_dosen') {
          include 'data_dosen.php';
        } 
        else if ($_GET['page'] == 'edit_data_mhs') {
          include 'edit/editdata_mhs.php';
        } 
        else if ($_GET['page'] == 'edit_data_mk') {
          include 'edit/editdata_mk.php';
        } 
        else if ($_GET['page'] == 'edit_data_dosen') {
          include 'edit/editdata_dosen.php';
        } 
        else {
          include 'not_found404.php';
        }
      } else {
        include 'dashboard.php';
      }
      
    ?>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
  <!-- footer -->
  <?php  
    include 'footer.php';
  ?>
  <!-- / footer -->
  
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

</body>
</html>
