<?php 
  $sql = "SELECT * FROM tb_mk";
  $query = mysqli_query($koneksi, $sql);
?>

<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Data Matakuliah</h1>
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
                <th>ID MK</th>
                <th>Nama Matakuliah</th>
                <th>Semester</th>
                <th>Nama Dosen</th>
                <th>Action</th>
              </tr>
              </thead>
              <tbody>
                <?php while ($data = mysqli_fetch_assoc($query)) { ?>
                  <tr>
                    <td><?= $data['id_mk']; ?></td>
                    <td><?= $data['nama_matakuliah']; ?></td>
                    <td><?= $data['semester']; ?></td>
                    <td><?= $data['nama_dosen']; ?></td>
                    <td>
                      <a onclick="hapusData(<?= $data['id_mk'];?>);" class="btn btn-sm btn-primary">Hapus</a>
                      <a href="index.php?page=edit_data_mk&id_mk=<?= $data['id_mk'];?>" class="btn btn-sm btn-primary">Edit</a>
                      <a class="view-data-mk btn btn-sm btn-primary" 
                      data-nama-matkul="<?= $data['nama_matakuliah']; ?>"
                      data-semester-matkul="<?= $data['semester']; ?>"
                      data-dosen="<?= $data['nama_dosen']; ?>" 
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
      <form method="post" action="add/tambahdata_mk.php">
        <div class="modal-body">
          <div class="form-group">
            <label for="exampleInputMK">Nama Matakuliah</label>
            <input type="text" class="form-control" id="exampleInputNama" placeholder="Matakuliah" name="nama_mk" required>
          </div>
          <div class="form-group">
            <label for="exampleInputSemester">Semester</label>
            <select class="custom-select" name="matkul_semester">
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
          <div class="form-group">
            <label for="exampleInputNamaDosen">Nama Dosen</label>
            <input type="text" class="form-control" id="exampleInputNPM" placeholder="Dosen" name="nama_dosen_matkul" required>
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
      <div class="modal-body" id="hasil-view-data-mk">
           
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
        window.location.assign("delete/hapusdata_mk.php?id_mk="+ id_data);
      }
    })
  }
</script>
