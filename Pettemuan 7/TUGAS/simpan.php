<?php
 include "koneksi.php"; // setelah mengkoneksikan database

 //menargetkan nama di database
 $nama = $_POST['nama'];
 $kelas = $_POST['kelas'];
 $alamat = $_POST['alamat'];

 $sql = "INSERT into data(nama, kelas, alamat) VALUES('$nama','$kelas','$alamat')"; // query untuk insert datanya
 $add = $conn->query($sql);

 if($add){
     $conn->close();
     header("location:index.php"); // dari index.php
     exit();
 }else{
     echo "error : ".$conn->error; // jika error
     $conn->close();
     exit();
 }
?>