<?php
    require_once "connect.php";
    $name = $_GET['name'];
    $telephone = $_GET['telephone'];
    $email = $_GET['email'];
    $connect->query("INSERT INTO `contact` (`name`, `telephone`, `email`) VALUES ('$name', '$telephone', '$email')");
    header('Location: ../index.php');
    