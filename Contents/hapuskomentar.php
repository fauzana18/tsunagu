<?php
include"koneksi.php";
$idk=$_GET['id'];
$select="Select * from forum where id = '$idk'";
$result=mysqli_query($mysqli, $select);
$buff=mysqli_fetch_array($result);
$select1="Select * from buku where judul = '$buff[judul]'";
$result1=mysqli_query($mysqli, $select1);
$buff1=mysqli_fetch_array($result1);
$id=$buff1['id'];
$hapus="delete from forum where id='$idk'";
$hasil=mysqli_query($mysqli, $hapus);
if($hasil){
	echo"<script>alert('Komentar berhasil dihapus');window.location.href='../index.php?module=forum&id=$id';</script>";
}?>