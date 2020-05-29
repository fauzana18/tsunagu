<?php		
include "koneksi.php";
session_start();
$id=$_POST['id'];
$jud=mysqli_query($mysqli, "Select * from buku where id='$id'");
$judul=mysqli_fetch_array($jud);
if(isset($_SESSION['username'])){
	$username=$_SESSION['username'];
	$ambil=mysqli_query($mysqli, "select * from register where username='$username'");
	$comot=mysqli_fetch_array($ambil);
	$ava="Images/$comot[pp]";
}

else{
	$username="Guest";
	$ava="Images/pp.png";
}
$tgl=date('d-m-Y');
$query = "insert into forum (judul, username, komentar, tgl, ava) values 
('$judul[judul]', '$username', '$_POST[komentar]', '$tgl', '$ava')";

$insert = mysqli_query($mysqli, $query);	
if($insert)
	{
		echo"<script>alert('Komentar berhasil ditambah');window.location.href='../index.php?module=forum&id=$id';</script>";
    }
else
	{
	echo "Gagal update ... ";
	}
?>