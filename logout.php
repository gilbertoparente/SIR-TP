<?php

    session_start();
    unset($_SESSION["Email_User"]);
    unset($_SESSION["Password_User"]);
    unset($_SESSION["Role"]);
    session_destroy();
    header("Locaction: index.php");
    exit;