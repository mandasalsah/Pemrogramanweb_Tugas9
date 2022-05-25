<?php

$servername="localhost";
$username="root";
$password="";
$dbname = "kontakdb";

// Membuat Koneksi
$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Koneksi gagal dibangun dan Database tidak dapat dibuka");


if(isset($_POST ["submit"])) {
    $nama   = $_POST["nama"];
    $jkel   = $_POST["jkel"];
    $email  = $_POST["email"];
    $alamat = $_POST["alamat"];
    $kota   = $_POST["kota"];
    $pesan  = $_POST["pesan"];

    $sql    = "INSERT kontak SET nama='$nama',jkel='$jkel', email='$email', alamat='$alamat', kota='$kota', pesan='$pesan'";

    $submit = mysqli_query($conn,$sql);
    header("Location : kontak.html");
}
?>