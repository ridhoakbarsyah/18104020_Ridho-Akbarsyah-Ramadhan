<?php
/*untuk mengkoneksi kan ke database*/
include "koneksi.php";
include "create_message.php";

$nama = $_POST['nama'];
$kelas = $_POST['kelas'];
$alamat = $_POST['alamat'];
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["gambar"]["name"]);
$error = false;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

if(isset($_POST['mahasiswa_id'])) {
    $sql = "UPDATE data SET nama='$nama', kelas='$kelas', alamat='$alamat', gambar='$target_file' WHERE id=".$_POST['mahasiswa_id'];
    $edit = $conn->query($sql);

    if ($_FILES["gambar"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $error = true; 
    }

//untuk menyimpan file gambar jpeg png dan gif //
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $error = true; 
    }

//jika file gambar error maka tidak bisa terupload //
    if ($error == true) {
        echo "Sorry, your file was not uploaded."; 
    } else {
        if (move_uploaded_file($_FILES["gambar"]["tmp_name"], $target_file)) {
            echo "The file ". basename( $_FILES["gambar"]["name"]). " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file."; 
        } 
    }

//untuk mengedit data pesan di database //
    if($edit) {
        $conn->close();
        create_message('Ubah data berhasil','success','check');
        header("location:".$_SERVER['HTTP_REFERER']);
        exit();
    } else {
        //jika pesan itu error maka data akan error //
        $conn->close();
        create_message("Error: " . $sql . "<br>" . $conn->error,"danger","warning");
        header("location:".$_SERVER['HTTP_REFERER']);
        exit();
    }
} else {

//untuk menginput data nama, kelas, alamat, dan gambar //
    $sql = "INSERT into data(nama, kelas, alamat, gambar) VALUES('$nama','$kelas','$alamat','$target_file')";
    $add = $conn->query($sql);
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $error = true; 
    }

//untuk ukuran gambar jika melebihi ukurannya itu akan error //
    if ($_FILES["gambar"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $error = true; 
    }

// untuk jenis gambar jpg, png, jpeg, dan gif  //
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed."; // Pesan jika gambar yang di upload tidak sesuai ekstensi //
        $error = true; 
    }
//jika bukan jenis file yang diminta maka akan terjadi error //
    if ($error == true) {
        echo "Sorry, your file was not uploaded."; 
    } else {
         //untuk tempat upload gambar //
        if (move_uploaded_file($_FILES["gambar"]["tmp_name"], $target_file)) {
            echo "The file ". basename( $_FILES["gambar"]["name"]). " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file."; 
        } 
    }
//sebagai tempat simpan data berhasil di database //
    if($add) {
        $conn->close();
        create_message('Simpan data berhasil','success','check');
        header("location:".$_SERVER['HTTP_REFERER']);
        exit();
    } else {
        //jika pesan tidak sesuai maka terjadi error //
        $conn->close();
        create_message("Error: " . $sql . "<br>" . $conn->error,"danger","warning");
        header("location:".$_SERVER['HTTP_REFERER']);
        exit();
    }
}

?>