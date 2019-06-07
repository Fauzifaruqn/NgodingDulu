<?php

// Varaible Scope
$x = 10;

// variaable x ini tidak masuk kedalam pada scope function
function tampilX(){
    $x = 20;
    echo $x;
}

tampilX();
echo "<br>";
echo $x;

echo "<br>";

// agar variable yang diluar function bisa dipakai dalam scope function makan menggunakan globa
// contoh
$y = 8;

function tampilinY(){
    global $y;
    echo $y;
}
tampilinY();
// ===================================

echo "<br>";

// Macam maca Superglobal
// $_GET 
// $_POST
// $_REQUEST
// $_SESSION
// $_COOKIE
// $_SERVER
// $_ENV
// Semuanya merupakan tipe array assosiative

// Informasi Server Kita
// var_dump($_SERVER);

// echo $_SERVER["SERVER_NAME"];



?>