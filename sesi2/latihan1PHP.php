<?php

    $pg = $_GET["pg"];

    switch($pg){  
        case 1:
             $konten="<h3>page 1</h3>";
             break;
        case 2:
            $konten="<h3>page 2</h3>";
            break;
        case 3:
            $konten="<h3>page 1</h3>";
            break;





   $judulpage = "latihan 02";
   $konten="<h3>Latihan 02</h3>";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>$judulpage</title>
</head>
<body>
    <?=$konten;?>
</body>
</html>