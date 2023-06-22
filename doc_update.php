<?php
    include 'db.php';

    // Gets data from form
    $docid = $_POST["docid"];
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
    $sql = "UPDATE doctors SET Name='$name', Surname='$surname', Age='$age', Gender='$gender', PhoneNumber='$sel', Email='$email', Specialisation='$spec', Room='$room', Picture='$picture' WHERE ID=$docid";

    // closes connection
    $conn->query($sql);
    $conn->close();

    header("location: doctor.php");
?>