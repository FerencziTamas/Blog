<?php

$conn = new mysqli("localhost", "blog", "blog", "blog", "3306");

if($conn->errno){
    die("Adatbázishoz való csatlakozási hiba!");
}

if(!$conn->set_charset("utf8")){
    echo("Karakterkódolás beállítása sikertelen!");
}
