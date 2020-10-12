<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link rel="stylesheet" href="loggincss.css" type="text/css">
  <title>Loggin System</title>
</head>

<body>
  
<script src="https://use.fontawesome.com/17008f01d4.js"></script>


  <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="index.php">
        <img class="logo-picture" src="images/genericlogo.png" alt="Logo">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li>
        </ul>

        <?php
        if (isset($_SESSION['userUid'])) {
          echo ' <p class="anändare" >Hej ' . $_SESSION["userUid"] . '</p> <form action="includes\logout.inc.php" method="POST">
          <button type="submit" name="logout-submit" class="btn btn-dark">Logout?</button>
        </form>';
        } else {
          echo '<a class="signup" href="signup.php">Signup!</a>
          <form class="form-inline my-2 my-lg-0" action="includes/login.inc.php" method="POST">
            <input class="form-control mr-sm-2" type="text" name="mailuid" placeholder="Email/Username...">
            <input class="form-control mr-sm-2" type="password" name="pwd" placeholder="Password...">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="login-submit">Login</button>
          </form>';
        }
        ?>
      </div>
    </nav> 
</header>

</body>

</html>