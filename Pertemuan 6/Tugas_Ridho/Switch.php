 <?php
$favcolor = "red"; /*membuat variabel favoite warna merah */

switch ($favcolor) {  /*membuat program switch pada favorite warna */
  case "red": /*case warna merah */
    echo "Your favorite color is red!"; /*output your favorite color is red! */
    break; /*untuk memberhentikan sementara program */
  case "blue": /*case warna biru */
    echo "Your favorite color is blue!"; /*output your favorite color is blue! */
    break; /*untuk memberhentikan sementara program */
  case "green": /*case warna hijau */
    echo "Your favorite color is green!";  /*output your favorite color is green! */
    break; /*untuk memberhentikan sementara program */
  default:
    echo "Your favorite color is neither red, blue, nor green!";  /*output your favorite color is blu or greene! */
}
?> 