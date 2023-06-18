<?php
    include 'db.php';

    $sql = "SELECT * FROM doctors";

    $result = $conn->query($sql);

    while($row = $result->fetch_assoc()) {
        echo "<option value=" . $row['ID'] . ">" . $row['Surname'] . "</option>";
    }

    $conn->close();
?>