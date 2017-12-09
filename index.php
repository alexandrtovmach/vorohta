<?php
    require_once 'config.php';
    $homepage = file_get_contents('./index.html');
    echo $homepage;
?>