<?php
$alfa=$_GET['id'];
$select="select * from buku where judul like '$alfa%' order by judul asc";
include"koneksi.php";
$result=mysqli_query($mysqli, $select);
?>

<h2>BUKU DENGAN AWALAN "<?php echo $alfa;?>"</h2><br />

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

<?php while($buff1=mysqli_fetch_array($result)){ ?>
<div align="center" class="card" style="width: 12rem; display:inline-block; margin:5px">
  <img class="card-img-top" src="Books/Thumbnails/<?php echo $buff1['gambar']; ?>" alt="Card image cap" style="height:200px;">
  <div class="card-body">
    <h5 class="card-title"><?php echo $buff1['judul'];?></h5>
    <p class="card-text"><?php echo $buff1['kategori'];?></p>
    <a href="#" class="btn btn-primary">Detail</a>
  </div>
</div>

<?php
}
mysqli_close($mysqli);
?>