<?php
$servername="localhost";
$username="root";
$password="";
$dbname = "webalumni";

// Membuat Koneksi
$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Koneksi gagal dibangun dan Database tidak dapat dibuka");

//memindahkan nilai data form ke variabel sederhana agar mudah ditulis
    $nama=$_POST['nama'];
    $address=$_POST['address'];
    $email=$_POST['email'];
    $tahunlulus=$_POST['tahunlulus'];
    $pekerjaan=$_POST['pekerjaan'];
    $message=$_POST['message'];

$tambah = mysqli_query($conn, "INSERT INTO pesanalumni VALUES ('', '', '$nama', '$email', '$address', '$tahunlulus', '$pekerjaan', '$message')")or die("Proses simpan ke database gagal");

header("location:formsignup.php");
?>