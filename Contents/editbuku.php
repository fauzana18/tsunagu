<?php
include "Contents/koneksi.php";
$id=$_GET['id'];
$select="Select * from buku where id='$id'";
$hasil=mysqli_query($mysqli, $select);
$selkat="Select * from kategori";
$reskat=mysqli_query($mysqli, $selkat);
while($buff=mysqli_fetch_array($hasil)){
?>
<h2>EDIT DATA BUKU</h2>
<div style="width:700;">
	<form action="Contents/editdatabuku.php" method="post">
	<input type="hidden" name="id" value="<?php echo $buff['id'];?>" />
	<div class="form-group">
		<input type="text" width="100" class="form-control" name="judul" placeholder="Judul Buku" value="<?php echo $buff['judul'];?>">
	</div>
	
	<div class="form-group">
		<input type="text" width="100" class="form-control" name="penulis" placeholder="Nama Penulis" value="<?php echo $buff['penulis'];?>">
	</div>
	
	<div class="form-group">
      <label for="sel1">Kategori:</label>
      <select class="form-control" name="kategori">
		<?php
		while($kat=mysqli_fetch_array($reskat)){
		?>  
		<option name="kategori"><?php echo $kat['kategori'];?></option>  
		<?php
		};
		?>
      </select>
      <br>
    </div>
	
	<textarea class="form-control" rows="7" cols="70" name="deskripsi" placeholder="Deskripsi Buku"><?php echo $buff['deskripsi'];?></textarea><br/> 
	
	<div class="form-group">
		<input type="text" width="100" class="form-control" name="tahun" placeholder="Tahun Terbit" value="<?php echo $buff['tahun'];?>">
	</div>
	
	<div class="form-group">
		<input type="text" width="100" class="form-control" name="penerbit" placeholder="Nama Penerbit" value="<?php echo $buff['penerbit'];?>">
	</div>
	
	<div align="center">
		<input type="submit" class="btn btn-primary" value="SUBMIT" />
		<a href="?module=detail&pos&id=<?php echo $id;?>" class="btn btn-primary">BACK</a>
	</div>
	</form>
</div>
<?php
};
mysqli_close($mysqli);
?>