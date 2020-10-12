<?php
require "header.php";
?>
<html>


<body>
    <main>
        <div class="container-fluid">
            <?php
            if (isset($_SESSION['userUid'])) {
                echo '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Temporibus exercitationem libero iste similique laudantium rem placeat obcaecati illo, doloremque nihil, quaerat debitis error ducimus ratione non harum voluptatibus! Necessitatibus optio beatae voluptates! Deleniti laudantium laboriosam vitae dolorem! Explicabo rerum laudantium cum quas corrupti obcaecati, optio maiores similique reprehenderit sint atque! Sint doloremque eveniet nihil inventore itaque officia! Reprehenderit ea, dicta exercitationem dolorum, dolorem consectetur enim natus nisi quis magni inventore neque. Quaerat dolorem vel nisi perspiciatis minima voluptatibus modi corrupti quod, totam quam quos. Earum reiciendis, magni molestias neque suscipit aspernatur? Saepe odio ducimus hic? Quos nihil vitae maiores consequatur!
                </p>';
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