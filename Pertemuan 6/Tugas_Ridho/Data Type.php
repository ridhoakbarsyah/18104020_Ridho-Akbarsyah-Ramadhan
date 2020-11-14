 <?php
class Car { /*Untuk mebuat class dengan nama Car*/
  public $color; /*Untuk warna dari mobil yang akan dipanggil*/
  public $model; /*Untuk model dari mobil yang akan dipanggil*/
  public function __construct($color, $model) { /*Function dari color dan model*/
    $this->color = $color; /*Warna*/
    $this->model = $model; /*Model*/
  }
  public function message() { /*Memberikan pesan*/
    return "My car is a " . $this->color . " " . $this->model . "!"; /*Menampilkan output My car beserta warna dan model*/
  }
}

$myCar = new Car("black", "Volvo"); /*Menampilkan output Car yang telah diiputkan*/
echo $myCar -> message(); /*Menampilkan output*/
echo "<br>"; /*Memberikan spasi*/
$myCar = new Car("red", "Toyota"); /*Menampilkan output Car yang telah diiputkan*/
echo $myCar -> message();  /*Menampilkan output*/
?> 