<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IBG DASHBOARD</title>

    <link rel="stylesheet" href="myVendor/bootstrap/bootstrap.css">

    <link rel="stylesheet" href="css/dashboardStyle.css">

    <link rel="stylesheet" href="css/table.css">

<?php
session_start();
$flag = 0;

if ($_SESSION) {
    $flag = 1;

    echo "<script>
            var fname = '" . $_SESSION['fname'] . "';
            var user_id = " . $_SESSION['user_id'] . ";

            console.log('session created fname =' + fname  + 'and user_id =' + user_id);
        </script>";
}

echo "<script>
        var flag = " . $flag . ";
    </script>";

?>
    <!-- external jquery file -->
    <script src="myVendor/jquery/jquery.js"></script>
    <!-- external bootstrap file -->
    <script src="myVendor/bootstrap/bootstrap.js"></script>

    <script type="module" src="js/navigation.js"></script>
</head>

<body>
    <!-- navigation section -->
    <div id="nev">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid mynavbar">
                <div class="logo">
                    <a class="navbar-brand" href="#">IB GENERATOR</a>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ">
                        <li class="nav-item">
                            <a class="nav-link " href="http://localhost/php/IBG/#top">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="http://localhost/php/IBG/#templates">Templates</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="http://localhost/php/IBG/#about-us">Features</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="http://localhost/php/IBG/#testimonials">Testimonials</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="http://localhost/php/IBG/#social-media">Contact Us</a>
                        </li>
                        <li id='my-details-btn' class="nav-item btn">
                            <a class="nav-link">Details</a>
                        </li>

                        <?php
                        if ($_SESSION) {
                            echo '<div class="dropdown">
                        <button class="btn btn-color dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            <span id="firstName" class="mr-2 d-none d-lg-inline text-gray-600 small">' . $_SESSION["fname"] . '</span>
                            <img class="img-profile rounded-circle " src="img/undraw_profile.svg">
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton1">
                          <li><a class="dropdown-item btn" id="btn-profile"><span class="text-secondary">profile</span></a></li>
                          <li><a class="dropdown-item btn" id="btn-logout"><span class="text-secondary">logout</span></a></li>
                        </ul>
                      </div>';
                        } else {
                            echo '<li class="nav-item">
                            <a class="nav-link btn-color" href="login.php">LOGIN</a>
                        </li>';
                        }
                        ?>

                    </ul>
                </div>

            </div>
        </nav>
    </div>

    <!-- my Modal confirmation -->
    <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary" id='btn-modal-true'>Button_name</button>
                </div>
            </div>
        </div>
    </div>