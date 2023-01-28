<?php 
  $sql = "SELECT * FROM tb_mahasiswa";
  $query = mysqli_query($koneksi, $sql);
?>

<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Data Mahasiswa</h1>
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
                <th>ID Mahasiswa</th>
                <th>Nama</th>
                <th>NPM</th>
                <th>Semester</th>
                <th>Action</th>
              </tr>
              </thead>
              <tbody>
                <?php while ($data = mysqli_fetch_assoc($query)) { ?>
                  <tr>
                    <td><?= $data['id_mhs']; ?></td>
                    <td><?= $data['nama']; ?></td>
                    <td><?= $data['npm']; ?></td>
                    <td><?= $data['semester']; ?></td>
                    <td>
                      <a onclick="hapusData(<?= $data['id_mhs'];?>);" class="btn btn-sm btn-primary">Hapus</a>
                      <a href="index.php?page=edit_data_mhs&id_mhs=<?= $data['id_mhs'];?>" class="btn btn-sm btn-primary">Edit</a>
                      <a class="view-data-mhs btn btn-sm btn-primary" 
                      data-nama="<?= $data['nama']; ?>"
                      data-npm="<?= $data['npm']; ?>"
                      data-semester="<?= $data['semester']; ?>" 
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
      <form method="post" action="add/tambahdata_mhs.php">
        <div class="modal-body">
          <div class="form-group">
            <label for="exampleInputNama">Nama</label>
            <input type="text" class="form-control" id="exampleInputNama" placeholder="Nama Mahasiswa" name="nama" required>
          </div>
          <div class="form-group">
            <label for="exampleInputNPM">NPM</label>
            <input type="text" class="form-control" id="exampleInputNPM" placeholder="NPM" name="npm" required>
          </div>
          <div class="form-group">
            <label for="exampleInputSemester">Semester</label>
            <select class="custom-select" name="semester">
              <option selected disabled>Pilih Semester</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>
            </select>
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
      <div class="modal-body" id="hasil-view-data-mhs">
           
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
        window.location.assign("delete/hapusdata_mhs.php?id_mhs="+ id_data);
      }
    })
  }
</script>
