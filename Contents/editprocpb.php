<?php
include"koneksi.php";
$file = $_FILES['img']['name'];
$tmp_file = $_FILES['img']['tmp_name'];
$path = "../Books/Thumbnails/".$file;
move_uploaded_file($tmp_file, $path);
$id=$_POST['id'];
$edit="update buku set gambar='".$file."' where id='$id'";
$hasil=mysqli_query($mysqli, $edit);

if($hasil){
	echo"<script>alert('Gambar buku berhasil diedit');window.location.href='../index.php?module=detail&pos&id=$id';</script>";
}?>