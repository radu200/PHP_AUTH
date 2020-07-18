<?php
    function loginUser($username, $role) {
      session_start();
      $_SESSION['username'] = $username;
      $_SESSION['role'] = $role;
      echo $role;
    };


   function getUserName(){
      session_start();
      $username = $_SESSION['username'];
      if (isset($username)) {
        return $username;  
      };
   }

   function checkAuthAdmin(){
        session_start();
        $role = $_SESSION['role']; 
        if (isset($role)) {
         return $role  == "admin";
      };
    };

   function checkAuthStudent(){
     session_start();
     $role = $_SESSION['role']; 
      if (isset($role)) {
        return $role == "student";
    };
  };

  function processAuth(){
      $username = trim($_POST['username']);
      $password = trim($_POST['password']);
      //get data from text file  and check if credentials exist
      $role = 'admin';
      if($role == 'admin'){
        loginUser($username, $role);
        return header("Location: /admin.php");
      } else if($role == 'user'){
        loginUser($username, $role);
        return header("Location: /student.php");
      } else {
        return header("Location: /login.php");
      }
    }
?>