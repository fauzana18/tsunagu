<?php
include "koneksi.php";

$query = "INSERT INTO register
(namadep, namabel, username, password, usia, jk, ttl, email, notel, stat, pp) VALUES
('$_POST[namadep]', '$_POST[namabel]', '$_POST[username]', '$_POST[password]', '$_POST[usia]',
'$_POST[jk]', '$_POST[ttl]', '$_POST[email]', '$_POST[notel]', '2', 'pp.png')";

mysqli_query($mysqli, $query);

echo"<script>alert('Selamat, anda telah terdaftar');window.location.href='../index.php';</script>";

mysqli_close($mysqli);
?>