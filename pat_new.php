<?php
    // STORE DETAILS OF NEW appointment
    include 'db.php';

    // Gets new data from form
    $name = $_POST["patname"];
    $surname = $_POST["patsurname"];
    $age = $_POST["patage"];
    $gender = $_POST["patgender"];
    $sel = $_POST["patsel"];
    $email = $_POST["patmail"];
    $aid = $_POST["pataid"];
    $prev = $_POST["patprev"];
    
    // sql statement
    $sql = "INSERT INTO patients (Name, Surname, Age, Gender, PhoneNumber, Email, MedicalAidNumber, PreviousAppointments) VALUES ('$name', '$surname', '$age', '$gender', '$sel', '$email', '$aid', '$prev')";

    // closes connection
    $conn->query($sql);
    $conn->close();

    header("location: patient.php");
?>