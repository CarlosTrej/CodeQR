<?php

    require 'phpqrcode/qrlib.php';

    $dir = 'temp/';

    if(!file_exists($dir))
        mkdir($dir);
    $fileName = $dir.'test.png';
    $tamano = $_POST['size'];
    $level = $_POST['ecc'];
    $frameSize = 10;
    $contenido = $_POST['content'];

    QRcode::png($contenido, $fileName, $level, $tamano, $frameSize);

    echo '<img src="'.$fileName.'" />';
?>