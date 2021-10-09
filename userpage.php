<?php
require_once __DIR__ . '/src/autoload.php';

$userUtility = \App\Utility\UserUtility::getInstance();
if (!$userUtility->isLoggedInRecevier()) {
    header('Location: /login.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link href="https://fonts.googleapis.com/css?family=Dosis:300,400,700" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>User page</title>
    <style>
        * {
            margin: 0;
            padding: 0;
        }
        
        body {
            font-family: "Dosis", sans-serif;
            background-color: black;
        }
        
        .navbar {
            width: 300px;
            height: 100%;
            background-color: black;
            position: fixed;
            top: 0;
            right: -300px;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 20% 0 0 40%;
            transition: right 0.8s cubic-bezier(1, 0, 0, 1);
        }
        
        .change {
            right: 0;
        }
        
        .hamburger-menu {
            width: 35px;
            height: 30px;
            position: fixed;
            top: 20px;
            right: 50px;
            cursor: pointer;
            display: flex;
            flex-direction: column;
            justify-content: space-around;
        }
        
        .line {
            width: 100%;
            height: 3px;
            background-color: white;
            transition: all 0.8s;
        }
        
        .change .line-1 {
            transform: rotateZ(-405deg) translate(-8px, 6px);
        }
        
        .change .line-2 {
            opacity: 0;
        }
        
        .change .line-3 {
            transform: rotateZ(405deg) translate(-8px, -6px);
        }
        
        .nav-list {
            text-align: left;
        }
        
        .nav-item {
            list-style: none;
            margin: 25px;
        }
        
        .nav-link {
            text-decoration: none;
            font-size: 22px;
            color: #eee;
            font-weight: 500;
            letter-spacing: 1px;
            text-transform: uppercase;
            position: relative;
            padding: 3px 0;
        }
        
        .nav-link::before,
        .nav-link::after {
            content: "";
            width: 100%;
            height: 2px;
            background-color: rgb(203, 203, 219);
            position: absolute;
            right: 0;
            transform: scalex(0);
            transition: transform 0.5s;
        }
        
        .nav-link::after {
            bottom: 0;
            transform-origin: right;
        }
        
        .nav-link::before {
            top: 0;
            transform-origin: left;
        }
        
        .nav-link:hover::before,
        .nav-link:hover::after {
            transform: scalex(1);
        }
    </style>

</head>

<body>
    <nav>
        <div class="container text-center">
            <h1 style="border:5px solid black; font-size: 35px; background-color:white; text-transform: uppercase; text-align: center; border-radius:15px; display: inline-block; margin: 0 auto; padding: 5px;">User: <?php echo $_SESSION['rname']; ?></h1>
        </div>
    </nav>
    <div id="demo" class="carousel slide" data-ride="carousel">


        <!-- The slideshow -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="image/Userbbms3.png " alt="Los Angeles " width="100 " height="100 ">
            </div>

        </div>

    </div>
    <div class="container ">
        <nav class="navbar ">
            <div class="hamburger-menu ">
                <div class="line line-1 "></div>
                <div class="line line-2 "></div>
                <div class="line line-3 "></div>
            </div>

            <ul class="nav-list ">
                <li class="nav-item ">
                    <a href="rprofile.php " class="nav-link ">My Account</a>
                </li>
                <li class="nav-item ">
                    <a href="blooddinfo.php " class="nav-link ">Blood info</a>
                </li>
                <li class="nav-item ">
                    <a href="abs.php " class="nav-link ">Blood available</a>
                </li>
                <li class="nav-item ">
                    <a href="sentrequest.php " class="nav-link ">Status of request</a>
                </li>

                <li class="nav-item ">
                    <a href="blooddonate.php " class="nav-link ">Blood donation request</a>
                </li>
                <li class="nav-item ">
                    <a href="logout.php " class="nav-link ">LogOut</a>
                </li>
            </ul>
        </nav>
    </div>
    <script src="script.js "></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js "></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js "></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js "></script>
</body>

</html>