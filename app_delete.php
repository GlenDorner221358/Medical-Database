<?php
    // DELETE DETAILS OF appointment
    include 'db.php';

    // Gets id from URL
    $id = $_GET['id'];

    // SQL
    $sql = "DELETE FROM appointments WHERE ID = $id";

    // Ends connection
    $conn->query($sql);
    $conn->close();
    header("location: landing.php");
?>