<?php
include"koneksi.php";
$id=$_POST['id'];
$edit="update buku set judul='$_POST[judul]', penulis='$_POST[penulis]', deskripsi='$_POST[deskripsi]', kategori='$_POST[kategori]',
tahun='$_POST[tahun]', penerbit='$_POST[penerbit]' where id='$id'";
$hasil=mysqli_query($mysqli, $edit);

if($hasil){
	echo"<script>alert('Data berhasil diedit');window.location.href='../index.php?module=detail&pos&id=$id';</script>";
}?>