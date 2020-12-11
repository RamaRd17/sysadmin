<?php

include('koneksi.php');

if(isset($_POST['nama'])){
    $nama =$_POST['nama'];
    $swdkllj = $_POST['swdkllj'];
    $administrasi = $_POST['administrasi'];
    $denda = $_POST['denda'];
    $pajak = $_POST['pajak'];
    $sql = "INSERT INTO pajak VALUES ('id','$nama','$swdkllj','$administrasi','$denda','$pajak')";
    if(mysqli_query($conn,$sql)){
        echo "Berhasil Memasukan Data";
    }
    else{
        echo "Error Memasukan Data".mysqli_error($conn);
    }
}

?>