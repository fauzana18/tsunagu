<?php
include "Contents/koneksi.php";
$selkat="Select * from kategori";
$reskat=mysqli_query($mysqli, $selkat);
?>
<h2>REQUEST BUKU</h2>
<div style="width:300;">
	<form action="Contents/send.php" method="post">
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
	
	<div align="center">
		<input type="submit" class="btn btn-primary" value="SUBMIT" />
	</div>
	</form>
</div>