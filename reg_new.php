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
    $picture = $_FILES["reppic"]["name"];

    // script to upload image
    $target_dir = "pictures/";
    $target_file = $target_dir . basename($_FILES["reppic"]["name"]);
    move_uploaded_file($_FILES["reppic"]["tmp_name"], $target_file);
    
    // sql statement
    $sql = "INSERT INTO receptionists (Name, Surname, Age, Gender, PhoneNumber, Email, Password, Picture) VALUES ('$name', '$surname', '$age', '$gender', '$sel', '$email', '$password', '$picture')";
        
    $conn->query($sql);
    $conn->close();

    header("location: register.php");
?>