<?php
    $username = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $pass = filter_var($_POST['pass'], FILTER_SANITIZE_STRING);

    $error = '';
    if(strlen($username) <= 3) {
        $error = 'Enter your name';
    }
    else if(strlen($email) <= 3) {
        $error = 'Enter your email';
    }
    else if (strlen($pass) <= 3) {
        $error = 'Enter your password';
    }

    if($error != '') {
        echo $error;
        exit();
    }

    $hash = "wecvkyukoljegiewjgjyj";
    $pass = md5($pass . $hash);

    require_once '../mysql_connect.php';

    $sql = 'INSERT INTO users(name, email, pass) VALUES(?, ?, ?)';
    $query = $pdo->prepare($sql);
    $query->execute([$username, $email, $pass]);

    echo 'Success';