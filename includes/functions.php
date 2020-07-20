<?php
function createSession($username, $role)
{
    session_start();
    $_SESSION["username"] = $username;
    $_SESSION["role"] = $role;
};


function getUserName()
{
    session_start();
    $username = $_SESSION["username"];
    if (isset($username)) {
        return $username;
    };
}
function checkAuthStudent()
{
    session_start();
    $role = $_SESSION["role"];
    if (isset($role)) {
        return $role == "student";
    };
};

function checkAuthAdmin()
{
    session_start();
    $role = $_SESSION["role"];
    if (isset($role)) {
        return $role  == "admin";
    };
};

function createUser($title, $firstname, $surname, $email, $username, $password)
{
    try {
        $myFile = "./data.json";
        $arr_data = array();

        $formdata = array(
            "title" => $title,
            "firstname" => $firstname,
            "surname" => $surname,
            "email" => $email,
            "username" => $username,
            "password" => $password,
            "role" => "student"
        );


        $jsondata = file_get_contents($myFile);

        $arr_data = json_decode($jsondata, true);

        array_push($arr_data, $formdata);

        $jsondata = json_encode($arr_data);

        //write json data into data.json file
        if (file_put_contents($myFile, $jsondata)) {
            return 200;
        } else {
            return 500;
        }
    } catch (Exception $e) {
        return 500;
    }
};


function processAuth($username, $role)
{
    if ($role == "admin") {
        createSession($username, $role);
        header("Location: /admin.php");
    } elseif ($role == "student") {
        createSession($username, $role);
        header("Location: /student.php");
    } else {
        header("Location: /login.php");
    }
}


function verifyUser($username, $password)
{
    $myFile = "../data.json";
    $arr_data = array();
    $jsondata = file_get_contents($myFile);
    $arr_data = json_decode($jsondata, true);
    $result = array();

    for ($i = 0; $i < count($arr_data); $i++) {
        $un = $arr_data[$i]["username"];
        $pwd = $arr_data[$i]["password"];
        if ($un == $username && $pwd == $password) {
            $role = $arr_data[$i]["role"];
            $result = array(
                "usernmae" => $username,
                "role" => $role
            );
            break;
        }
    }
    return $result;
};

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
