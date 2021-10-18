<?php
include("koneksi.php");

$nim = $_POST ['txtnim'];
$nama = $_POST['txtnama'];
$semester = $_POST['txtsemester'];
$fakultas = $_POST['txtfakultas'];
$jurusan = $_POST['txtjurusan'];

$query="update mahasiswa set nama='$nama', semester='$semester',
fakultas='$fakultas', jurusan='$jurusan' where nim='$nim'";
$hasil= mysqli_query($conn, $query);

header ("location:index.php");
?>