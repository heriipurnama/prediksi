<?php
if(array_key_exists('hapus', $_GET))
$hapus = $_GET['hapus'];
else
$hapus = 1;

include('crudWali.php');
$sql="select * from wali order by id_wali desc";
$data = bacaWali($sql);
?>

<div id='content' >
  <h2 align = 'center'>Daftar Wali</h2>
  <?php
    if($hapus ==0)
      echo "<span style ='color :red'>gagal hapus data hotel</span>";
      
  ?>
  <table border="1" align ='center'>
    <tr>
      <th>Id Wali</th>
      <th>Nama DoseN Wali</th>
      <th colspan='2'>Proses</th>
    </tr>
	
    <?php
    foreach($data as $wali){
    $id_wali 		= $wali['id_wali'];
    $nama_wali		= $wali['nama_wali'];
    
    echo "
		<tr>
		  <td>$id_wali</td>
		  <td>$nama_wali</td>
		  
		  <td><a href='wali_update.php?id_wali=$id_wali' class='update'>update</a></td>
		  <td><a href='wali_hapus.php?id_wali=$id_wali' class='hapus' onClick='return confirm(\"Yakin Akan Menghapus $nama_wali ? \")'>Hapus</a></td>
		  
		</tr>
    ";
    }
    ?>
  </table>
</div>