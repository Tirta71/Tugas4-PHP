<?php
include_once 'webmenu.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Dono</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
 
       

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto">
                    <?php
                        //looping foreach dari webmenu.php
                        foreach ($menu_atas as $key => $value) {
                            echo "<li class='nav-item'>";
                            echo "<a class='nav-link' href='index.php?hal=$key'>$value</a>";
                            echo "</li>";
                        }
                    ?>
                </ul>
            </div>
        </nav>


    <!-- Bootstrap JS (optional, if you need Bootstrap JS functionality) -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
