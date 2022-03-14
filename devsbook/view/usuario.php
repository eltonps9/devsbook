<?php 


if($_SESSION['token'] == false){
    $_SESSION['error']=" ";
    header("Location:./connect/cadastro.php");
    exit;
}

$user=[];
$token= $_SESSION['token'];
$sql=$pdo->query("SELECT * FROM users ");

if($token){
    $sql=$pdo->prepare("SELECT * FROM users WHERE token = :token");
    $sql->bindValue(':token', $token);
    $sql->execute();

    if($sql->rowCount() > 0){
        $user=$sql->fetch(PDO:: FETCH_ASSOC);

        
    }
}
?>