<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Admin</title>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <meta name="theme-color" content="#563d7c">
</head>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01"
    aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <a class="navbar-brand" href="/">Brand</a>
    <a class="p-2" href="login.php">Logout</a>
  </div>

</nav>

<body>
  <div class="conrainer">
    <div class="row justify-content-center">
      <div class="col-sm-3 mt-5">
        <h1 class="pt-2 pb-2 text-center">Add user</h1>
        <form>
        <div class="form-group">
            <label>Title</label>
            <input type="text" class="form-control">
          </div>
          <div class="form-group">
            <label>First Name</label>
            <input type="text" class="form-control">
          </div>
          <div class="form-group">
            <label>Surname</label>
            <input type="text" class="form-control">
          </div>
          <div class="form-group">
            <label>Email address</label>
            <input type="email" class="form-control">
          </div>
          <div class="form-group">
            <label>Username</label>
            <input type="text" class="form-control">
          </div>
          <div class="form-group">
            <label>Password</label>
            <input type="password" class="form-control">
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-primary w-100">Add</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
    integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
  </script>
</body>

</html>