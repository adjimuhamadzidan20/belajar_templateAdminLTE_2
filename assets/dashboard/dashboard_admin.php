<?php  
  $sqlMhs = "SELECT * FROM tb_mahasiswa";
  $sqlMk = "SELECT * FROM tb_mk";
  $sqlDosen = "SELECT * FROM tb_dosen";

  $dataMhs = mysqli_query($koneksi, $sqlMhs);
  $dataMk = mysqli_query($koneksi, $sqlMk);  
  $dataDosen = mysqli_query($koneksi, $sqlDosen);

  $hasilMhs = mysqli_num_rows($dataMhs);
  $hasilMk = mysqli_num_rows($dataMk);
  $hasilDosen = mysqli_num_rows($dataDosen);

?>

<div class="container-fluid">
  <!-- Small boxes (Stat box) -->
  <div class="row">
    <div class="col">
      <!-- small box -->
      <div class="small-box bg-info">
        <div class="inner">
          <h3><?php echo $hasilMhs; ?></h3>
          <p>Data Mahasiswa</p>
        </div>
        <div class="icon">
          <i class="ion ion-person-add"></i>
        </div>
        <a href="index.php?page=data_mahasiswa" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col">
      <!-- small box -->
      <div class="small-box bg-info">
        <div class="inner">
          <h3><?php echo $hasilMk; ?></h3>
          <p>Data MK</p>
        </div>
        <div class="icon">
          <i class="ion ion-person-add"></i>
        </div>
        <a href="index.php?page=data_mk" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col">
      <!-- small box -->
      <div class="small-box bg-info">
        <div class="inner">
          <h3><?php echo $hasilDosen; ?></h3>
          <p>Data Dosen</p>
        </div>
        <div class="icon">
          <i class="ion ion-person-add"></i>
        </div>
        <a href="index.php?page=data_dosen" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
  </div>
  <!-- /.row -->
</div><!-- /.container-fluid -->