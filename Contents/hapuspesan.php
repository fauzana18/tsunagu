<?php
include"koneksi.php";
$id=$_GET['id'];
$hapus="delete from pesanbantu where id='$id'";
$hasil=mysqli_query($mysqli, $hapus);
if($hasil){
	echo"<script>alert('Pesan berhasil dihapus');window.location.href='../index.php?module=pesan#pos';</script>";
}?>