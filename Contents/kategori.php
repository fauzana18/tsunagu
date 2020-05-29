<?php
    include"koneksi.php";
	$id=$_GET['id'];
	$selkat="Select * from kategori where id = '$id'";
	$jumlah=0;
	$reskat=mysqli_query($mysqli, $selkat);
	$bkat=mysqli_fetch_array($reskat);
	$select="Select * from buku where kategori = '$bkat[kategori]' order by judul asc";
	$result=mysqli_query($mysqli, $select);
?>

<h2 class="text-uppercase">KATEGORI BUKU "<?php echo $bkat['kategori'];?>"</h2>

<?php while($buff=mysqli_fetch_array($result)){ ?>
<div align="center" class="card" style="width: 12rem; display:inline-block; margin:5px">
  <img class="card-img-top" src="Books/Thumbnails/<?php echo $buff['gambar']; ?>" alt="Card image cap" style="height:200px;">
  <div class="card-body">
    <h5 class="card-title"><?php echo $buff['judul'];?></h5>
    <p class="card-text"><?php echo $buff['kategori'];?></p>
    <a href="#" class="btn btn-primary">Detail</a>
  </div>
</div>
<?php 
$jumlah++; 
};
mysqli_query($mysqli, "update kategori set jumlah = '$jumlah' where id='$id'");
mysqli_close($mysqli);
?>

