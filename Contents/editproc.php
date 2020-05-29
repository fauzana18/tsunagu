<?php
include"koneksi.php";
$id=$_POST['id'];
$edit="update register set namadep='$_POST[namadep]', namabel='$_POST[namabel]', username='$_POST[username]', password='$_POST[password]',
usia='$_POST[usia]', jk='$_POST[jk]', ttl='$_POST[ttl]', email='$_POST[email]', notel='$_POST[notel]' where id='$id'";
$hasil=mysqli_query($mysqli, $edit);

if($hasil){
	echo"<script>alert('Data berhasil diedit');window.location.href='../index.php?module=profil#pos';</script>";
}?>