<?php

declare(strict_types = 1);

function get_username(object $pdo, string $username){
    $query = "SELECT user_username FROM user WHERE user_username = :username;";
    $stmt = $pdo -> prepare($query);
    $stmt -> bindParam(":username", $username);
    $stmt -> execute();

    $result = $stmt -> fetch(PDO::FETCH_ASSOC);
    return $result;
}
function get_email(object $pdo, string $email){
    $query = "SELECT user_email FROM user WHERE user_email = :email;";
    $stmt = $pdo -> prepare($query);
    $stmt -> bindParam(":email", $email);
    $stmt -> execute();

    $result = $stmt -> fetch(PDO::FETCH_ASSOC);
    return $result;
}

function set_user(object $pdo, string $username, string $password, string $email){
    $query = "INSERT INTO user (user_username, user_password, user_email) VALUES (:user_username, :user_password, :user_email);";
    $stmt = $pdo -> prepare($query);
    
    $options = [
        'cost' => 12
    ];

    $hashedPassword = password_hash($password, PASSWORD_BCRYPT, $options);
        
    $stmt -> bindParam(":user_username", $username);
    $stmt -> bindParam(":user_password", $hashedPassword);
    $stmt -> bindParam(":user_email", $email);
    $stmt -> execute();

}