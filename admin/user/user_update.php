<?php
include ('crudUser.php');

$id_user = $_GET['id_user'];
$data = cariUser($id_user);
?>
<div id ='content' >
<form method="post" action="proses_update.php">
<h1> Form Update Data  User</h1>
<input type='hidden' name='id_user' value='<?php echo $data['id_user'];?>' /> 
<table border = '1' align ='center'>

<tr>
	<td>USERNAME</td>
	<td><input type="text" name="username" maxlength="20" value='<?php echo $data['username']; ?>'/></td>
</tr>
<tr>
	<td>PASSWORD</td>
	<td><input type="password" name="password" maxlength="20" value='<?php echo $data['password']; ?>'/></td>
</tr>

<tr>
	<td>LEVEL</td>
	<td>
	<select name="level" required>
		<option value="">Select</option>
		<option value="1">1</option>
		<option value="2">2</option>
		<option value="2">3</option>
		<option value="2">4</option>
	</select>
	</td>
</tr>


<tr><td  colspan ='3' align ='center'>
	<input type="submit" name ='update' value="Update">
	<input type="reset" name ='reset' value="reset">
	<input type='button' onclick='history.back()' value='Kembali'/>
	</td>
</tr>
	
</table>
</form>
</div>

<?php
	include('footer.php');
?>