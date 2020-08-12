<?php
    include '..\\Utils\\Config.php';

    $config = Config::getInstancia()->get('db');
    $db = new PDO(
        'mysql:host=127.0.0.1;dbname=plataforma',
        $config["db"]["user"],
        $config["db"]["password"]
    );
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);

?>