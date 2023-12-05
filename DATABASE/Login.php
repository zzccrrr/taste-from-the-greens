<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    try {
        require_once 'DBHandler.php';
        require_once 'Login_Model.php';
        require_once 'Login_Controller.php';

        // ERRORS
        $errors = [];

        if (is_input_empty($username, $password)) {
            $errors["empty-input"] = "Punuin mo mga fields, brodie!";
        }

        $result = get_user($pdo, $username);

        if (is_username_wrong($result)) {
            $errors["login_incorrect"] = "May mali brodie..";
        }

        if (!is_username_wrong($result) && !empty($result) && is_password_wrong($password, $result["password"])) {
            $errors["login_incorrect"] = "May mali brodie..";
        }

        require_once 'DBSession.php';

        if ($errors) {
            $_SESSION["errors_signup"] = $errors;
            header("location: ../index.php");
            die();
        }




        $newSessionId = session_create_id();
        $sessionId = $newSessionId . "_" . $result['id'];
        session_id($sessionId);

        $_SESSION["user_id"] = $result['id'];
        $_SESSION["user_username"] = htmlspecialchars($result['username']);
        $_SESSION["last_regeneration"] = time();

        header("location: ../index.php?login=success");
        $pdo = null;
        $stmt = null;

        die();
    } catch (PDOException $e) {
        die("Query failed: " . $e->getMessage());
    }
} else {
    header("location: ../index.php");
    die();
}