<?php
    // Check log in info entered against the database
    include 'db.php';

    session_start(); // Start a PHP session to store user information

    // Gets new data from form
    $email = $_POST["repmail"];
    $password = $_POST["reppass"];

    // gets validation data
    $sql = "SELECT * FROM receptionists WHERE Email='$email' ";
    $result = $conn->query($sql);

    // checks data against database and redirects to landing if good
    while($row = $result->fetch_assoc()) {

        if ($row['Email'] == $email) {

            if ($row['Password'] == $password) {

                $_SESSION["usermail"] = $email;
                $_SESSION["userrank"] = $row['Rank'];
                header("location: landing.php");  
                
            }
            else {
                header("location: login.php");
            }
        }
        else {
            header("location: login.php");
        }
    }

    

    // closes connection
    $conn->close();
?>