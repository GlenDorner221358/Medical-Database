<?php
    // DELETE DETAILS OF doctor
    include 'db.php';

    // Gets id from URL
    $id = $_GET['id'];

    // SQL
    $sql = "DELETE FROM doctors WHERE ID = '$id'";

    // Ends connection
    $conn->query($sql);
    $conn->close();
    header("location: doctor.php");
?>