<?php

if($_SERVER["REQUEST_METHOD"] === "POST"){
    $username = $_POST["uname_field"];
    $password = $_POST["pword_field"];

    try{
        require_once('./dbh.inc.php');
        require_once('./login_model.inc.php');
        require_once('./login_contr.inc.php');

        // ERROR HANDLERS

        $errors = [];

        if(is_input_empty($username, $password)){
            $errors["empty_input"] = "Fill in all fields!";
        }

        $result = get_user($pdo, $username);

        if (is_username_wrong($result)){
            $errors["login_incorrect"] = "Incorrect login info!";
        }
        if(!is_username_wrong($result) && is_password_wrong($password, $result["user_password"])){
            $errors["login_incorrect"] = "Incorrect login info!";
        }


        require_once('./config_session.inc.php');

        if($errors){
            $_SESSION["errors_login"] = $errors;

            header('Location: ../../portal.php');
            die();
        }

        $newSessionId = session_create_id();
        $sessionId = $newSessionId . "_" . $result["user_id"];
        session_id($sessionId);

        $_SESSION["user_id"] = $result["user_id"];
        $_SESSION["user_username"] = htmlspecialchars($result["user_username"]);

        $_SESSION["last_regeneration"] = time(); 

        header('Location: ../../index.php?login=success');
        $pdo = null;
        $stmt = null;

        die();
    }
    catch(PDOException $e){
        die("Query failed: " . $e -> getMessage());
    }
}
else{
    header('Location: ../../portal.php');
    die();
}