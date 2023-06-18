<?php
    // SHOW LIST OF ALL RECORDS
    include 'db.php';

    // selects all from employees
    $sql = "SELECT * FROM appointments";

    $result = $conn->query($sql);

    // loops through to display everything
    while($row = $result->fetch_assoc()) {
        // Data
        echo "<tr>";
        echo "<td>" . $row['ID'] . "</td>";
        echo "<td>" . $row['DoctorID'] . "</td>";
        echo "<td>" . $row['PatientID'] . "</td>";
        echo "<td>" . $row['RoomID'] . "</td>";
        echo "<td>" . $row['Time'] . "</td>";
        echo "<td>" . $row['Date'] . "</td>";
        echo "<td>" . $row['ReceptionistID'] . "</td>";

        // buttons
        echo '<td><a class="btn btn-danger" href="app_delete.php?id=' . $row['ID'] . '" role="button">Delete</a></td>';//DELETE
        echo "</tr>";
    }

    $conn->close();

?>