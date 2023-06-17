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
    <title> Patients </title>
</head>
<body class="patient">
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
        <span id="useremail" class="navbar-text"> <?php
        $email = $_SESSION["usermail"];
        $rank = $_SESSION['userrank'];

        echo "$email" . " Rank: " . "$rank";
        ?>    
        </p>
        <form class="form-inline" action="logout.php" method="POST">
            <button class="btn btn-sm btn-outline-secondary" type="submit">Log Out</button>
        </form> </p>
    </nav>

    <div class="container">
        <center>
        <h1>Patients</h1>
        <h2>Add new Patients</h2>
        </center>

        <!-- New patient -->
        <form id="new" class="form-inline m-2" action="pat_new.php" method="POST">
            <label for="patname">Name:</label>
            <input type="text" class="form-control m-5" id="patname" name="patname">
            
            <label for="patsurname">Surname:</label>
            <input type="text" class="form-control m-5" id="patsurname" name="patsurname">

            <label for="patage">Age:</label>
            <input type="number" class="form-control m-4" id="patage" name="patage">

            <label for="patgender">Gender:</label>
            <select class="form-control m-4" id="patgender" name="patgender">
                <option>--SELECT GENDER--</option>
                <option>Male</option>
                <option>Female</option>
            </select>

            <label for="patsel">Phone Number:</label>
            <input type="tel" class="form-control m-3" id="patsel" name="patsel">

            <label for="patmail">E-mail:</label>
            <input type="email" class="form-control m-3" id="patmail" name="patmail">

            <label for="pataid">Medical Aid Number:</label>
            <input type="text" class="form-control m-4" id="pataid" name="pataid">

            <label for="patprev">Previous Appointments:</label>
            <input type="number" class="form-control m-4" id="patprev" name="patprev">

            <button type="submit" class="btn btn-primary">Confirm</button>
        </form>

        <center>
        <h2 class="headingsuper">Update Patient details</h2>
        <p>Fill in the form with the details of the old info, but change what you want to update!</p>
        </center>

        <!-- Update a patient -->
        <form id="update" class="form-inline m-2" action="pat_update.php" method="POST">
            <label for="patid">Patient ID:</label>
            <input type="number" class="form-control m-4" id="patid" name="patid">

            <label for="patname">Name:</label>
            <input type="text" class="form-control m-5" id="patname" name="patname">
            
            <label for="patsurname">Surname:</label>
            <input type="text" class="form-control m-5" id="patsurname" name="patsurname">

            <label for="patage">Age:</label>
            <input type="number" class="form-control m-5" id="patage" name="patage">

            <label for="patgender">Gender:</label>
            <select class="form-control m-5" id="patgender" name="patgender">
                <option>--SELECT GENDER--</option>
                <option>Male</option>
                <option>Female</option>
            </select>

            <label for="patsel">Phone Number:</label>
            <input type="tel" class="form-control m-3" id="patsel" name="patsel">

            <label for="patmail">E-mail:</label>
            <input type="email" class="form-control m-2" id="patmail" name="patmail">

            <label for="pataid">Medical Aid Number:</label>
            <input type="text" class="form-control m-2" id="pataid" name="pataid">

            <label for="patprev">Previous Appointments:</label>
            <input type="number" class="form-control m-2" id="patprev" name="patprev">

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
        
        <center>
        <h2 class="headingsuper">Currently registered patients</h2>
        </center>

        <!-- Show patients -->
        <table class="table">
            <tbody>
                <th>ID</th>
                <th>Name</th>
                <th>Surname</th>
                <th>Age</th>
                <th>Gender</th>
                <th>Sel-number</th>
                <th>E-mail</th>
                <th>Medical Aid Number</th>
                <th>Previous Appointments</th>
                <?php include 'pat_read.php'; ?>
            </tbody>
        </table>
        
    </div>
</body>
</html>