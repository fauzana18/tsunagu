<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
$id=$_GET['id'];
include"koneksi.php";
$select="Select * from register where id='$id'";
$hasil=mysqli_query($mysqli, $select);
while($buff=mysqli_fetch_array($hasil)){
?>
<h2>Edit Data</h2><br />
<form action="Contents/editproc.php" method="post">
<table width="487" border="0">
<input type="hidden" name="id" value="<?php echo $buff['id'];?>" />
	<tr>
		<td width="150">nama depan</td>
		<td width="327"><input type="text" name="namadep" value="<?php echo $buff['namadep'];?>" /></td>
	</tr>
	<tr>
		<td width="150">nama belakang</td>
		<td width="327"><input type="text" name="namabel" value="<?php echo $buff['namabel'];?>" /></td>
	</tr>
	<tr>
		<td width="150">username</td>
		<td width="327"><input type="text" name="username" value="<?php echo $buff['username'];?>" /></td>
	</tr>
	<tr>
		<td width="150">password</td>
		<td width="327"><input type="password" name="password" value="<?php echo $buff['password'];?>" /></td>
	</tr>
	<tr>
		<td width="150">usia</td>
		<td width="327"><input type="text" name="usia" value="<?php echo $buff['usia'];?>" /></td>
	</tr>
	<tr>
		<td width="150">jenis kelamin</td>
		<td width="327"><input type="text" name="jk" value="<?php echo $buff['jk'];?>" /></td>
	</tr>
	<tr>
		<td width="150">tempat tanggal lahir</td>
		<td width="327"><input type="text" name="ttl" value="<?php echo $buff['ttl'];?>" /></td>
	</tr>
	<tr>
		<td width="150">email</td>
		<td width="327"><input type="text" name="email" value="<?php echo $buff['email'];?>" /></td>
	</tr>
	<tr>
		<td width="150">no telp</td>
		<td width="327"><input type="text" name="notel" value="<?php echo $buff['notel'];?>" /></td>
	</tr>
	<tr>
		<td height="68" align="right"><input type="reset" value="Reset" /></td>
		<td><input type="submit" value="Submit" /></td>
	</tr>
</table>
</form>
<?php
};
mysqli_close($mysqli);
?>
<a href="index.php?module=profil#pos"><---- Kembali ke Profil</a>
</body>
</html>