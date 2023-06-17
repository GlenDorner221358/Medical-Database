<?php
    // STORE DETAILS OF NEW receptionist
    include 'db.php';

    // Gets new data from form
    $name = $_POST["repname"];
    $surname = $_POST["repsurname"];
    $age = $_POST["repage"];
    $gender = $_POST["repgender"];
    $sel = $_POST["repsel"];
    $email = $_POST["repmail"];
    $password = $_POST["reppass"];

    // sql statement
    $sql = "INSERT INTO receptionists (Name, Surname, Age, Gender, PhoneNumber, Email, Password) VALUES ('$name', '$surname', '$age', '$gender', '$sel', '$email', '$password')";
        
    $conn->query($sql);
    $conn->close();

    header("location: register.php");
?>