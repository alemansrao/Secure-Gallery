<?php
$l = session_start();
include "Validate.php";
include "db.php";
if (isset($_SESSION['username'])) {
    header("Location:" . "./index.php", true, 301);
}
if (isset($_POST['submit'])) {
    if (isset($_POST['username']) || isset($_POST['password'])) {
        if ($_POST['username'] == "" || $_POST['password'] == "") {
        } else {
            $username = Validate::validate_string($_POST['username']);
            $password = md5(Validate::validate_string($_POST['password']));
            $sql = "SELECT * from gallery WHERE username='" . $username . "' AND pass='" . $password . "'";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                $_SESSION['username'] = $username;
                header("Location:" . "./index.php", true, 301);
            } else {
                echo '<script type="text/javascript">document.getElementById("wrongDetails").style.display="inline-block";</script>';
            }
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./css/gitsite.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="#">
            Login
        </a>
    </nav>
    <div class="container">
        <div class="formContainer">
            <form action="" method="post">
                <label for="username">Username</label>
                <input type="text" class="form-control" name="username" id="username" placeholder="Enter the username">
                <br>
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password" id="password" placeholder="Enter the password">
                <br>
                <label id="wrongDetails" style="color:red;display:none">Check username and password.</label>
                <center>
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </center>
            </form>
        </div>
    </div>
    <style>
        .formContainer {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 75%;
        }
    </style>
</body>
<script src="js/removeBanner.js"></script>

</html>