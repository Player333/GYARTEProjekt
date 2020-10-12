<?php
require "header.php";
?>
<html>


<body>
    <main>
        <div class="container-fluid">
            <?php
            if (isset($_SESSION['userUid'])) {
                echo '<p>You are logged in</p>';
            } else {
                echo '<p>You are logged out</p>';
            }

            ?>

        </div>



    </main>
    <?php
    require "footer.php";
    ?>
</body>

</html>