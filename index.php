<!DOCTYPE html>
<html lang="en">
<?php

require_once "./include/head.php";
?>
<body>
    <div class="container-fluid">
        <?php
            require_once "./include/nav.php";
        ?>
        <div class="row">
            <?php
                require_once "./include/sidebar.php";
                require_once "./include/Dashboard.php";
                
            ?>
        </div>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script src="Assets/js/main.js"></script>
</html>