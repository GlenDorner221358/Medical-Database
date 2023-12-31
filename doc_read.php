<?php
    // SHOW LIST OF ALL RECORDS
    include 'db.php';

    // selects all from employees
    $sql = "SELECT * FROM doctors";

    $result = $conn->query($sql);

    // loops through to display everything
    while($row = $result->fetch_assoc()) {
        // Data
        echo "<tr>";
        echo "<td>" . $row['ID'] . "</td>";
        echo "<td>" . $row['Name'] . "</td>";
        echo "<td>" . $row['Surname'] . "</td>";
        echo "<td>" . $row['Age'] . "</td>";
        echo "<td>" . $row['Gender'] . "</td>";
        echo "<td>" . $row['PhoneNumber'] . "</td>";
        echo "<td>" . $row['Email'] . "</td>";
        echo "<td>" . $row['Specialisation'] . "</td>";
        echo "<td>" . $row['Room'] . "</td>";
        echo "<td> <img src='pictures/" . $row['Picture'] . "' height='60' width='80'> </td>";

        // buttons
        if ($_SESSION['userrank'] == 1) {
            echo "<td><a class='btn btn-danger' href='doc_delete.php?id=" . $row['ID'] . " role='button'>Delete</a></td>";//DELETE;
        }

        echo "</tr>";
    }

    $conn->close();
?>