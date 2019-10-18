<?php
    if ( isset($_POST["submit"]) ) {

        if ( $_POST["username"] == "admin" && $_POST["password"] == "123" ) {
            header("Location: admin.php");
            exit;
        } else {
            $error = true;
        }

    }
?>

<html>
    <head>
        <title>PHP Dasar : Login Page</title>
    </head>
    <body>
        <h1>Login Page</h1>
        <ul>
        <form action="" method="post">
            <li>
                <label for="username">Username :</label>
                <input type="text" name="username" id="username">    
            </li>

            <li>
                <label for="password">Password :</label>
                <input type="password" name="password" id="password">    
            </li>

            <li>
                <button type="submit" name="submit">Login</button>
            </li>
        </form>
        </ul>

        <?php if ( isset($error) ) { ?>
            <p style="color: red; font-style: italic;" >Username / password salah</p>
        <?php } ?>
        
    </body>
</html>