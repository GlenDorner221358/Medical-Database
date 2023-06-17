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
    <title> receptionists </title>
</head>
<body class="receptionist">
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
            <li class="nav-item active">
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
        <h1>Receptionists</h1>
        <center>
        <h2 class="headingsuper">Update Receptionist details</h2>
        <p>Fill in the form with the details of the old info, but change what you want to update!</p>
        </center>

        <!-- Update a receptionist -->
        <form id="update" class="form-inline m-2" action="rep_update.php" method="POST">
            <label for="repid">Receptionist ID:</label>
            <input type="number" class="form-control m-5" id="repid" name="repid">

            <label for="repname">Name:</label>
            <input type="text" class="form-control m-4" id="repname" name="repname">
            
            <label for="repsurname">Surname:</label>
            <input type="text" class="form-control m-4" id="repsurname" name="repsurname">

            <label for="repage">Age:</label>
            <input type="number" class="form-control m-5" id="repage" name="repage">

            <label for="repgender">Gender:</label>
            <select class="form-control m-4" id="repgender" name="repgender">
                <option>--SELECT GENDER--</option>
                <option>Male</option>
                <option>Female</option>
            </select>

            <label for="repsel">Phone Number:</label>
            <input type="tel" class="form-control m-5" id="repsel" name="repsel">

            <label for="repmail">E-mail:</label>
            <input type="email" class="form-control m-4" id="repmail" name="repmail">

            <label for="reppass">Password:</label>
            <input type="text" class="form-control m-4" id="reppass" name="reppass">

            <label for="reprank">Rank:</label>
            <select class="form-control m-4" id="reprank" name="reprank">
                <option>--SELECT RANK--</option>
                <option>1</option>
                <option>0</option>
            </select>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
        
        <center>
        <h2 class="headingsuper">Current receptionists</h2>
        </center>

        <!-- Show receptionists -->
        <table class="table mx-auto">
            <tbody>
                <th>ID</th>
                <th>Name</th>
                <th>Surname</th>
                <th>Age</th>
                <th>Gender</th>
                <th>Sel-number</th>
                <th>E-mail</th>
                <th> Password </th>
                <th>Rank</th>
                <?php include 'rep_read.php'; ?>
            </tbody>
        </table>
        
    </div>
</body>
</html>