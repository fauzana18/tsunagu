<?php
    include"koneksi.php";
    $id = $_GET['id'];
    $select="Select * from buku where id='$id'";
    $buff=mysqli_fetch_array(mysqli_query($mysqli, $select));
	if(isset($_SESSION['username'])){
		$stat="Select stat from register where username = '$_SESSION[username]'";
		$bstat=mysqli_fetch_array(mysqli_query($mysqli, $stat));
	}  
?>
        <h2>DETAIL BUKU</h2><br />
		<?php if(isset($_SESSION['username'])){
		?>
		<div align="right">
			<a href='?module=tambahrak&id=<?php echo $buff['id'];?>' class="btn btn-danger btn-xs">Tambahkan ke Rak</a>
		</div>
		<?php } ?>
		<?php
		if(isset($_SESSION['username'])&&$bstat['stat']=="1"){
		?>
		<div align="center">
			<a href='?module=editpb&id=<?php echo $buff['id'];?>'><?php echo "<img src='Books/Thumbnails/".$buff['gambar']."' width='200' height='200'>"; ?></a>
		</div>
		<?php } 
		else{
		?>
		<div align="center">
			<?php echo "<img src='Books/Thumbnails/".$buff['gambar']."' width='200' height='200'>"; ?>
		</div>
		<?php } ?>
        <table align="center" width="" border="0">
            <tr>
                <td align="center">Judul Buku: <?php echo $buff['judul'];?></td>
            </tr>
            <tr>
                <td align="center">Nama Penulis: <?php echo $buff['penulis'];?></td>
            </tr>
            <tr>
                <td align="center">Deskripsi: <?php echo $buff['deskripsi'];?></td>
            </tr>
            <tr>
                <td align="center">Kategori: <?php echo $buff['kategori'];?></td>
            </tr>
            <tr>
                <td align="center">Tahun Terbit: <?php echo $buff['tahun'];?></td>
            </tr>
            <tr>
                <td align="center">Nama Penerbit: <?php echo $buff['penerbit'];?></td>
            </tr>
			
			<?php if(isset($_SESSION['username'])&&$bstat['stat']=="1"){?>
			<tr>
				<td align="center">
					<a href='?module=editbuku&id=<?php echo $buff['id'];?>' class="btn btn-danger btn-xs">EDIT</a>
					<a href='?module=hapusbuku&id=<?php echo $buff['id'];?>' class="btn btn-danger btn-xs">HAPUS</a>
				</td>
			</tr>	
			<?php } ?>
        </table>
		
		<div align="center">
			<a href="Books/<?php echo $buff['file'];?>" class="btn btn-primary">BACA</a>
		</div><br />
		
		<div align="center">
			<a href="?module=forum&id=<?php echo $buff['id'];?>" class="btn btn-primary">FORUM</a>
		</div>
		
<?php
    mysqli_close($mysqli);
?>
