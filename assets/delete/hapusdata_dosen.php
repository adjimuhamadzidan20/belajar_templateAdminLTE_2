<?php  
	include '../../config/koneksi.php';
	
	$idDosen = $_GET['id_dosen'];

	$sql = "DELETE FROM tb_dosen WHERE id_dosen = '$idDosen'";
	mysqli_query($koneksi, $sql);
	header('Location: ../index.php?page=data_dosen');

?>