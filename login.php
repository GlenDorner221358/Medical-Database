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
    <title> Log-in </title>
</head>
<body class="login">
    <nav class="navbar navbar-expand-sm bg-light navbar-light">
        <ul class="navbar-nav">
            <li class="nav-item active">
            <a class="nav-link" href="login.php">LogIn</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="register.php">Register</a>
        </ul>
    </nav>

    <div class="container">
        <center>
        <h1>Welcome!</h1>
        <h2>Enter your details to log in</h2>
        </center>
    
        <!-- log in old receptionists -->
        <form id="log" class="form-inline m-2" action="log_user.php" method="POST">
            <label for="repmail">E-mail:</label>
            <input type="email" placeholder="JohnDoe@gmail.com" class="form-control m-4" id="repmail" name="repmail" required>

            <label for="reppass">Password:</label>
            <input type="text" class="form-control m-4" id="reppass" name="reppass" required>

            <button id="myButton" type="submit" value="register" class="btn btn-primary m-4">Log in</button>
        </form>
    </div>    

</body>
</html>