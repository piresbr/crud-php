<?php
    define('DB_SERVER', 'localhost');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', '');
    define('DB_NAME', 'crud');


    $conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

    if($conn === false){
        die("ERROR: NÃO FOI POSSÍVEL CONECTAR" . mysqli_connect_error());
    }
