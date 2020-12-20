<?php
//untuk membuat pesan kedalam form dan menampilkan pesan tersebut //
    function create_message($text,$type,$icon){
        session_start();
        $_SESSION["message"]['text'] = $text;
        $_SESSION["message"]['type'] = $type;
        $_SESSION["message"]['icon'] = $icon;
        $_SESSION["message"]['show'] = "show";
    }
?>