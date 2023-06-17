<?php
    include 'db.php';

    // Gets data from form
    $patid = $_POST["patid"];
    $name = $_POST["patname"];
    $surname = $_POST["patsurname"];
    $age = $_POST["patage"];
    $gender = $_POST["patgender"];
    $sel = $_POST["patsel"];
    $email = $_POST["patmail"];
    $aid = $_POST["pataid"];
    $prev = $_POST["patprev"];
    
    // sql statement
    $sql = "UPDATE patients SET Name='$name', Surname='$surname', Age='$age', Gender='$gender', PhoneNumber='$sel', Email='$email', MedicalAidNumber='$aid', PreviousAppointments='$prev' WHERE ID=$patid";

    // closes connection
    $conn->query($sql);
    $conn->close();

    header("location: patient.php");
?>