<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Admin</title>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <meta name="theme-color" content="#563d7c">
</head>

<?php
require "./includes/functions.php";
$admin = checkAuthAdmin();
if ($admin) {
  require_once "./includes/add_user.php"; ?>

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
      <a class="navbar-brand" href="/">Brand</a>
      <a class="p-2" href="/includes/logout.php">Logout</a>
    </div>
  </nav>

  <body>
    <div class="conrainer">
      <div class="row justify-content-center">
        <div class="col-sm-3 mt-5">
          <span class="text-success"><?php echo $successMsg; ?></span>
          <span class="text-danger"><?php echo $errorMsg; ?></span>
          <h1 class="pt-2 pb-2 text-center">Add user</h1>
          <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <div class="form-group">
              <label for="user_title">Title</label>
              <input type="text" name="title" id="user_title" class="form-control" value="<?php echo $title; ?>">
              <span class="text-danger"><?php echo $titleErr; ?></span>
            </div>
            <div class="form-group">
              <label for="fn">First Name</label>
              <input type="text" name="firstname" id="fn" class="form-control" value="<?php echo $firstname; ?>">
              <span class="text-danger"><?php echo $firstnameErr; ?></span>
            </div>
            <div class="form-group">
              <label for="ln">Surname</label>
              <input type="text" name="surname" id="ln" class="form-control" value="<?php echo $surname; ?>">
              <span class="text-danger"><?php echo $surnameErr; ?></span>
            </div>
            <div class="form-group">
              <label for="email1">Email address</label>
              <input type="email" name="email" id="email1" class="form-control" value="<?php echo $email; ?>">
              <span class="text-danger"><?php echo $emailErr; ?></span>
            </div>
            <div class="form-group">
              <label for="un">Username</label>
              <input type="text" name="username" id="un" class="form-control" value="<?php echo $username; ?>">
              <span class="text-danger"><?php echo $usernameErr; ?></span>
            </div>
            <div class="form-group">
              <label for="pws">Password</label>
              <input type="password" name="password" id="psw" class="form-control" value="<?php echo $password; ?>">
              <span class="text-danger"><?php echo $passwordErr; ?></span>
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-primary w-100">Add</button>
            </div>

          </form>
        </div>
      </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script>
  </body>
<?php
} else {
  header("Location: /login.php");
}
?>


</html>