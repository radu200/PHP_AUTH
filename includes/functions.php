<?php
    function loginUser($username, $role) {
      session_start();
      $_SESSION['username'] = $username;
      $_SESSION['role'] = $role;
      echo $role;
    };

    

   function getUserName(){
      session_start();
      if (isset($_SESSION['username'])) {
        $username = $_SESSION['username'];
        return $username;  
      };
   }

   function checkAuthAdmin(){
        session_start();
        if (isset($_SESSION['role'])) {
          $role = $_SESSION['role']; 
         return $role  == "admin";
      };
    };

   function checkAuthStudent(){
      session_start();
      if (isset($_SESSION['role'])) {
        $role = $_SESSION['role']; 
       return $role == "student";
    };
  };

  function processAuth(){
      $username = trim($_POST['username']);
      $password = trim($_POST['password']);
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