<!DOCTYPE html>
<html lang="en">
<?php

require_once "./include/head.php";
require_once "./include/init.php";  
?>
<body>
    <div class="container-fluid">
        <?php
            require_once "./include/nav.php";
        ?>
        <div class="row">
            <?php
                require_once "./include/sidebar.php";
                
                if (Input::exists('get')) {
                    # code...
                    if (Input::check("display") && Input::get('display') == "Dashboard") {
                      # code...
                      require "screens/Dashboard.php";
                    }
                    if (Input::check("display") && Input::get('display') == "stdReg") {
                        # code...
                        require "screens/stdReg.php";
                      }
                    
                  }
                
            ?>
        </div>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script src="Assets/js/main.js"></script>
</html>