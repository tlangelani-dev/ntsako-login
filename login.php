<?php require_once __DIR__ . '/process_login.php'; ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Page</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <h2><em>Games login</em></h2>

    <form action="" method="post">
        <div class="imgcontainer">
            <img src="login.jpg" >
        </div>

        <div class="container">
            <label><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="uname" required>


            <label><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" required>

            <button type="submit">Login</button>
            <input type="checkbox" checked="checked"> Remember me
        </div>

        <div class="container" style="background-color:#f1f1f1">
            <button type="button" class="cancelbtn">Cancel</button>
            <span class="psw">Forgot <a href="#">password?</a></span>
        </div>
    </form>
</body>
</html>



