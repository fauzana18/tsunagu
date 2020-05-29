<?php
include "koneksi.php";
session_start();

$file = $_FILES['gambar']['name'];
$tmp_file = $_FILES['gambar']['tmp_name'];
$path = "../Books/Thumbnails/".$file;
move_uploaded_file($tmp_file, $path);

$book = $_FILES['file']['name'];
$tmp_book = $_FILES['file']['tmp_name'];
$path1 = "../Books/".$book;
move_uploaded_file($tmp_book, $path1);

$query = "INSERT INTO buku
(judul, penulis, deskripsi, kategori, tahun, penerbit, file, gambar) VALUES
('$_POST[judul]', '$_POST[penulis]', '$_POST[deskripsi]', '$_POST[kategori]', '$_POST[tahun]', '$_POST[penerbit]', '".$book."', '".$file."')";

if(isset($_POST['judul'])&&($_POST['penulis'])){
		mysqli_query($mysqli, $query);

		echo"<script>alert('Selamat, buku telah ditambahkan');window.location.href='../index.php';</script>";
}

else{
	echo"<script>alert('Data tidak boleh kosong!');window.location.href='../index.php?module=tambah#pos';</script>";
}


mysqli_close($mysqli);
?>