<?php
if(array_key_exists('hapus', $_GET))
$hapus = $_GET['hapus'];
else
$hapus = 1;

include('crudUser.php');
$sql="select * from user order by id_user desc";
$data = bacaUser($sql);
?>

<div id='content' >
  <h2 align = 'center'>Daftar User</h2>
  <?php
    if($hapus ==0)
      echo "<span style ='color :red'>gagal hapus data hotel</span>";
      
  ?>
  <table border="1" align ='center'>
    <tr>
      <th>Id user</th>
      <th>Username</th>
      <th>Password</th>
	  <th>Level</th>
      <th colspan='2'>Proses</th>
    </tr>
	
    <?php
    foreach($data as $user){
    $id_user 		= $user['id_user'];
    $username		= $user['username'];
    $password		= $user['password'];
	$level			= $user['level'];
	
    echo "
		<tr>
		  <td>$id_user</td>
		  <td>$username</td>
		  <td>$password</td>
		  <td>$level</td>
		  
		  <td><a href='user_update.php?id_user=$id_user' class='update'>update</a></td>
		  <td><a href='user_hapus.php?id_user=$id_user' class='hapus' onClick='return confirm(\"Yakin Akan Menghapus $username ? \")'>Hapus</a></td>
		  
		</tr>
    ";
    }
    ?>
  </table>
</div>