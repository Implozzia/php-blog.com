<?php
    $username = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $pass = filter_var($_POST['pass'], FILTER_SANITIZE_STRING);

    if(strlen($username) <= 3)
        exit();
    else if(strlen($email) <= 3)
        exit();
    else if (strlen($pass) <= 3)
        exit();

    $hash = "wecvkyukoljegiewjgjyj";
    $pass = md5($pass . $hash);

    $user = 'root';
    $password = 'root';
    $db = 'blog';
    $host = 'localhost';

    $dsn = 'mysql:host='.$host.';dbname='.$db;
    $pdo = new PDO($dsn, $user, $password);
    $sql = 'INSERT INTO users(name, email, pass) VALUES(?, ?, ?)';
    $query = $pdo->prepare($sql);
    $query->execute([$username, $email, $pass]);