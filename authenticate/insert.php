<?php 
    require '../php/connection.php';
    $name = $_POST["name"];
    $date = $_POST["date"];
    $sex = $_POST["sex"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $number = $_POST["number"];

    $query = mysqli_query($conn, "INSERT INTO sign_up (`name`,`birthdate`,`email`,`telephone`,`passwords`,`sex`) VALUES ('$name','$date','$email','$number','$password','$sex')");
    header("location: login.php");

?>