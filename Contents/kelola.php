<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<h2>DAFTAR USER</h2><br />

<?php
include"koneksi.php";
$select="select * from register";
$hasil=mysqli_query($mysqli, $select);
$no=1;
?>
<table width="800px" border="1">
	<tr style="text-align:center;">
		<td width="5px">ID</td>
		<td width="100px">Nama Depan</td>
		<td width="150px">Nama Belakang</td>
		<td width="100px">Username</td>
		<td width="150px">Aksi</td>
	</tr>
</table>

<?php
while($buff=mysqli_fetch_array($hasil)){
	if($buff['stat']!="1"){
?>

<table width="800px" border="1">
	<tr>
		<td width="20px"><?php echo $no;?></td>
		<td width="100px"><?php echo $buff['namadep'];?></td>
		<td width="150px"><?php echo $buff['namabel'];?></td>
		<td width="100px"><?php echo $buff['username'];?></td>
		<td width="75px"><a href="Contents/ubah.php?id=<?php echo $buff['id'];?>">Ubah Status</a></td>
		<td width="75px"><a href="Contents/hapus.php?id=<?php echo $buff['id'];?>">Hapus</a></td>
	</tr>
</table>
<?php
$no++;
}};
mysqli_close($mysqli);
?><br />
</body>
</html>