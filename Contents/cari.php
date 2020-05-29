<h2>Hasil Pencarian</h2><br />

<?php
$nama=$_POST['judul'];
$select="select * from buku where judul like '%$nama%' order by judul asc";
include"koneksi.php";
$result=mysqli_query($mysqli, $select);
?>

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