<?php
include"koneksi.php";
$id=$_GET['id'];
$hapus="delete from buku where id='$id'";
$hasil=mysqli_query($mysqli, $hapus);
if($hasil){
	echo"<script>alert('Buku berhasil dihapus');window.location.href='index.php';</script>";
}?>