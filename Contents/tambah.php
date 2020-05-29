<?php
include "Contents/koneksi.php";
$selkat="Select * from kategori";
$reskat=mysqli_query($mysqli, $selkat);
?>
<h2>TAMBAH BUKU</h2>
<div style="width:700;">
	<form action="Contents/tambahbuku.php" enctype="multipart/form-data" method="post">
	<div class="form-group">
		<input type="text" width="100" class="form-control" name="judul" placeholder="Judul Buku">
	</div>
	
	<div class="form-group">
		<input type="text" width="100" class="form-control" name="penulis" placeholder="Nama Penulis">
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
	
	<textarea class="form-control" rows="7" cols="70" name="deskripsi" placeholder="Deskripsi Buku"></textarea><br/> 
	
	<div class="form-group">
		<input type="text" width="100" class="form-control" name="tahun" placeholder="Tahun Terbit">
	</div>
	
	<div class="form-group">
		<input type="text" width="100" class="form-control" name="penerbit" placeholder="Nama Penerbit">
	</div>
	
	<div class="form-group">
		<label for="sel1">Upload Buku</label>
        <input type="file" name="file" />
    </div>
	
	<div class="form-group">
		<label for="sel1">Upload Gambar</label>
        <input type="file" name="gambar" />
    </div>
	
	<div align="center">
		<input type="submit" class="btn btn-primary" value="SUBMIT" />
	</div>
	</form>
</div>