<?php  
	include '../../config/koneksi.php';

	$namaMatkul = htmlspecialchars($_POST['nama_mk']);
	$matkulSemester = htmlspecialchars($_POST['matkul_semester']);
	$namaDosenMatkul = htmlspecialchars($_POST['nama_dosen_matkul']);

	$sql = "INSERT INTO tb_mk VALUES ('', '$namaMatkul', '$matkulSemester', '$namaDosenMatkul')";
	$query = mysqli_query($koneksi, $sql);	
	header('Location: ../index.php?page=data_mk');

	return $query;

?>