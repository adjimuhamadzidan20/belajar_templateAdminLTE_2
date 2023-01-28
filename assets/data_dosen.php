<?php 
  $sql = "SELECT * FROM tb_dosen";
  $query = mysqli_query($koneksi, $sql);
?>

<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Data Dosen</h1>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <!-- /.card-header -->
          <div class="card-body">
            <button type="button" class="btn btn-info mb-3" data-toggle="modal" data-target="#modal-lg">
              Tambah Data
            </button>
            <table id="example1" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th>ID Dosen</th>
                <th>Nama Dosen</th>
                <th>Alamat</th>
                <th>No Telepon</th>
                <th>Email</th>
                <th>Action</th>
              </tr>
              </thead>
              <tbody>
                <?php while ($data = mysqli_fetch_assoc($query)) { ?>
                  <tr>
                    <td><?= $data['id_dosen']; ?></td>
                    <td><?= $data['nama_dosen']; ?></td>
                    <td><?= $data['alamat']; ?></td>
                    <td><?= $data['no_telepon']; ?></td>
                    <td><?= $data['email']; ?></td>
                    <td>
                      <a onclick="hapusData(<?= $data['id_dosen'];?>);" class="btn btn-sm btn-primary">Hapus</a>
                      <a href="index.php?page=edit_data_dosen&id_dosen=<?= $data['id_dosen'];?>" class="btn btn-sm btn-primary">Edit</a>
                      <a class="view-data-dosen btn btn-sm btn-primary" 
                      data-nama-dosen="<?= $data['nama_dosen']; ?>"
                      data-alamat="<?= $data['alamat']; ?>"
                      data-no-telp="<?= $data['no_telepon']; ?>" 
                      data-email="<?= $data['email']; ?>" 
                      data-toggle="modal" data-target="#modal-view">View Data</a>
                    </td>
                  </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container-fluid -->
</section>

<!-- /.content -->
<div class="modal fade" id="modal-lg">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Tambah Data</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="post" action="add/tambahdata_dosen.php">
        <div class="modal-body">
          <div class="form-group">
            <label for="exampleInputNamaDosen">Nama Dosen</label>
            <input type="text" class="form-control" id="exampleInputNamaDosen" placeholder="Nama Dosen" name="nama_dosen" required>
          </div>
          <div class="form-group">
            <label for="exampleInputAlamat">Alamat</label>
            <input type="text" class="form-control" id="exampleInputAlamat" placeholder="Alamat" name="alamat" required>
          </div>
          <div class="form-group">
            <label for="exampleInputNoTelp">No. Telepon</label>
            <input type="text" class="form-control" id="exampleInputNoTelp" placeholder="No. Telp" name="no_telp" required>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail">Email</label>
            <input type="email" class="form-control" id="exampleInputEmail" placeholder="Email" name="email" required>
          </div>
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
      </form>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>

<!-- modal view data -->
<div class="modal fade" id="modal-view">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">View Data</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="hasil-view-data-dosen">
           
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>

<script type="text/javascript">
  function hapusData(id_data) {
    Swal.fire({
      title: 'Apakah anda yakin ingin menghapusnya?',
      showDenyButton: false,
      showCancelButton: true,
      confirmButtonText: 'Delete',
      // denyButtonText: `Don't save`,
    }).then((result) => {
      /* Read more about isConfirmed, isDenied below */
      if (result.isConfirmed) {
        // Swal.fire('Data berhasil terhapus!', '', 'success')
        window.location.assign("delete/hapusdata_dosen.php?id_dosen="+ id_data);
      }
    })
  }
</script>
