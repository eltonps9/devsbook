<?php
session_start();

require "./connect.php";

$nome= filter_input(INPUT_POST,'nome');
$email= filter_input(INPUT_POST,'email');
$d_nasc= filter_input(INPUT_POST,'data_nasc');
$pass= filter_input(INPUT_POST,'password');
$token= md5(time());

if($email){
    $sql=$pdo->prepare("SELECT * FROM users WHERE email=:email");
    $sql->bindValue(':email', $email);
    $sql->execute();

    if($sql->rowCount() === 0 ){
        
        $sql=$pdo->prepare("INSERT INTO users (email, nome, senha, token) VALUES (:email, :nome, :senha, :token)");
        $sql->bindValue(':email',$email);
        $sql->bindValue(':nome', $nome);
        $sql->bindValue(':senha', $pass);
        $sql->bindValue(':token', $token);
        $sql->execute();

        $_SESSION['token'] = $token;
        header("Location:../index.php");
        exit;

    }else{
        header("Location:../connect/cadastro.php");
        exit;
    
    }
}

?>