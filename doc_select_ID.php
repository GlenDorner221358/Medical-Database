<?php
    include 'db.php';

    $sql = "SELECT * FROM doctors";

    $result = $conn->query($sql);

    while($row = $result->fetch_assoc()) {
        echo "<option>" . $row['ID'] . "</option>";
    }

    $conn->close();
?>