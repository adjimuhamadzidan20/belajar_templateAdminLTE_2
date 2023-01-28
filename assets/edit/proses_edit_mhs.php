<?php  
	include '../../config/koneksi.php';
	
	$id = $_POST['id'];
	$nama = htmlspecialchars($_POST['nama']);
	$npm = htmlspecialchars($_POST['npm']);
	$semester = htmlspecialchars($_POST['semester']);

	$sql = "UPDATE tb_mahasiswa SET nama = '$nama', npm = '$npm', semester = '$semester' WHERE id_mhs = '$id'";
	mysqli_query($koneksi, $sql);
	header('Location: ../index.php?page=data_mahasiswa');

?>