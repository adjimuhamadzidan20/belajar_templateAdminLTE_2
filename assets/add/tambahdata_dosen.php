<?php  
	include '../../config/koneksi.php';

	$namaDosen = htmlspecialchars($_POST['nama_dosen']);
	$alamat = htmlspecialchars($_POST['alamat']);
	$noTelp = htmlspecialchars($_POST['no_telp']);
	$email = htmlspecialchars($_POST['email']);

	$sql = "INSERT INTO tb_dosen VALUES ('', '$namaDosen', '$alamat', '$noTelp', '$email')";
	$query = mysqli_query($koneksi, $sql);	
	header('Location: ../index.php?page=data_dosen');

	return $query;

?>