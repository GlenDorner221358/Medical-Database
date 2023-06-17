<?php
    // DELETE DETAILS OF receptionist
    include 'db.php';

    // Gets id from URL
    $id = $_GET['id'];

    // SQL
    $sql = "DELETE FROM receptionists WHERE ID = $id";

    // Ends connection
    $conn->query($sql);
    $conn->close();
    header("location: receptionist.php");
?>