<?php
require_once "./functions.php";

$form_is_submitted = false;
$errors_detected = false;
$usernameErr = $passwordErr =  "";
$username = $password =  "";

//validation login
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

if ($form_is_submitted === true && $errors_detected === false) {
    //verify user credentials
    $res = verifyUser($username, $password);
    if (count($res) > 0) {
        $role = $res["role"];
        //add user to session and redirect
        processAuth($username, $role);
    } else {
        $output = "<center><h1>Your credentials are incorect  </h1>
        <a href='/login.php'>Go back to login</a></center>";
        echo $output;
    }
} else {
    $output = "<center><h1>Form fileds cannot be empty </h1>
    <a href='/login.php'>Go back to login</a></center>";
    echo $output;
}
