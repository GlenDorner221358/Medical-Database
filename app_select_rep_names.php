<?php
    include 'db.php';

    $sql = "SELECT * FROM receptionists";

    $result = $conn->query($sql);

    while($row = $result->fetch_assoc()) {
        echo "<option value=" . $row['ID'] . ">" . $row['Name'] . "</option>";
    }

    $conn->close();
?>