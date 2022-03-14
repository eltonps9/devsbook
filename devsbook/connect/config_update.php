
<?php
session_start();
require "../config/connect.php";
require_once("../view/usuario.php");

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Devsbook-update</title>
    <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1"/>
    <link rel="stylesheet" href="../assets/css/login.css" />
</head>
<body>
    <header>
        <div class="container">
            <a href=""><img src="../assets/images/devsbook_logo.png" /></a>
        </div>
    </header>
    <section class="container main">
        <form method="POST" action="../config/con_upd_action.php" enctype="multipart/form-data" >

            <input  class="input" type="hidden" name="id" />

            <input class="input-foto" type="file" name="img"/>

            <input value="<?=$user['nome'];?>" class="input" type="text" name="nome" />

            <input value="<?=$user['email'];?>" class="input" type="email" name="email" />

            <input value="<?=$user['datanasc']?>" class="input" type="text" name="data_nasc" />
            
            <input value="<?=$user['cidade'];?>" class="input" type="text" name="city" />

            <input value="<?=$user['trabalho'];?>" class="input" type="text" name="work" />

            <? $token= $_SESSION['token'];?>

            <input class="button" type="submit" value="SALVAR" />

        </form>
    </section>
</body>
</html>

