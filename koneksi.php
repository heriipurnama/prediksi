<?php
function koneksi(){
	$servername = "localhost";
	$username = "root";
	$password = "root";
	$db = "kelulusan";

	// menciptakan koneksi
	$koneksi = mysqli_connect($servername, $username, $password, $db);
    //global $koneksi;
	// Cek koneksi
	if (!$koneksi) {
		die("Koneksi gagal: " . mysqli_connect_error());
	}
	else{
		//echo "ok";
	}
	return $koneksi;
}

?>
