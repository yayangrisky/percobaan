<?php
include ("koneksi.php");

$nim = $_POST['nim'];
$nama = $_POST['nama'];
$semester = $_POST['semester'];
$fakultas = $_POST['fakultas'];
$jurusan = $_POST['jurusan'];

mysqli_query($conn,"insert into mahasiswa values ('$nim','$nama','$semester','$fakultas','$jurusan')");

header("location:form_tambah.php");
?>