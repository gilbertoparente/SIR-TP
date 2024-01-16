<?php

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
unset($_SESSION["Email_User"]);
unset($_SESSION["Password_User"]);
unset($_SESSION["Role"]);
function pdo_connect_mysql() {
    $DATABASE_HOST = "localhost";
    $DATABASE_USER = "root";
    $DATABASE_PASS = "";
    $DATABASE_NAME ="recipesforall";


    try{
        $pdo = new PDO('mysql:host=' .
        $DATABASE_HOST . ';dbname'
        .  $DATABASE_NAME . ';charset=utf8', $DATABASE_USER .
        $DATABASE_PASS);
        
        echo ("connected!");
        return $pdo;
    }
    catch(PDOException $execution){
        exit("Failed to connect to database");
    }
}

?> 