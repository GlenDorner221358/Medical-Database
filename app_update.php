<?php
    include 'db.php';

    // Gets data
    $appid = $_GET["id"];

    $patientid = $_POST["apppat"];
    $doctorid = $_POST["appdr"];
    $time = $_POST["apptime"];
    $date = $_POST["appdate"];
    $receptionist = $_POST["apprep"];
    $roomid = $_POST["approom"];
    
    // sql statement
    $sql = "UPDATE appointments SET PatientID='$patientid', DoctorID='$doctorid', Time='$time', Date='$date', ReceptionistID='$receptionist', RoomID='$roomid' WHERE ID=$appid";

    // closes connection
    $conn->query($sql);
    $conn->close();

    header("location: landing.php");
?>