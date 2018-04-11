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
                    <a class="nav-link" href="add.php">Add</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="update.php">Update</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="delete.php">Delete</a>
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
    <?php
    if (!isset($_SESSION["user"])) {
        ?>
        <h1 class="h1">Please sign up or login as an admin!</h1>
        <?php
    }
    if (isset($_SESSION["user"])) {
        ?>
        <h1 class="h1">Delete</h1>
        <form method="post" action="delete2.php" id="form" name="form" class="form-group">
            <label for="id" class="sr-only">Id:</label>
            <select name="id" id="id" class="form-control" required>
                <?php
                $sql = "SELECT id FROM clothes";
                $result = mysqli_query($connection, $sql);

                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_array($result)) {
                        ?>
                        <option value="<?php echo $row["id"]; ?>"><?php echo $row["id"]; ?></option>
                        <?php
                    }
                }
                ?>
            </select><br>
            <button id="button" class="btn btn-lg btn-primary" type="submit">Delete</button>
        </form>
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