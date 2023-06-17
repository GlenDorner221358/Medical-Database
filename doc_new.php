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
    
    // sql statement
    $sql = "INSERT INTO doctors (Name, Surname, Age, Gender, PhoneNumber, Email, Specialisation, Room) VALUES ('$name', '$surname', '$age', '$gender', '$sel', '$email', '$spec', '$room')";

    // closes connection
    $conn->query($sql);
    $conn->close();

    header("location: doctor.php");
?>