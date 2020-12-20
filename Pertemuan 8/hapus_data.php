<?php
    include "koneksi.php";
    include "create_message.php";
// untuk menghapus data didalam form mahasiswa
    $sql = "DELETE from data where id=".$_GET['mahasiswa_id'];
    if ($conn->query($sql) === TRUE) {
        $conn->close();
        create_message('Hapus data berhasil','success','check');
        header("location:index.php");
        exit();
// untuk mengetahui apakah data itu error apa engga
    } else {
        $conn->close();
        create_message("Error: " . $sql . "<br>" . $conn->error,"danger","warning");
        header("location:index.php");
        exit();
    }
?>