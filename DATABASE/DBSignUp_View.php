<?php

declare(strict_types=1);

function signup_inputs(){
    
    if(isset($_SESSION["signup_data"]["username"]) && isset($_SESSION["errors_signup"]["username_taken"])) {
        echo '
        <label>
        <span>Name</span>
        <input type="text" name="username" placeholder="Username" value="' . $_SESSION["signup_data"]["username"] . '"/>
        </label>';
    } else {
        echo '
        <label>
            <span>Name</span>
            <input type="text" name="username" placeholder="Username" />
        </label>
        ';
    }

    if(isset($_SESSION["signup_data"]["email"]) && isset($_SESSION["errors_signup"]["email_used"]) && isset($_SESSION["errors_signup"]["invalid_email"])) {
        echo '
        <label>
            <span>Email</span>
            <input type="email" name="email" placeholder="Email@gmail.com" value="' . $_SESSION["signup_data"]["email"] . '"/>
        </label>';
    } else {
        echo '
        <label>
            <span>Email</span>
            <input type="email" name="email" placeholder="Email@gmail.com"/>
        </label>
        ';
    }
    echo'
    <label>
        <span>Password</span>
        <input type="password" name="password" placeholder="Password" />
    </label>
';

}


function check_signup_errors(){
    if(isset($_SESSION['errors_signup'])){
        $errors = $_SESSION['errors_signup'];

        echo '<br>';

        foreach($errors as $error){
            echo '<script>alert("' . $error . '");</script>';
        }

        unset($_SESSION['errors_signup']);
    }else if (isset($_GET["signup"]) && $_GET["signup"] === "success") {
        echo '<br>';
        echo '<script>alert("Thank you for signing up! Please Sign up");</script>';
    }
}