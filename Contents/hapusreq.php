<?php
include"koneksi.php";
$id=$_GET['id'];
$hapus="delete from request where id='$id'";
$hasil=mysqli_query($mysqli, $hapus);
if($hasil){
	echo"<script>alert('Request telah terpenuhi');window.location.href='../index.php?module=list#pos';</script>";
}?>