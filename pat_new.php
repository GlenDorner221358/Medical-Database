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
    $picture = $_FILES["patpic"]["name"];

    // script to upload image
    $target_dir = "pictures/";
    $target_file = $target_dir . basename($_FILES["patpic"]["name"]);
    move_uploaded_file($_FILES["patpic"]["tmp_name"], $target_file);
    
    // sql statement
    $sql = "INSERT INTO patients (Name, Surname, Age, Gender, PhoneNumber, Email, MedicalAidNumber, PreviousAppointments, Picture) VALUES ('$name', '$surname', '$age', '$gender', '$sel', '$email', '$aid', '$prev', '$picture')";

    // closes connection
    $conn->query($sql);
    $conn->close();

    header("location: patient.php");
?>