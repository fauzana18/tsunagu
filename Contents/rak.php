
<?php
    include"koneksi.php";
    $username = $_SESSION['username'];
    $select="Select * from rak where username='$username'"; 
    $hasil=mysqli_query($mysqli, $select);
	$no=1;
?>
        <h2>BUKU FAVORIT ANDA</h2><br />
        <table width="800" border="1">
            <tr style="text-align:center;">
				<td width="4%">NO</td>
				<td width="25%">Judul</td>
				<td width="25%">Penulis</td>
				<td width="25%">Kategori</td>
				<td width="11%">Aksi</td>
            </tr>
		</table>
<?php
while($buff1=mysqli_fetch_array($hasil)){
	$select1="Select * from buku where judul = '$buff1[judul]'";
	$result=mysqli_query($mysqli, $select1);
while($buff=mysqli_fetch_array($result)){
?>
        <table width="800" border="1">    
			<tr>
				<td width="4%"><?php echo $no;?></td>
                <td width="25%"><?php echo $buff['judul'];?></td>
				<td width="25%"><?php echo $buff['penulis'];?></td>
				<td width="25%"><?php echo $buff['kategori'];?></td>
				<td width="11%"><a href="Contents/hapusrak.php?id=<?php echo $buff1['id'];?>">Hapus</a></td>
            </tr>
		</table>	
		
<?php
$no++;
}};
    mysqli_close($mysqli);
?>

<div class="text-center forget">
	<a href="index.php?module=profil#pos" class="btn btn-primary">BACK</a>
</div>