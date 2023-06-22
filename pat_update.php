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
    $picture = $_FILES["patpic"]["name"];

    // script to upload image
    $target_dir = "pictures/";
    $target_file = $target_dir . basename($_FILES["patpic"]["name"]);
    move_uploaded_file($_FILES["patpic"]["tmp_name"], $target_file);
    
    
    // sql statement
    $sql = "UPDATE patients SET Name='$name', Surname='$surname', Age='$age', Gender='$gender', PhoneNumber='$sel', Email='$email', MedicalAidNumber='$aid', PreviousAppointments='$prev', Picture='$picture' WHERE ID=$patid";

    // closes connection
    $conn->query($sql);
    $conn->close();

    header("location: patient.php");
?>