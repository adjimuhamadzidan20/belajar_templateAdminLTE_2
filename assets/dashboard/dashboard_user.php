<?php  
  $sqlMhs = "SELECT * FROM tb_mahasiswa";
  $dataMhs = mysqli_query($koneksi, $sqlMhs);
  $hasilMhs = mysqli_num_rows($dataMhs);

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
  </div>
  <!-- /.row -->
</div><!-- /.container-fluid -->