<div id='content' >
<h1> Form Input Data User</h1>
<form method="post" action="user_simpan.php">
<table border = '1' align ='center'>

<tr>
<td>USERNAME</td>
<td><input type="text" name="username" maxlength="20" required/></td>
</tr>

<tr>
<td>PASSWORD</td>
<td><input type="password" name="password" maxlength="20" required/></td>
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
	<input type="submit" value="Simpan">
	<input type="reset" value="Reset"></td></tr>
	<input type ="hidden" name="id_user" />
</table>
</form>
</div>

