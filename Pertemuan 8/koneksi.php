<?php
/*untuk mengkoneksi ke database*/
    $host = "Localhost"; // nama host yang terdapat pada localhost
    $user = "root"; // nama user localhost
    $pass = ""; // password dari localhost
    $dbname = "php_crud"; // nama dari tampilan web 

    $conn = new mysqli($host,$user,$pass,$dbname);
    
/*jika koneksi gagal maka terjadi error*/
    if($conn->connect_error){
        die('koneksi gagal : '. $conn->connect_error);
    }
?>