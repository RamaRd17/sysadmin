<?php

include('koneksi.php');

$nama = $_POST['nama'];
$swdkllj = $_POST['swdkllj'];
$administrasi = $_POST['administrasi'];
$denda = $_POST['denda'];
$pajak = $_POST['pajak'];

$sql = "UPDATE pajak SET nama='$nama', swdkllj='$swdkllj', administrasi='$administrasi', denda='$denda', pajak='$pajak' WHERE id='".$_GET['id']."'";
$result = mysqli_query($conn,$sql);


?>