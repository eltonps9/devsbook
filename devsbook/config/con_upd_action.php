<?php
session_start();

require_once("./connect.php");


$nome= filter_input(INPUT_POST,'nome');
$email= filter_input(INPUT_POST,'email');
$d_nasc= filter_input(INPUT_POST,'data_nasc');
$city= filter_input(INPUT_POST,'city');
$work= filter_input(INPUT_POST,'work');
$token=$_SESSION['token'];
$img= md5(time()). '.jpg';




if($_FILES === false){
    header("Location: ../connect/config_update.php");
    exit;
}elseif($email && $nome && $d_nasc && $city && $work){  //area onde vai verificar se as informações estao corretas
    
    $sql=$pdo->prepare("SELECT * FROM users");
    $sql->execute();

    

    $sql=$pdo->prepare("UPDATE users SET nome=:nome, fotopes=:img, cidade =:city, email=:email, datanasc=:data_nasc, trabalho=:work WHERE token=:token");
    $sql->bindValue(':email', $email);
    $sql->bindValue(':nome', $nome);
    $sql->bindValue(':city', $city);
    $sql->bindValue(':img', $img);
    $sql->bindValue(':data_nasc', $d_nasc);
    $sql->bindValue(':work', $work);
    $sql->bindValue(':token', $token);
    $sql->execute();
    

    
    move_uploaded_file($_FILES['img']['tmp_name'], "../media/images/".$img);

    header("Location: ../index.php");
    exit;
}else{

    
    header("Location: ../connect/config_update.php");
    exit;
}






?>