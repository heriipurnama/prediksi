<?php
require_once '../../koneksi.php';

// jika berhasil, hasil array dr baris-baris data
// dan setiap baris data berupa array dari nama-nama field
// jika tidak ada, hasil berupa nilai null

function bacaMahasiswa($sql){
  $data = array();
  $koneksi = koneksi();
  $hasil = mysqli_query($koneksi, $sql);
  // jika tidak ada record, hasil berupa null
  if (mysqli_num_rows($hasil) == 0) {
	mysqli_close($koneksi);
	return null;  
  }
  $i=0;
  while($baris = mysqli_fetch_assoc($hasil)){
	$data[$i]['nim']= $baris['nim'];
	$data[$i]['id_wali']= $baris['id_wali'];
	$data[$i]['nama_wali']= $baris['nama_wali'];
	$data[$i]['nama_mhs'] = $baris['nama_mhs'];
	$data[$i]['th_masuk'] = $baris['th_masuk'];
	$data[$i]['status'] = $baris['status'];

	$i++;
  }
  mysqli_close($koneksi);
  return $data;
}


// menambahkan data ke tabel mahasiswa

function tambahMahasiswa($nim, $id_wali, $nama_mhs, $th_masuk, $status){
  $koneksi = koneksi();
  $sql = "insert into mahasiswa values('$nim', '$id_wali', '$nama_mhs', '$th_masuk', '$status')";
  $hasil = 0;
  if(mysqli_query($koneksi, $sql))
    $hasil = 1;
  mysqli_close($koneksi);
  return $hasil;
}


// menghapus 1 record berdasar field kunci nim
function hapusMahasiswa($nim){
  $koneksi = koneksi();
  $sql = "delete from mahasiswa where nim='$nim'";
  if (!mysqli_query($koneksi, $sql)){ 
    return 0;
	//die('Error: ' . mysqli_error($koneksi));
  }
  //$hasil = mysqli_affected_rows($koneksi);
  mysqli_close($koneksi);
  return 1; 	
}

// mencari data berdasar nim
// jika ada, hasil array dengan indeks berupa nama field
// jika tidak ada hasil berupa nilai null

function cariMahasiswa($nim){
  $koneksi = koneksi();
  $sql = "select * from mahasiswa where nim='$nim'";
  $hasil = mysqli_query($koneksi, $sql);
  if(mysqli_num_rows($hasil)>0){
      
	$data[$i]['nim']= $baris['nim'];
	$data[$i]['id_wali'] = $baris['id_wali'];
	$data[$i]['nama_wali'] = $baris['nama_wali'];
	$data[$i]['nama_mhs'] = $baris['nama_mhs'];
	$data[$i]['th_masuk'] = $baris['th_masuk'];
	$data[$i]['status'] = $baris['status'];
   
	mysqli_close($koneksi);
	  return $data;
	}		
  else {
  echo "tidak ada data";
	}
}

// mengubah (update) record berdasar id user
// dimasukkan dalam parameter fungsi
function ubahMahasiswa($nim, $id_wali, $nama_mhs, $th_masuk, $status){
  $koneksi = koneksi();
  $sql = "UPDATE mahasiswa
			SET id_wali 	='$id_wali',
			nama_mhs 		= '$nama_mhs' , 
			th_masuk		= '$th_masuk' ,
			status			= 'status'
			WHERE nim	='$nim'";

  if (mysqli_query($koneksi, $sql)) {
    $hasil = true;
  } else {
    $hasil = "Error mengubah record: " . mysqli_error($koneksi);
  }
  mysqli_close($koneksi);
  return $hasil;
}

?>