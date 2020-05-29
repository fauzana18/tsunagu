<?php
include "koneksi.php";
session_start();
if(isset($_SESSION['username'])){
	$sender = $_SESSION['username'];
}

else{
	$sender = "Non-user";
}

$query = "INSERT INTO pesanbantu (pesan, username) VALUES ('$_POST[pesan]', '$sender')";

mysqli_query($mysqli, $query);

echo"<script>alert('Pesan telah terkirim');window.location.href='../index.php?module=bantuan#pos';</script>";

mysqli_close($mysqli);
?>