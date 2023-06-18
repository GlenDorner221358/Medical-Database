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
    <title> Doctors </title>
</head>
<body class="doctor">
    <nav class="navbar navbar-expand-sm bg-light navbar-light">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
            <a class="nav-link" href="landing.php">Database</a>
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
    
    <div class="container-fluid drcontainer">
        <center>
        <h1> Doctors </h1>
        </center>

        <!-- New Doctors -->
        <?php  
            if ($_SESSION['userrank'] == 1) {
                echo "<center>
                <h2> Add new Doctor </h2>
                </center>
                <form id='new' class='form-inline m-3' action='doc_new.php' method='POST'>
                <label for='drname'>name:</label>
                <input type='text' class='form-control m-2' id='drname' name='drname'>
                
                <label for='drsurname'>Surname:</label>
                <input type='text' class='form-control m-2' id='drsurname' name='drsurname'>
    
                <label for='drage'>Age:</label>
                <input type='number' class='form-control m-2' id='drage' name='drage'>
    
                <label for='drgender'>Gender:</label>
                <select class='form-control m-4' id='drgender' name='drgender'>
                    <option>--SELECT GENDER--</option>
                    <option>Male</option>
                    <option>Female</option>
                </select>
    
                <label for='drsel'>Phone Number:</label>
                <input type='tel' class='form-control m-5' id='drsel' name='drsel'>
    
                <label for='drmail'>E-mail:</label>
                <input type='email' class='form-control m-4' id='drmail' name='drmail'>
    
                <label for='drskill'>Specialisation:</label>
                <input type='text' class='form-control m-4' id='drskill' name='drskill'>
    
                <label for='drroom'>Room ID:</label>
                <input type='number' class='form-control m-3' id='drroom' name='drroom'>
                
                <button type='submit' class='btn btn-primary'>Confirm</button>
            </form>
            <center>
            <h2 class='headingsuper'>Update Doctor details</h2>
            <p>Fill in the form with the details of the old info, but change what you want to update!</p>
            </center>

            <!-- Update a doctor -->
            <form id='update' class='form m-2' action='doc_update.php' method='POST'>

                <label for='docid'>Doctor ID:</label>
                <select class='form-control m-2' id='docid' name='docid'>
                    <option>--SELECT DOC ID--</option>";

                    include 'doc_select_ID.php'; 

                echo "</select>

                <label for='drname'>name:</label>
                <input type='text' class='form-control m-2' id='drname' name='drname'>
                
                <label for='drsurname'>Surname:</label>
                <input type='text' class='form-control m-2' id='drsurname' name='drsurname'>

                <label for='drage'>Age:</label>
                <input type='number' class='form-control m-2' id='drage' name='drage'>

                <label for='drgender'>Gender:</label>
                <select class='form-control m-2' id='drgender' name='drgender'>
                    <option>--SELECT GENDER--</option>
                    <option>Male</option>
                    <option>Female</option>
                </select>

                <label for='drsel'>Phone Number:</label>
                <input type='tel' class='form-control m-2' id='drsel' name='drsel'>

                <label for='drmail'>E-mail:</label>
                <input type='email' class='form-control m-2' id='drmail' name='drmail'>

                <label for='drskill'>Specialisation:</label>
                <input type='text' class='form-control m-2' id='drskill' name='drskill'>

                <label for='drroom'>Room:</label>
                <select class='form-control m-2' id='drroom' name='drroom'>
                    <option>--SELECT ROOM--</option>";

                    include 'doc_select_room.php'; 
                    echo "
                </select>

                
                <button type='submit' class='btn btn-primary btn-lg m-2'>Update</button>
            </form>";
            }
        ?>
        

        

        <center>
        <h2 class="headingsuper">Currently Registered Doctors</h2>
        </center>

        <!-- Show doctors -->
        <table class="table mx-auto">
            <tbody>
                <th>ID</th>
                <th>Name</th>
                <th>Surname</th>
                <th>Age</th>
                <th>Gender</th>
                <th>Sel-number</th>
                <th>E-mail</th>
                <th>Specialisation</th>
                <th>Room</th>
                <?php include 'doc_read.php'; ?>
            </tbody>
        </table>
    </div>

</body>
</html>