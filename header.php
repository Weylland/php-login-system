<?php
   session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="stylesheet" href="src/css/bootstrap.css">
    <link rel="stylesheet" href="src/css/style.css">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-xl navbar-light bg-light">
            <a href="" class="navbar-brand">
                <img src="src/img/logo.png" alt="Logo">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbar">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item"><a href="#" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Portfolio</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">About me</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Contact</a></li>
                </ul>
                <form action="includes/login.inc.php" method="POST" class="form-inline my-2 my-md-0">
                    <input type="text" name="mailuid" placeholder="Username/E-mail..." class="form-control mr-sm-2">
                    <input type="password" name="pwd" placeholder="Password..." class="form-control mr-sm-2">
                    <button type="submit" name="login-submit" class="btn btn-outline-success my-2 my-sm-0">Login</button>
                </form>
                <button class="btn btn-outline-success my-2 my-sm-0"><a href="signup.php">Signup</a></button>
                <form action="includes/logout.inc.php" method="POST" class="form-inline my-2 my-md-0">
                    <button type="submit" name="logout-submit" class="btn btn-outline-success my-2 my-sm-0">Logout</button>
                </form>
            </div>
        </nav>
    </header>