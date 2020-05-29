<?php
include"koneksi.php";
$id=$_GET['id'];
$ubah="update register set stat='1' where id='$id'";
$hasil=mysqli_query($mysqli, $ubah);
if($hasil){
	echo"<script>alert('User telah menjadi admin');window.location.href='../index.php?module=kelola#pos';</script>";
}?>