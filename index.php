<?php
require "header.php";
?>
<html>


<body>
    <main>
        <div class="container-fluid">
            <?php
            if (isset($_SESSION['userUid'])) {
                echo '<p>Lorem</p>';
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