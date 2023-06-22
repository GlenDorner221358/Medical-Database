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
    <title> register </title>
</head>
<body class="register">
    <nav class="navbar navbar-expand-sm bg-light navbar-light">
        <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link" href="login.php">LogIn</a>
            </li>
            <li class="nav-item active">
            <a class="nav-link" href="register.php">Register</a>
        </ul>
    </nav>

    <div class="container">
        <center>
        <h1>Welcome!</h1>
        <h2>Enter your details to register</h2>
        </center>
    
        <!-- register new receptionists -->
        <form id="new" class="form-inline m-2" action="reg_new.php" method="POST" enctype="multipart/form-data">
            <label for="repname">Name:</label>
            <input type="text" class="form-control m-5" id="repname" name="repname" required>
            
            <label for="repsurname">Surname:</label>
            <input type="text" class="form-control m-5" id="repsurname" name="repsurname" required>

            <label for="repage">Age:</label>
            <input type="number" class="form-control m-4" id="repage" name="repage" required>

            <label for="repgender">Gender:</label>
            <select class="form-control m-5" id="repgender" name="repgender" required>
                <option>--SELECT GENDER--</option>
                <option>Male</option>
                <option>Female</option>
            </select>

            <label for="repsel">Phone Number:</label>
            <input type="tel" class="form-control m-4" id="repsel" name="repsel" required>

            <label for="repmail">E-mail:</label>
            <input type="email" placeholder="JohnDoe@gmail.com" class="form-control m-4" id="repmail" name="repmail" required>

            <label for="reppass">Password:</label>
            <input type="text" class="form-control m-4" id="reppass" name="reppass" required>

            <label for="reppic">Picture:</label>
            <input type="file" class="form-control m-4" id="reppic" name="reppic" required accept=".jpg, .jpeg, .png">

            <button id="myButton" type="submit" value="register" class="btn btn-primary m-4" onclick="alerter()">Register</button>
        </form>
    </div>    
    
    <script>
        var form = document.getElementById("new");

        function alerter() {
            if (form.checkValidity()) {
                alert("Succesfully registered");
            }
        }
    </script>


</body>
</html>