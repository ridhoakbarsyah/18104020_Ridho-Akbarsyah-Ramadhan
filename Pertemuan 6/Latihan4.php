<?php
    // For
    for($i = 0; $i < 10; $i++) {
        echo $i." ";
    }
    echo "<br>";
    // While
    $no = 1;
    while($no < 10) {
        echo $no." ";
        
        $no++;
    }
    echo "<br>";
    // Do While
    $j = 1;
    do {
        echo $j." ";
        
        $j++;
    } while($j <= 20);
    echo "<br>";
    // foreach
    $data = [
        "Bagus" => 45,
        "Ananda" => 80,
        "Ajeng" => 70
    ];

    foreach($data as $x => $val) {
        echo "$x => $val"."<br>";
    }

?>