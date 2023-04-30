<?php
    require_once "connect.php";
    $id = $_GET["id"];
    $query = "DELETE FROM user where id = '$id'";
    if(mysqli_query($conn, $query)){
        header("location:index.php");
    }else {
        echo "Função indisponível no momento. Tente novamente mais tarde.";
    }
?>