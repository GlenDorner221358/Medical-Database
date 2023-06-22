<?php
    // STORE DETAILS OF NEW appointment
    include 'db.php';

    // Gets new data from form
    $name = $_POST["drname"];
    $surname = $_POST["drsurname"];
    $age = $_POST["drage"];
    $gender = $_POST["drgender"];
    $sel = $_POST["drsel"];
    $email = $_POST["drmail"];
    $spec = $_POST["drskill"];
    $room = $_POST["drroom"];
    $picture = $_FILES["docpic"]["name"];

    // script to upload image
    $target_dir = "pictures/";
    $target_file = $target_dir . basename($_FILES["docpic"]["name"]);
    move_uploaded_file($_FILES["docpic"]["tmp_name"], $target_file);
    
    // sql statement
    $sql = "INSERT INTO doctors (Name, Surname, Age, Gender, PhoneNumber, Email, Specialisation, Room, Picture) VALUES ('$name', '$surname', '$age', '$gender', '$sel', '$email', '$spec', '$room', '$picture')";

    // closes connection
    $conn->query($sql);
    $conn->close();

    header("location: doctor.php");
?>