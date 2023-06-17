<?php
    // STORE DETAILS OF NEW appointment
    include 'db.php';

    // Gets new data from form
    $patientid = $_POST["apppat"];
    $doctorid = $_POST["appdr"];
    $time = $_POST["apptime"];
    $date = $_POST["appdate"];
    $receptionist = $_POST["apprep"];
    $roomid = $_POST["approom"];
    
    // sql statement
    $sql = "INSERT INTO appointments (DoctorID, PatientID, RoomID, Time, Date, ReceptionistID) VALUES ('$doctorid', '$patientid', '$roomid', '$time', '$date', '$receptionist')";

    // closes connection
    $conn->query($sql);
    $conn->close();

    header("location: landing.php");
?>