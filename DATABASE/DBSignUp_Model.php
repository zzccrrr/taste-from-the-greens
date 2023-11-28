<?php

declare(strict_types=1);

function get_username(PDO $pdo, string $username){
    $stmt = $pdo->prepare("SELECT * FROM users WHERE username = :username");
    $stmt->bindParam(":username", $username, PDO::PARAM_STR);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

function get_email(PDO $pdo, string $email){
    $stmt = $pdo->prepare("SELECT * FROM users WHERE email = :email");
    $stmt->bindParam(":email", $email, PDO::PARAM_STR);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

function set_user(object $pdo, string $email, string $password, string $username){
    $query = "INSERT INTO users (username, password, email) VALUES (:username, :password, :email)";
    $stmt = $pdo->prepare($query);
    $options = [
        'cost' => 12
    ];
    $hashedpassword = password_hash($password, PASSWORD_BCRYPT, $options);

    $stmt->bindParam(":username", $username);
    $stmt->bindParam(":password", $hashedpassword);
    $stmt->bindParam(":email", $email);
    $stmt->execute();
}
