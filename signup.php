<?php
require "header.php";
?>

<main>
    <div class="container-fluid">
        <h1>Signup</h1>
        <?php
        if (isset($_GET['error'])) {
            if ($_GET['error'] == "emptyfields") {
                echo '<div class="alert alert-danger" role="alert">
                    Fill all fields!
                  </div>';
            } elseif ($_GET['error'] == "invaliduidmail") {
                echo '<div class="alert alert-danger" role="alert">
                    Invalid Username and Email!
                  </div>';
            } elseif ($_GET['error'] == "invaliduid") {
                echo '<div class="alert alert-danger" role="alert">
                    Invalid Username!
                  </div>';
            } elseif ($_GET['error'] == "invalidmail") {
                echo '<div class="alert alert-danger" role="alert">
                    Invalid Email!
                  </div>';
            } elseif ($_GET['error'] == "passwordcheck") {
                echo '<div class="alert alert-danger" role="alert">
                    Your passwords dont match!
                  </div>';
            } elseif ($_GET['error'] == "usertaken") {
                echo '<div class="alert alert-danger" role="alert">
                    Username already taken!
                  </div>';
            }
        } else if (isset($_GET['signup'])) {
            if ($_GET['signup'] == "succes") {
                echo '<div class="alert alert-success" role="alert">
                Signup Succesful!
              </div>';
            }
        }


        ?>
        <form action="includes/signup.inc.php" method="post">
            <div class="form-group">
                <input class="form-control" type="text" name="mail" placeholder="Email">
                <input class="form-control" type="text" name="uid" placeholder="Username">
                <input class="form-control" type="password" name="pwd" placeholder="Password">
                <input class="form-control" type="password" name="pwd-repeat" placeholder=" Repeat Password">
                <button class="btn btn-primary " type="submit" name="signup-submit">Signup</button>
            </div>

        </form>
    </div>

</main>
<?php
    require "footer.php";
    ?>