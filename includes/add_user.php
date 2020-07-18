<?php
// State variables
$form_is_submitted = false;
$errors_detected = false;
$successMsg = "";
$titleErr = $firstnameErr = $surnameErr = $emailErr = $usernameErr = $passwordErr =  "";
$title = $firstname = $surname = $email = $username = $password =  "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $form_is_submitted  = true;

    $title = test_input($_POST["title"]);
    $firstname = test_input($_POST["firstname"]);
    $surname = test_input($_POST["surname"]);
    $email = test_input($_POST["email"]);
    $username = test_input($_POST["username"]);
    $password = test_input($_POST["password"]);
    
    if (empty($_POST["title"])) {
        $titleErr = "Title is required";
        $errors_detected = true;
      } else {
        $title = test_input($_POST["name"]);
      }
    
      if (empty($_POST["firstname"])) {
        $firstnameErr = "First name is required";
        $errors_detected = true;
      } else {
        $firstname = test_input($_POST["firstname"]);
      }
    
      if (empty($_POST["surname"])) {
        $surnameErr = "Surname is required";
        $errors_detected = true;
      } else {
        $surname = test_input($_POST["surname"]);
      }
    
      if (empty($_POST["email"])) {
        $emailErr = "Email is reuqired";
        $errors_detected = true;
      } else {
        $email = test_input($_POST["email"]);
      }
    
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
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

 if ($form_is_submitted === true && $errors_detected === false) {
       $successMsg = 'User added successfully!';
       //write data to  file
       $title = $firstname = $surname = $email = $username = $password =  "";
  };
?>
