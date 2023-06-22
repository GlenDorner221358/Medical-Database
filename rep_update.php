<?php
    include 'db.php';

    // Gets data from form
    $repid = $_POST["repid"];
    $name = $_POST["repname"];
    $surname = $_POST["repsurname"];
    $age = $_POST["repage"];
    $gender = $_POST["repgender"];
    $sel = $_POST["repsel"];
    $email = $_POST["repmail"];
    $rank = $_POST["reprank"];
    $picture = $_FILES["reppic"]["name"];

    // script to upload image
    $target_dir = "pictures/";
    $target_file = $target_dir . basename($_FILES["reppic"]["name"]);
    move_uploaded_file($_FILES["reppic"]["tmp_name"], $target_file);
    
    
    // sql statement
    $sql = "UPDATE receptionists SET Name='$name', Surname='$surname', Age='$age', Gender='$gender', PhoneNumber='$sel', Email='$email', Rank='$rank', Picture='$picture' WHERE ID=$repid";

    // closes connection
    $conn->query($sql);
    $conn->close();

    header("location: receptionist.php");
?>