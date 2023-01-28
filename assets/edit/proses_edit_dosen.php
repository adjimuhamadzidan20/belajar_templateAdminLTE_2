<?php  
	include '../../config/koneksi.php';
	
	$id = $_POST['id'];
	$namaDosen = htmlspecialchars($_POST['nama_dosen']);
	$alamat = htmlspecialchars($_POST['alamat']);
	$noTelp = htmlspecialchars($_POST['no_telp']);
	$email = htmlspecialchars($_POST['email']);

	$sql = "UPDATE tb_dosen SET nama_dosen = '$namaDosen', alamat = '$alamat', no_telepon = '$noTelp', email = '$email' 
	WHERE id_dosen = '$id'";
	mysqli_query($koneksi, $sql);
	header('Location: ../index.php?page=data_dosen');

?>