<?php
include "koneksi.php";
session_start();

$query = "INSERT INTO request
(judul, penulis, kategori, username) VALUES
('$_POST[judul]', '$_POST[penulis]', '$_POST[kategori]', '$_SESSION[username]')";

mysqli_query($mysqli, $query);
echo"<script>alert('Request telah diajukan');window.location.href='../index.php';</script>";
mysqli_close($mysqli);
?>