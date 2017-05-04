<?php
    $file = "img/42.png";
    header("Content-Type: image/png");
    readfile($file);
?>