<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Glen Dorner">
    <meta name="Task" content="Milestone 2">
    <meta name="Subject" content="DV200">
    <meta name="Lecturer" content="Tsungai Katsuro">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="main.css">
    <title> Appointments </title>
</head>
<body class="landing">
    <nav class="navbar navbar-expand-sm bg-light navbar-light">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
            <a class="nav-link" href="landing.php">Hopstita</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="landing.php">Appointments</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="doctor.php">Doctors</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="patient.php">Patients</a>
            </li>
            <li class="nav-item">
            <?php  
                session_start();

                if ($_SESSION['userrank'] == 1) {
                    echo "<a class='nav-link' href='receptionist.php'>Receptionists</a>";
                }
            ?>
            </li>
        </ul>
        <span id="useremail" class="navbar-text"> 
        <?php
        $email = $_SESSION["usermail"];
        $rank = $_SESSION['userrank'];

        echo "$email" . " Rank: " . "$rank";
        ?>    
        </p>
        <form class="form-inline" action="logout.php" method="POST">
            <button class="btn btn-sm btn-outline-secondary" type="submit">Log Out</button>
        </form>
    </nav>

    <div class="container">
        <center>
        <h1>Welcome!</h1>
        <h2>Create new appointment</h2>
        </center>

        <!-- New Appointments -->
        <form id="new" class="form-inline m-2" action="app_new.php" method="POST">
            <label for="Patient">Patient ID:</label>
            <input type="number" class="form-control m-5" id="apppat" name="apppat">

            <label for="Doctor">Doctor ID:</label>
            <input type="number" class="form-control m-5" id="appdr" name="appdr">

            <label for="Time">Time:</label>
            <input type="time" class="form-control m-5" id="apptime" name="apptime">

            <label for="Date">Date:</label>
            <input type="date" class="form-control m-3" id="appdate" name="appdate">

            <label for="Receptionist">Receptionist ID:</label>
            <input type="number" class="form-control m-3" id="apprep" name="apprep">

            <label for="Room">Room ID:</label>
            <input type="number" class="form-control m-3" id="approom" name="approom">

            <button type="submit" class="btn btn-primary">Confirm</button>
        </form>

        <center>
        <h2 class="headingsuper">Update an appointment</h2>
        <p>Fill in the form with the details of your old appointment, but change what you want to update!</p>
        </center>

        <!-- Update an Appointment -->
        <form id="update" class="form-inline m-2" action="app_update.php" method="POST">
            <label for="appid">Appointment ID:</label>
            <input type="number" class="form-control m-4" id="appid" name="appid">

            <label for="Patient">Patient ID:</label>
            <input type="number" class="form-control m-4" id="apppat" name="apppat">

            <label for="Doctor">Doctor ID:</label>
            <input type="number" class="form-control m-4" id="appdr" name="appdr">

            <label for="Time">Time:</label>
            <input type="time" class="form-control m-2" id="apptime" name="apptime">

            <label for="Date">Date:</label>
            <input type="date" class="form-control m-2" id="appdate" name="appdate">

            <label for="Receptionist">Receptionist ID:</label>
            <input type="number" class="form-control m-2" id="apprep" name="apprep">

            <label for="Room">Room ID:</label>
            <input type="number" class="form-control m-2" id="approom" name="approom">

            <button type="submit" class="btn btn-primary">Update</button>
        </form>

        <center>
        <h2 class="headingsuper">Current Appointments</h2>
        </center>
        
        <!-- Show appointments -->
        <table class="table mx-auto">
            <tbody>
                <th>Appointment ID</th>
                <th>Doctor ID</th>
                <th>Patient ID</th>
                <th>Room ID</th>
                <th>Time</th>
                <th>Date</th>
                <th>Receptionist ID</th>
                <?php include 'app_read.php'; ?>
            </tbody>
        </table>
        
    </div>

</body>
</html>