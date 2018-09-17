<?php

session_start();
include './views/private/login.php';

$error = "";

if (isset($_SESSION['username'])) {
    if ($_SESSION['username'] == 'admin') {
        header("Location: ./views/admin_page.php");
    } else {
        header("location: ./views/dashboard.php");
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Pos-sustav</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="./css/bootstrap.min.css" >

    <!-- Custom style -->
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand fax-header-font">Pos-sustav</a>

      <!-- Za alignament, nevidljivi button -->
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link disabled"><span class="sr-only">(current)</span></a>
        </li>
      </ul>

      <!-- Prijava button -->
      <ul class="navbar-nav">
        <li class="nav-item dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Prijava
              </button>


          <div class="dropdown-menu dropdown-menu-right">

            <form class="px-4 py-3" method="POST" action="">

              <div class="form-group">
                <label for="exampleInputUsername1">Username</label>
                  <input name="username" type="text" class="form-control" id="exampleInputUsername1" aria-describedby="usernameHelp" placeholder="Enter username" required>
              </div>

              <div class="form-group">
                <label for="exampleDropdownFormPassword1">Password</label>
                <input name="password" type="password" class="form-control" id="exampleDropdownFormPassword1" placeholder="Password">
              </div>

              <input name="submit" type="submit" class="btn btn-primary" value="Login">


            </form>

            <div class="dropdown-divider"></div>
            <span class="dropdown-item">Username: dummy</span>
            <span class="dropdown-item">Password: dummy</span>

          </div>
        </li>
      </ul>
    </nav>


    <div style="display:none" class="alert alert-dismissible alert-danger col-2 float-right">
      <button type="button" class="close" data-dismiss="alert">&times;</button>
      <strong>Invalid username or password!</strong>
    </div>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
</body>
</html>
