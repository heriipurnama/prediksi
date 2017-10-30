<?php
include('crudWali.php');
$id_wali 	= $_POST['id_wali'];
$nama_wali 	= $_POST['nama_wali'];

$hasil = tambahWali('1', 'love');
print_r($hasil);
if($hasil > 0)
	header("Location: wali_tampil.php");
else {
	echo 'gagal tambah data';
}
?>