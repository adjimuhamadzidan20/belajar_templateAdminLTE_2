<?php  
  $idMK = $_GET['id_mk'];

  $sql = "SELECT * FROM tb_mk WHERE id_mk = '$idMK'";
  $data = mysqli_query($koneksi, $sql);
  $hasil = mysqli_fetch_assoc($data);

?>

<section class="content">
  <div class="container-fluid">
    <!-- general form elements disabled -->
    <div class="card card-outline-secondary">
      <div class="card-header">
        <h3 class="card-title">Edit Data Matakuliah</h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <form method="post" action="edit/proses_edit_mk.php">
          <div class="row">
            <div class="col">
              <input type="text" class="form-control" name="id" value="<?php echo $hasil['id_mk']; ?>" hidden="hidden">
              <!-- text input -->
              <div class="form-group">
                <label>Nama Matakuliah</label>
                <input type="text" class="form-control" placeholder="Matakuliah" name="nama_mk" value="<?php echo $hasil['nama_matakuliah']; ?>" required>
              </div>
            </div>
            <div class="col">
              <div class="form-group">
                <label>Semester</label>
                <select class="custom-select" name="matkul_semester">
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
            <div class="col">
              <div class="form-group">
                <label>Nama Dosen</label>
                <input type="text" class="form-control" placeholder="Dosen" name="nama_dosen_matkul" value="<?php echo $hasil['nama_dosen']; ?>" required>
              </div>
            </div>    
          </div>
          <div class="row">
            <div class="col d-flex justify-content-between">
              <a href="index.php?page=data_mk">
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