<?php
    include 'db.php';

    $sql = "SELECT * FROM receptionists";

    $result = $conn->query($sql);

    while($row = $result->fetch_assoc()) {
        echo "<option>" . $row['ID'] . "</option>";
    }

    $conn->close();
?>