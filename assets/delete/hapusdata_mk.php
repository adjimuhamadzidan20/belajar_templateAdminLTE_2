<?php  
	include '../../config/koneksi.php';
	
	$idMk = $_GET['id_mk'];

	$sql = "DELETE FROM tb_mk WHERE id_mk = '$idMk'";
	mysqli_query($koneksi, $sql);
	header('Location: ../index.php?page=data_mk');

?>