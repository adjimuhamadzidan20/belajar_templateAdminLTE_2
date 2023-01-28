<?php  
  $idDosen = $_GET['id_dosen'];

  $sql = "SELECT * FROM tb_dosen WHERE id_dosen = '$idDosen'";
  $data = mysqli_query($koneksi, $sql);
  $hasil = mysqli_fetch_assoc($data);

?>

<section class="content">
  <div class="container-fluid">
    <!-- general form elements disabled -->
    <div class="card card-outline-secondary">
      <div class="card-header">
        <h3 class="card-title">Edit Data Mahasiswa</h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <form method="post" action="edit/proses_edit_dosen.php">
          <div class="row">
            <div class="col">
              <input type="text" class="form-control" name="id" value="<?php echo $hasil['id_dosen']; ?>" hidden="hidden">
              <!-- text input -->
              <div class="form-group">
                <label>Nama Dosen</label>
                <input type="text" class="form-control" placeholder="Nama Dosen" name="nama_dosen" value="<?php echo $hasil['nama_dosen']; ?>" required>
              </div>
            </div>
            <div class="col">
              <div class="form-group">
                <label>Alamat</label>
                <input type="text" class="form-control" placeholder="Alamat" name="alamat" value="<?php echo $hasil['alamat']; ?>"required>
              </div>
            </div>
            <div class="col">
              <div class="form-group">
                <label>No. Telepon</label>
                <input type="text" class="form-control" placeholder="No. Telp" name="no_telp" value="<?php echo $hasil['no_telepon']; ?>" required>
              </div>
            </div>
            <div class="col">
              <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" placeholder="Email" name="email" value="<?php echo $hasil['email']; ?>" required>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col d-flex justify-content-between">
              <a href="index.php?page=data_dosen">
                <button type="button" class="btn btn-default">Kembali</button>
              </a>
              <button type="submit" class="btn btn-primary">Edit</button>
            </div>
          </div>
        </form>
      </div>
      <!-- /.card-body -->
    </div>
  </div>
</section>