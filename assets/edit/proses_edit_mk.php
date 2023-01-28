<?php  
	include '../../config/koneksi.php';
	
	$id = $_POST['id'];
	$namaMatkul = htmlspecialchars($_POST['nama_mk']);
	$matkulSemester = htmlspecialchars($_POST['matkul_semester']);
	$namaDosenMatkul = htmlspecialchars($_POST['nama_dosen_matkul']);

	$sql = "UPDATE tb_mk SET nama_matakuliah = '$namaMatkul', semester = '$matkulSemester', nama_dosen = '$namaDosenMatkul' 
	WHERE id_mk = '$id'";
	mysqli_query($koneksi, $sql);
	header('Location: ../index.php?page=data_mk');

?>