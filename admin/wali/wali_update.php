<?php
include ('crudWali.php');

$id_wali = $_GET['id_wali'];
$data = cariWali($id_wali);
?>
<div id ='content' >
<form method="post" action="proses_update.php">
<h1> Form Update Data wali</h1>


<table border = '1' align ='center'>
<tr>
	<td>ID WALI</td>
	<td><input type='text' name='id_wali' value='<?php echo $data['id_wali'];?>' readonly/> </td>
</tr>


<tr>
	<td>NAMA WALI</td>
	<td><input type="text" name="nama_wali" maxlength="20" value='<?php echo $data['nama_wali']; ?>'  required/></td>
</tr>

<tr><td  colspan ='3' align ='center'>
	<input type="submit" name ='update' value="update">
	<input type="reset" name ='reset' value="reset">
	<input type='button' onclick='history.back()' value='Kembali'/>
	</td>
</tr>
	
</table>
</form>
</div>
