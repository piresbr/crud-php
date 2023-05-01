<?php
require_once "connect.php";

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];

    if ($name != '' && $email != '') {
        $sql = "INSERT INTO user (`name`, `email`) VALUES ('$name', '$email')";
        if (mysqli_query($conn, $sql)) {
            header('location: index.php');
        } else {
            echo "Tente novamente mais tarde.";
        }
    } else {
        echo "Nome e email não podem estar vazios.";
    }
}
