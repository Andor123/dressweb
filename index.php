<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>DressWeb</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="This is a web shop for clothes">
    <meta name="author" content="Andor Salamon">
    <meta name="keywords" content="DressWeb,web,shop,clothes">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
<header>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
        <a class="navbar-brand" href="index.php">DressWeb</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse"
                data-target="#navbar" aria-controls="navbar"
                aria-expanded="false" aria-label="Toggle Navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="mens.php">Men's</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="womens.php">Women's</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="kids.php">Kids</a>
                </li>
            </ul>
            <?php
            if (!isset($_SESSION["user"])) {
                ?>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="signup.html">Sign Up</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.html">Login</a>
                    </li>
                </ul>
                <?php
            }
            if (isset($_SESSION["user"])) {
                ?>
                <ul class="navbar-nav ml-auto">
                    <span class="navbar-text">
                        Welcome, <?php echo $_SESSION["user"] ?>
                    </span>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Logout</a>
                    </li>
                </ul>
                <?php
            }
            ?>
        </div>
    </nav>
</header>
<section class="container-fluid text-center" id="container1">
    <h1 class="h1">Welcome to DressWeb!</h1>
    <p class="lead">A web store dedicated to those
        who want to buy clothes for themselves.</p>
    <p class="lead">We offer clothes for men, women
        and kids for very cheap prices.</p>
</section>
<section class="container-fluid text-right" id="container2">
    <h1 class="h1">Men's Clothes</h1>
    <p class="lead">In this section we have clothes for men.</p>
    <p class="lead">This includes:</p>
    <ul class="list-group" id="list1">
        <li class="list-group-item">Jackets</li>
        <li class="list-group-item">Trousers</li>
        <li class="list-group-item">T-Shirts</li>
        <li class="list-group-item">Shoes</li>
        <li class="list-group-item">Underwear</li>
        <li class="list-group-item">Etc.</li>
    </ul>
</section>
<section class="container-fluid text-left" id="container3">
    <h1 class="h1">Women's Clothes</h1>
    <p class="lead">In this section we have clothes for women.</p>
    <p class="lead">This includes:</p>
    <ul class="list-group" id="list2">
        <li class="list-group-item">Coats</li>
        <li class="list-group-item">Skirts</li>
        <li class="list-group-item">Blouses</li>
        <li class="list-group-item">Shoes</li>
        <li class="list-group-item">Underwear</li>
        <li class="list-group-item">Etc.</li>
    </ul>
</section>
<section class="container-fluid text-right" id="container4">
    <h1 class="h1">Kids Clothes</h1>
    <p class="lead">In this section we have clothes for kids.</p>
    <p class="lead">This includes:</p>
    <ul class="list-group" id="list3">
        <li class="list-group-item">Jackets</li>
        <li class="list-group-item">Trousers</li>
        <li class="list-group-item">T-Shirts</li>
        <li class="list-group-item">Shoes</li>
        <li class="list-group-item">Underwear</li>
        <li class="list-group-item">Etc.</li>
    </ul>
</section>
<footer class="footer">
    <div class="container-fluid text-center">
        <span class="text-muted">&copy; 2018, Andor Salamon</span>
    </div>
</footer>
<script src="node_modules/jquery/dist/jquery.min.js"></script>
<script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
<script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>