<?php
    use Config\Env;

    require_once '../init.php';

    $obj = Env::get('mysql/username');
    // print_r($obj);
    echo $obj;
 ?>
