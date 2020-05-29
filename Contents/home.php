<?php 
include"Contents/koneksi.php";
if(isset($_SESSION['username'])){
$username = $_SESSION['username'];
$select="Select * from register where username='$username'";
$buff=mysqli_fetch_array(mysqli_query($mysqli, $select));
}

$selbuk="Select * from buku order by judul asc";
$result=mysqli_query($mysqli, $selbuk);
?>

<h2>KATALOG BUKU</h2>

<div align="center">
<?php
$arr_az = range('A','Z');
foreach($arr_az as $chr) {
?>
  <a href="?module=alfabet&pos&id=<?php echo $chr;?>" class="btn btn-danger btn-xs"><?php echo $chr;?></a>
<?php
}
?>
</div>

<?php
if(isset($_SESSION['username'])){
if($buff['stat']=="1"){
?>
<div align="center" class="card" style="width: 12rem; display:inline-block; margin:5px">
  <img class="card-img-top" src="Books/Thumbnails/buku.jpg" alt="Card image cap" style="height:200px;">
  <div class="card-body">
    <h5 class="card-title">Tambah Buku</h5>
	<p class="card-text">Tambah buku baru</p>
    <a href="?module=tambah#pos" class="btn btn-primary">+</a>
  </div>
</div>
<?php
}}
?>

<?php while($buff1=mysqli_fetch_array($result)){ ?>
<div align="center" class="card" style="width: 12rem; display:inline-block; margin:5px">
  <img class="card-img-top" src="Books/Thumbnails/<?php echo $buff1['gambar']; ?>" alt="Card image cap" style="height:200px;">
  <div class="card-body">
    <h5 class="card-title"><?php echo $buff1['judul'];?></h5>
    <p class="card-text"><?php echo $buff1['kategori'];?></p>
    <a href="?module=detail&pos&id=<?php echo $buff1['id'];?>" class="btn btn-primary">Detail</a>
  </div>
</div>
<?php 
};
mysqli_close($mysqli);
?>