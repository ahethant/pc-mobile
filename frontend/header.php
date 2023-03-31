<?php
$cookie_name = "user";
$cookie_value = "Alex Porter";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
?>
<!DOCTYPE html>
<html>

<head>
    <!-- title -->
    <title>AHE( PC & Mobile Sale )</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="./asset/css/bootstrap.min.css" rel="stylesheet">

    <link href="./asset/css/style.css" rel="stylesheet">
</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #0044ff">
        <div class="container">
            <a class="navbar-brand px-3" href="index.php">
                <img src="./asset/images/logo.jpg" alt="logo">
                AHE
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item px-3">
                        <a class="nav-link" href="index">Dashboard</a>
                    </li>
                    <li class="nav-item dropdown px-3">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Brand
                        </a>
                        <ul class="dropdown-menu mt-2" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown px-3">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Services
                        </a>
                        <ul class="dropdown-menu mt-2" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>

                    <li class="nav-item px-3 ">
                        <a class="nav-link" href="">Contact</a>
                    </li>

                    <li class="nav-item px-3 ">
                        <a class="nav-link" href="">
                            <i class="fas fa-shopping-cart"></i>
                            <span class="badge badge-pill badge-light badge-notify"> 3</span>
                            My Cart
                        </a>
                    </li>

                    <li class="nav-item dropdown px-3">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Account
                        </a>
                        <ul class="dropdown-menu mt-2" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="#">
                                    <i class="far fa-laugh-beam pr-3"></i>
                                    Manage My Account</a></li>
                            <div class="dropdown-divider"></div>
                            <li><a class="dropdown-item" href="#">
                                    <i class="fas fa-box pr-3"></i>
                                    My Orders</a></li>
                            <div class="dropdown-divider"></div>
                            <li><a class="dropdown-item" href="#">
                                    <i class="far fa-times-circle pr-3"></i>My Cancellations</a></li>
                            <div class="dropdown-divider"></div>
                            <li><a class="dropdown-item" href="#">
                                    <i class="fas fa-key pr-3"></i>Change Password</a></li>
                            <div class="dropdown-divider"></div>
                            <li><a class="dropdown-item" href="#">
                                    <i class="fas fa-sign-out-alt pr-3"></i>Logout</a></li>
                        </ul>
                    </li>
                    <li class="nav-item px-3">
                        <a class="nav-link" href="">Login </a>
                    </li>

                    <li class="nav-item px-3">
                        <a class="nav-link" href="register">Sign Up</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>