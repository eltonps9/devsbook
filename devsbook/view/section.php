<?php
require_once( "usuario.php");

?>

<section class="container main">
        <aside class="mt-10">
            <nav>
                <a href="">
                    <div class="menu-item active">
                        <div class="menu-item-icon">
                            <img src="assets/images/home-run.png" width="16" height="16" />
                        </div>
                        <div class="menu-item-text">
                            Home
                        </div>
                    </div>
                </a>
                <a href="">
                    <div class="menu-item">
                        <div class="menu-item-icon">
                        <?php echo "<img src='../media/images/".$user['fotopes']." width='16' height='16'  '/>" ; ?>
                            

                        </div>
                        <div class="menu-item-text">
                            Meu Perfil
                        </div>
                    </div>
                </a>
                <a href="">
                    <div class="menu-item">
                        <div class="menu-item-icon">
                            <img src="assets/images/friends.png" width="16" height="16" />
                        </div>
                        <div class="menu-item-text">
                            Amigos
                        </div>
                        <div class="menu-item-badge">
                            33
                        </div>
                    </div>
                </a>
                <a href="">
                    <div class="menu-item">
                        <div class="menu-item-icon">
                            <img src="assets/images/photo.png" width="16" height="16" />
                        </div>
                        <div class="menu-item-text">
                            Fotos
                        </div>
                    </div>
                </a>
                <div class="menu-splitter"></div>
                <a href="./connect/config_update.php">
                    <div class="menu-item">
                        <div class="menu-item-icon">
                            <img src="assets/images/settings.png" width="16" height="16" />
                        </div>
                        <div class="menu-item-text">
                            Configura????es
                        </div>
                    </div>
                </a>
                <a href="">
                    <div class="menu-item">
                        <div class="menu-item-icon">
                            <img src="assets/images/power.png" width="16" height="16" />
                        </div>
                        <div class="menu-item-text">
                            Sair
                        </div>
                    </div>
                </a>
            </nav>
        </aside>
        