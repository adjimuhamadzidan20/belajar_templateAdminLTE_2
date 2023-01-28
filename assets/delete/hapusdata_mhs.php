<?php  
	include '../../config/koneksi.php';
	
	$idMhs = $_GET['id_mhs'];

	$sql = "DELETE FROM tb_mahasiswa WHERE id_mhs = '$idMhs'";
	mysqli_query($koneksi, $sql);
	header('Location: ../index.php?page=data_mahasiswa');

?>