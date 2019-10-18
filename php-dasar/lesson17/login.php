<?php

session_start();

require "functions.php";

if ( isset($_COOKIE["id"]) && isset($_COOKIE["key"]) ) {
    $id = $_COOKIE["id"];
    $key = $_COOKIE["key"];

    $result = mysqli_query($conn,"SELECT username FROM user WHERE (id = $id)");
    $row = mysqli_fetch_assoc($result);

    if ( $key === hash("sha256", $row["username"]) ) {
        $_SESSION["login"] = true;
    }

}

if ( isset($_SESSION["login"]) ) {
    header("Location: index.php");
    exit;
}


if ( isset($_POST["login"]) ) {

    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM user WHERE (username='$username')");

    if ( mysqli_num_rows($result) !== 0 ) {

        $rows = mysqli_fetch_assoc($result);

        if ( password_verify($password,$rows["password"]) ) {

            $_SESSION["login"] = true;

            if ( isset($_POST["remember"]) ) {
                setcookie("id", $rows["id"], time() + 60);
                setcookie("key", hash("sha256", $rows["username"]), time() + 60);
            }

            header ("Location: index.php");
            exit;
        }

    }

    $error = true;
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP Dasar : Login Form</title>
</head>
<body>
    
    <h1>Login Page</h1>

    <ul>
    
    <form action="" method="post">

        <li>
            <label for="username">Username : </label>
            <input type="text" name="username" id="username">
        </li>

        <li>
            <label for="password">Password : </label>
            <input type="password" name="password" id="password">
        </li>

        <li>
            <input type="checkbox" name="remember" id="remember">
            <label for="remember">Remember Me</label>
        </li>

        <li>
            <button type="submit" name="login">Login</button>
        </li>

    </form>

    <?php if ( isset($error) ) { ?>
            <p style="color: red; font-style: italic;" >Username / Password salah</p>
    <?php } ?>

    </ul>

</body>
</html>