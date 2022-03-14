<?php
session_start();
require "../config/connect.php";





?>



<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title></title>
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
        <form method="POST" action="../config/cad_action.php">

        <div class="php">
            <p>
                <?php if($_SESSION['error']) {  echo  $_SESSION['error'];  $_SESSION['error'] = ""; }?>  
            </p>
        </div>


        <input placeholder="Digite seu nome completo" class="input" type="text" name="nome" required/>

        <input placeholder="Digite seu e-mail" class="input" type="email" name="email" required/>

        <input placeholder="Digite sua data de nascimento" class="input" type="text" name="data_nasc" />

        <input placeholder="Digite sua senha" class="input" type="password" name="password" required/>

        <input class="button" type="submit" value="cadastrar-se" />

        <a href="./login.php">Já possui uma conta, faça login</a>
        </form>
    </section>
</body>
</html>