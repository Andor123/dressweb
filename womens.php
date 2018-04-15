<?php
session_start();
include "config.php";
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
                <li class="nav-item active">
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
<section class="container-fluid text-center" id="container3">
    <?php
    if (!isset($_SESSION["user"])) {
        ?>
        <h1 class="h1">Please sign up or login to your account.</h1>
        <?php
    }
    if (isset($_SESSION["user"])) {
        ?>
        <h1 class="h1">Women's Clothes</h1>
        <div class="container-fluid">
            <?php
            if (!isset($_SESSION["size"])) {
                ?>
                <h2 class="h2">Filter</h2>
                <form method="post" action="filter2.php" id="filter" name="filter">
                    <label for="size">Size:</label><br>
                    <select name="size" id="size" class="form-control">
                        <option value="XS">XS</option>
                        <option value="S">S</option>
                        <option value="M">M</option>
                        <option value="L">L</option>
                        <option value="XL">XL</option>
                        <option value="XXL">XXL</option>
                        <option value="XXXL">XXXL</option>
                    </select><br>
                    <button type="submit" class="btn btn-primary" id="a2">Sort</button>
                </form><br>
                <?php
            }
            if (isset($_SESSION["size"])) {
                ?>
                <a class="btn btn-primary" id="a2" href="unset_filter2.php">Delete Sort</a><br><br>
                <?php
            }
            if (!isset($_SESSION["size"])) {
                $sql = "SELECT id, image, name, price FROM clothes WHERE category_id = 2";
                $result = mysqli_query($connection, $sql);
            }
            if (isset($_SESSION["size"])) {
                $size = $_SESSION["size"];
                $sql2 = "SELECT id, image, name, price FROM clothes WHERE category_id = 2 AND size = '$size'";
                $result = mysqli_query($connection, $sql2);
            }
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_array($result)) {
                    ?>
                    <div class="row">
                        <div class="col">
                            <form method="post" action="buy.php" id="form" name="form">
                                <input type="hidden" name="id" value="<?php echo $row["id"] ?>">
                                <img class="img-fluid" src="images/<?php echo $row["image"]; ?>" alt="image">
                                <p class="lead"><?php echo $row["name"] ?></p>
                                <p class="lead">€<?php echo $row["price"] ?></p>
                                <button type="submit" class="btn btn-primary" id="a2">Buy</button>
                            </form>
                        </div>
                    </div>
                    <br>
                    <?php
                }
            }
            ?>
        </div>
        <?php
    }
    ?>
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