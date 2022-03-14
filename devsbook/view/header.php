<?php 

require "usuario.php";

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title></title>
    <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1"/>
    <link rel="stylesheet" href="./assets/css/style.css" />

</head>
<body>



    <header>
        <div class="container">
            <div class="logo">
                <a href=""><img src="assets/images/devsbook_logo.png" /></a>
            </div>
            <div class="head-side">
                <div class="head-side-left">
                    <div class="search-area">
                        <form method="GET">
                            <input type="search" placeholder="Pesquisar" name="s" />
                        </form>
                    </div>
                </div>
                <div class="head-side-right">
                    <a href="" class="user-area">
                        <div class="user-area-text"><?=$user['nome'];?></div>
                        <div class="user-area-icon">
                        <?php echo "<img src='assets/images/".$user['fotopes']." '/>" ; ?>


                        </div>
                    </a>
                    <a href="./connect/logout.php" class="user-logout">
                        <img src="assets/images/power_white.png" />
                    </a>
                </div>
            </div>
        </div>
    </header>