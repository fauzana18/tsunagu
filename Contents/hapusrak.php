<?php
include"koneksi.php";
$id=$_GET['id'];
$hapus="delete from rak where id='$id'";
$hasil=mysqli_query($mysqli, $hapus);
if($hasil){
	echo"<script>alert('Buku telah dihapus dari rak anda');window.location.href='../index.php?module=rak#pos';</script>";
}?>