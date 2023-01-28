<?php  
	session_start();

	include 'koneksi.php';

	$username = $_POST['username'];
	$password = $_POST['password'];

	$sql = "SELECT * FROM tb_users WHERE username = '$username' AND password = '$password'";
	$query = mysqli_query($koneksi, $sql);

	if (mysqli_num_rows($query) == 1) {
		header('Location: ../assets');
		$user = mysqli_fetch_assoc($query);

		$_SESSION['nama'] = $user['nama'];
		$_SESSION['level'] = $user['level'];
	} 
	else if ($username == '' || $password == '') {
		header('Location: ../index.php?error=2');
	} 

	else {
		header('Location: ../index.php?error=1');
	}




?>