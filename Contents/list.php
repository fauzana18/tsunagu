<?php
    include"koneksi.php";
    $username = $_SESSION['username'];
    $select="Select * from request"; 
    $hasil=mysqli_query($mysqli, $select);
	$no=1;
?>
        <h2>LIST REQUEST</h2><br />
        <table width="800" border="1">
            <tr style="text-align:center;">
				<td width="4%">NO</td>
                <td width="10%">Pengirim</td>
				<td width="25%">Judul</td>
				<td width="25%">Penulis</td>
				<td width="25%">Kategori</td>
				<td width="11%">Status</td>
            </tr>
		</table>
<?php
while($buff=mysqli_fetch_array($hasil)){
?>
        <table width="800" border="1">    
			<tr>
				<td width="4%"><?php echo $no;?></td>
                <td width="10%"><?php echo $buff['username'];?></td>
                <td width="25%"><?php echo $buff['judul'];?></td>
				<td width="25%"><?php echo $buff['penulis'];?></td>
				<td width="25%"><?php echo $buff['kategori'];?></td>
				<td width="11%"><a href="Contents/hapusreq.php?id=<?php echo $buff['id'];?>">Selesai</a></td>
            </tr>
		</table>	
		
<?php
$no++;
};
    mysqli_close($mysqli);
?>

<div class="text-center forget">
	<a href="index.php?module=profil#pos" class="btn btn-primary">BACK</a>
</div>