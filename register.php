<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
    include('db/connection.php');

   
    $pdo = pdo_connect_mysql();

  
    $user_name = $_POST["User_Name"];
    $email = $_POST["Email"];
    $password_user = password_hash($_POST["Password_User"], PASSWORD_DEFAULT);

  
    $sql = "INSERT INTO user (User_Name, Email, Password_User) VALUES (?, ?, ?)";

    try {
        
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$user_name, $email, $password_user]);

      
        header("Location: index.php");
        exit;
    } catch (PDOException $e) {
        echo("Erro ao inserir dados no banco de dados: " . $e->getMessage());
        exit;
    }
}

?>
