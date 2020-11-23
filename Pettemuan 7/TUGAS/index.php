<?php
// mengambil file koneksi.php agar saling terhubung
    include "koneksi.php";
    $kelas = ['SE-02-A', 'SE-02-B', 'SE-02-C'];
    $sql = "SELECT * FROm data";
    $data = $conn->query($sql);
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--memnaggil bootstrap ekseternal harus menggunakan internet-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>CRUD PHP</title> <!-- sebagai tittle -->
  </head>
  <body>
   

    <div class="container">
        <h1 class="text-center mt-5 mb-5">Form Mahasiswa</h1> <!-- sebagai judul-->
        <div class="row"> <!-- membuat baris kiri-->
            <div class="col-lg-6 mb-5">
                <h4>Input Data</h4> <!-- membuat judul-->
                <form action="simpan.php" method="post"> <!-- membuat form yg terkoneksi ke simpan.php-->
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" placeholder="Nama" class="form-control" required> <!-- form untuk nama-->
                    </div>
                    <div class="form-group">
                        <label for="kelas">Kelas</label>
                        <select name="kelas" class="form-control" required><!-- form untuk kelas-->
                            <option value="">Pilih</option>
                            <!-- fpengambilan data drop down dari php koneksi.php-->
                            <?php foreach($kelas as $kl) : ?>
                            <option value="<?= $kl; ?>"><?= $kl; ?></option>     
                            <?php endforeach; ?>                       
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" name="alamat" placeholder="Alamat" class="form-control" required> <!-- form untuk alamat-->
                    </div>
                    

                    <button type="submit" class="btn btn-primary btn-block">Submit</button> <!-- button untuk submits-->
                </form>
            </div>
            <!-- membuat baris kanan-->
            <div class="col-lg-6">
                <h4 class="d-flex justify-content-between align-items-center mb-3">
                    <span class="text-muted">Data Mahasiswa</span>
                    <?php

                    //TAMBAHAN AGAR DATA TERHITUNG
                    $con=mysqli_connect("localhost","root","","php_crud");
                    // Check connection
                        if (mysqli_connect_errno())
                        {
                        echo "Failed to connect to MySQL: " . mysqli_connect_error();
                        }

                        $sql="SELECT nama,kelas FROM data ORDER BY nama";

                        if ($result=mysqli_query($con,$sql))
                        {
                        // Return the number of rows in result set
                        $rowcount=mysqli_num_rows($result);
                        printf("Total mahasiswa %d \n",$rowcount);
                        // Free result set
                        mysqli_free_result($result);
                        }

                        mysqli_close($con);
                        ?>
                    
                </h4>
                        <!-- menampilkan data yang terdapat di database-->
                <?php foreach($data as $dt) : ?> 
                    <!-- membuat card sekaian mengatur untuk nama-->
                <div class="card mb-2">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">

                            <h4><?= $dt['nama']; ?></h4>
                    </div>
                    <!-- tempat menampilkan kelas-->
                    <div class="col-md-6">
                    <p class="text-right"><?= $dt['kelas'];?></p>
                            </div>
                        </div>
                        <!-- untuk alamat-->
                        <div class="row">
                            <div class="col-md-12">
                            <div><?= $dt['alamat']; ?></div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>               
                
               
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>


  </body>
</html>