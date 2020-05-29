<?php
include "koneksi.php";
$id=$_GET['id'];
$jud=mysqli_query($mysqli, "Select * from buku where id='$id'");
$judul=mysqli_fetch_array($jud);
$query = "INSERT INTO rak (username, judul) VALUES ('$_SESSION[username]', '$judul[judul]')";
$kat = "Select * from rak where judul='$judul[judul]'";
$querykat = mysqli_query($mysqli, $kat);
$jumlah=0;
while($rak=mysqli_fetch_array($querykat)){
	if($_SESSION['username']==$rak['username']){
		$jumlah++;
	}
}
	if($jumlah>0){
		echo"<script>alert('Anda sudah menambahkan buku ini ke rak');window.location.href='index.php?module=detail&pos&id=$id;';</script>";
	}
	
	else{
		mysqli_query($mysqli, $query);
		echo"<script>alert('Buku berhasil ditambah ke rak');window.location.href='index.php?module=detail&pos&id=$id;';</script>";
	}
mysqli_close($mysqli);
?>