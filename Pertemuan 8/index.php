<?php
include "koneksi.php"; //Untuk mengkoneksikan koneksi.php agar saling terhubung //
session_start();
$kelas = ['SE-02-A', 'SE-02-B','SE-02-C'];
$sql = "SELECT * FROM data";
$data = $conn->query($sql);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--memanggil bootstrap ekseternal harus menggunakan internet-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <title>CRUD PHP 2</title> <!--title -->
</head>
<body>

    <div class="container">
        <h1 class="text-center mt-5 mb-5">Form Mahasiswa</h1> <!-- Judul Form -->
        <div class="row">
            <div class="col-lg-6 mb-5">
                <h4>Input Data</h4>
                <?php include "read_message.php" ?> <!-- digunakan untuk membaca pesan dari PHP -->
            </div> 
            <form action="simpan.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="nama">Nama</label> // berikut adalah label Nama //
                    <input type="text" name="nama" placeholder="Nama" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="kelas">Kelas</label> // berikut adalah label Kelas //
                    <select name="kelas" class="form-control" required>
                        <option value="">Pilih</option>
                        <?php foreach($kelas as $kl) : ?>
                            <option value="<?= $kl; ?>"><?= $kl; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" name="alamat" placeholder="Alamat" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="gambar">Gambar</label>
                    <input type="file" name="gambar" placeholder="Gambar" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Submit</button>
                <br>
                <br>
                <br>
                <p>Copyright @2020 <b>Ridho Akbarsyah Ramadhan</b></p>
            </form>
        </div>
        <div class="col-lg-6">
            <h4 class="d-flex justify-content-between align-items-center mb-3">
                <span class="text-muted">Data Mahasiswa</span> <!--untuk membuat form data mahasiswa pada kelas-->
                
            </h4>

            <!-- menampilkan data yang terdapat di database-->
            <?php foreach($data as $dt) : ?>
                <div class="card mb-2">
                    <div class="card-body">
                        <div class="row">
                            
                            <div class="col-md-6">
                                
                                <h4><?= $dt['nama']; ?></h4>

                            </div>
                            <div class="col-md-6">
                                
                                <a class="float-right ml-3 text-danger" 
                                href="hapus_data.php?mahasiswa_id=<?php echo $dt['id'] ?>" type="button" class="close">
                                <span class="fa fa-trash"></span>
                            </a>
                            <a class="float-right ml-3 text-success" href="update_form.php?mahasiswa_id=<?php echo $dt['id'] ?>" type="button" class="close">
                                <span class="fa fa-edit"></span>
                            </a>
                            <!-- tempat menampilkan kelas-->
                            <p class="text-right"><?= $dt['kelas'] ?></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <p><?= $dt['alamat']; ?></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <img src="<?= $dt['gambar']; ?>" style="width: 100px; height: 100px" />
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?> <!--untuk mengakhiri form input mahasiswa-->
    </div>
</div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>


</body>
</html>