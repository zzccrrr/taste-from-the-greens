<?php

if($_SERVER["REQUEST_METHOD"] === "POST"){

    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    try{
        require_once 'DBHandler.php';
        require_once 'DBSignUp_Model.php';
        require_once 'DBSignUp_Controller.php';
        

        //ERRORS
        $errors = [];

            if(is_input_empty($username, $email, $password)){
                $errors["empty-input"] = "Kulang brodie!";

            }
            if(is_email_invalid($email)){
                $errors["invalid_email"] = "Invalid email mo brodie";

            }
            if(is_username_taken($pdo, $username)){
                $errors["username_taken"] = "Taken na ang username, brodie.";

            }
            if(is_email_registered($pdo, $email)){
                $errors["email_used"] = "Taken na siya.. este ang email, aybol";

            }

            require_once 'DBSession.php';
            
            if($errors){
                $_SESSION["errors_signup"] = $errors;

                $signupData = [
                    "username" => $username,
                    "email" => $email

                ];
                $_SESSION["signup_data"] = $errors;

                header("location: ../index.php");
                die();
            }

            create_user($pdo, $email, $password, $username);
            header("location: ../Admin.php?signup=success");
            $pdo = null;
            $stmt = null;

            die();

        } catch(PDOException $e){
            
            die("Query failed: " . $e->getMessage());
            }

}else{
    header("location: ../Admin.php");
    die();
}
