<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">SELAMAT DATANG DI SIKAMPUS</h1>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<section class="content">
  <?php 
    if ($_SESSION['level'] == 'admin') {
      include 'dashboard/dashboard_admin.php';
    } else {
      include 'dashboard/dashboard_user.php';
    }
  ?>
</section>