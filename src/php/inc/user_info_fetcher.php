<?php

if($_SERVER["REQUEST_METHOD"] === "POST"){
    
}

function get_user(object $pdo){
    $query = "SELECT user_id FROM user WHERE 1";
    $stmt = $pdo -> prepare($query);
    $stmt -> execute();

    $result = $stmt -> fetch(PDO::FETCH_ASSOC);
    return $result;
}