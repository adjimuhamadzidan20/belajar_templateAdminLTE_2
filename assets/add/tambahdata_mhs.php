<?php  
	include '../../config/koneksi.php';

	$nama = htmlspecialchars($_POST['nama']);
	$npm = htmlspecialchars($_POST['npm']);
	$semester = htmlspecialchars($_POST['semester']);

	$sql = "INSERT INTO tb_mahasiswa VALUES ('', '$nama', '$npm', '$semester')";
	$query = mysqli_query($koneksi, $sql);
	header('Location: ../index.php?page=data_mahasiswa');

	return $query;
	
?>