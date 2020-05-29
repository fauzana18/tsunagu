<?php
include "koneksi.php";
session_start();
$query = "update web set tentang='$_POST[tentang]'";

mysqli_query($mysqli, $query);

echo"<script>alert('Deskripsi web telah diubah');window.location.href='../index.php?module=about#pos';</script>";

mysqli_close($mysqli);
?>