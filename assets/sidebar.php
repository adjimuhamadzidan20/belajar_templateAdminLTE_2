<div class="sidebar">

  <!-- Sidebar Menu -->
  <?php 
    if ($_SESSION['level'] == 'admin') {
      include 'menu/admin.php';
    } else {
      include 'menu/user.php';
    }
  ?>
  <!-- /.sidebar-menu -->
</div>

<script type="text/javascript">
  function logout() {
    Swal.fire({
      title: 'Apakah anda yakin ingin keluar?',
      showDenyButton: false,
      showCancelButton: true,
      confirmButtonText: 'Logout',
      // denyButtonText: `Don't save`,
    }).then((result) => {
      /* Read more about isConfirmed, isDenied below */
      if (result.isConfirmed) {
        // Swal.fire('Data berhasil terhapus!', '', 'success')
        window.location.assign("logout.php");
      }
    })
  }
</script>