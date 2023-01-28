<?php  
  $idMhs = $_GET['id_mhs'];

  $sql = "SELECT * FROM tb_mahasiswa WHERE id_mhs = '$idMhs'";
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
        <form method="post" action="edit/proses_edit_mhs.php">
          <div class="row">
            <div class="col">
              <input type="text" class="form-control" name="id" value="<?php echo $hasil['id_mhs']; ?>" hidden="hidden">
              <!-- text input -->
              <div class="form-group">
                <label>Nama</label>
                <input type="text" class="form-control" placeholder="Nama Mahasiswa" name="nama" value="<?php echo $hasil['nama']; ?>" required>
              </div>
            </div>
            <div class="col">
              <div class="form-group">
                <label>NPM</label>
                <input type="text" class="form-control" placeholder="NPM" name="npm" value="<?php echo $hasil['npm']; ?>" required>
              </div>
            </div>
            <div class="col">
              <div class="form-group">
                <label>Semester</label>
                <select class="custom-select" name="semester">
                  <option value="<?php echo $hasil['semester']; ?>" selected><?php echo $hasil['semester']; ?></option>
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
          </div>
          <div class="row">
            <div class="col d-flex justify-content-between">
              <a href="index.php?page=data_mahasiswa">
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