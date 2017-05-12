<?php

require_once __DIR__ . '/includes/functions.php';

if($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = test_input($_POST['uname']);
    $password = test_input($_POST['psw']);

    if (!filter_var($username, FILTER_VALIDATE_EMAIL)) {
        echo "<p>You entered an invalid email!</p>";
    } else {
        header('Location: game1.php');
        exit();
    }
}
