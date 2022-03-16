<?php
session_start();

require "./connect.php";

$email= filter_input(INPUT_POST,'email');
$pass= filter_input(INPUT_POST,'password');
$token= md5($pass);


if($email){
    $sql=$pdo->prepare("SELECT * FROM users WHERE email=:email && senha= :pass");
    $sql->bindValue(':email', $email);
    $sql->bindValue(':pass', $pass);
    $sql->execute();

    if($sql->rowCount() > 0 ){
        
        $sql= $pdo->prepare("UPDATE users SET token = :token WHERE email = :email");
        $sql->bindValue(':email', $email);
        $sql->bindValue(':token', $token);
        $sql->execute();


        



        
        $_SESSION['token']= $token;


        header("Location:../index.php");
        exit;
        

    }else{
        $_SESSION['error']='email e/ou senha inexistente.';

        header("Location:../connect/cadastro.php");
        exit;
    
    }
}else{
    $_SESSION['error'] = "Preencha o formulario corretamente";
    header("Location:../connect/login.php");
    exit;
}

?>