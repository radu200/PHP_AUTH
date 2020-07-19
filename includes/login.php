<?php
require_once "./functions.php";
// State variables
$form_is_submitted = false;
$errors_detected = false;
$usernameErr = $passwordErr =  "";
$username = $password =  "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $form_is_submitted  = true;
    $username = test_input($_POST["username"]);
    $password = test_input($_POST["password"]);


    if (empty($_POST["username"])) {
        $usernameErr = "Username is required";
        $errors_detected = true;
    } else {
        $username = test_input($_POST["username"]);
    }


    if (empty($_POST["password"])) {
        $passwordErr = "Password is required";
        $errors_detected = true;
    } else {
        $password = test_input($_POST["password"]);
    }
}
function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if ($form_is_submitted === true && $errors_detected === false) {
    verifyUser($username, $password);
};
