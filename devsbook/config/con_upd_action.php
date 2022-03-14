<?php
session_start();

require "./connect.php";


$nome= filter_input(INPUT_POST,'nome');
$email= filter_input(INPUT_POST,'email');
$d_nasc= filter_input(INPUT_POST,'data_nasc');
$city= filter_input(INPUT_POST,'city');
$work= filter_input(INPUT_POST,'work');
$token=$_SESSION['token'];
$img= md5(time(),".png");


$_FILES;



move_uploaded_file($_FILES['img']['tmp_name'], './media/avatars/'.$img);


$sql=$pdo->prepare("INSERT INTO users (fotopes) VALUES (:img)");
$sql->bindValue(':img', $img);
$sql->execute();
    



/*
if($email && $nome && $d_nasc && $city && $work){
    $sql=$pdo->prepare("SELECT * FROM users");
    $sql->execute();

    $sql=$pdo->prepare("UPDATE users SET nome=:nome, cidade =:city, email=:email, datanasc=:data_nasc, trabalho=:work WHERE token=:token");
    $sql->bindValue(':email', $email);
    $sql->bindValue(':nome', $nome);
    $sql->bindValue(':city', $city);
    $sql->bindValue(':data_nasc', $d_nasc);
    $sql->bindValue(':work', $work);
    $sql->bindValue(':token', $token);
    $sql->execute();

    header("Location: ../index.php");
    exit;
}

*/
?>