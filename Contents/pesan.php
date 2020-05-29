<?php
    include"koneksi.php";
    $username = $_SESSION['username'];
    $select="Select * from pesanbantu"; 
    $hasil=mysqli_query($mysqli, $select);
	$no=1;
?>
        <h2>LIHAT PESAN</h2><br />
        <table width="800" border="1">
            <tr style="text-align:center;">
				<td width="5">ID</td>
                <td width="100">Pengirim</td>
				<td width="395">Pesan</td>
				<td width="150px">Aksi</td>
            </tr>
		</table>
<?php
while($buff=mysqli_fetch_array($hasil)){
?>
        <table width="800" border="1">    
			<tr>
				<td width="19"><?php echo $no;?></td>
                <td width="100"><?php echo $buff['username'];?></td>
                <td width="395"><?php echo $buff['pesan'];?></td>
				<td width="150px"><a href="Contents/hapuspesan.php?id=<?php echo $buff['id'];?>">Hapus</a></td>
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