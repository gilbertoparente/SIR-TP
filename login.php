<?php

session_start();

if (empty($_POST) or empty($_POST["Email"]) or empty($_POST["Password_User"])) {
    print "<script>window.location.href='index.php';</script>";
    exit;
}

include('db/connection.php');
$pdo = pdo_connect_mysql();

$email_user = $_POST["Email_User"];
$password_user = $_POST["Password_User"];

$sql = "SELECT * FROM user 
    WHERE Email = '{$email_user}' AND Password_User = '{$password_user}'";

$resultado = $pdo->query($sql) or die(print_r($pdo->errorInfo(), true));


if ($resultado->rowCount() > 0) {
    
    $row = $resultado->fetch(PDO::FETCH_ASSOC);

    
    $_SESSION["Email_User"] = $email_user;
    $_SESSION["User_Name"] = $row->User_Name;
    $_SESSION["Role"] = $row->role;

    
    header("Location: dashboard.php");
    exit;
} else {
   
    print "<script>alert('Combinação de e-mail e senha incorreta. Tente novamente.');</script>";
    print "<script>window.location.href='index.php';</script>";
    exit;
}

?>
