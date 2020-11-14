<?php
    date_default_timezone_set("Asia/Jakarta");
    // https://www.w3schools.com/PHP/php_ref_timezones.asp
    $t = date('H');
    
    if($t < "10") {
        echo "Selamat Pagi";
    } else if($t < "20") {
        echo "Selamat Sore";
    } else {
        echo "Selamat Malam";
    }

    echo "<br>";

    $favcolor = "blue";

    switch($favcolor) {
        case "red" :
            echo "Your favorite color is Red";
        break;
        case "green" :
            echo "Your favorite color is Green";
        break;
        case "blue" :
            echo "Your favorite color is Blue";
        break;
        default :
            echo "Your favorite color is neither red, green, or blue";
    }
?>