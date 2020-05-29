<?php
include"koneksi.php";
$file = $_FILES['img']['name'];
$tmp_file = $_FILES['img']['tmp_name'];
$path = "../Images/".$file;
move_uploaded_file($tmp_file, $path);
$id=$_POST['id'];
$edit="update register set pp='".$file."' where id='$id'";
$hasil=mysqli_query($mysqli, $edit);

if($hasil){
	echo"<script>alert('Foto profil berhasil diedit');window.location.href='../index.php?module=profil#pos';</script>";
}?>