<?php
    // DELETE DETAILS OF patient
    include 'db.php';

    // Gets id from URL
    $id = $_GET['id'];

    // SQL
    $sql = "DELETE FROM patients WHERE ID = $id";

    // Ends connection
    $conn->query($sql);
    $conn->close();
    header("location: patient.php");
?>