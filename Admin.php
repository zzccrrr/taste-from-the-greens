<?php
    require_once 'DATABASE/DBSession.php';
    require_once 'DATABASE/DBSignUp_View.php';
    require_once 'DATABASE/Login_View.php';


    if (!isset($_SESSION["user_username"]) || $_SESSION["user_username"] !== "admin") {
        header("Location: Index.php");
        exit;
    }

?>

<html>


<head>
    <title> Tastes from the Greens </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=2.00, minimum-scale=1.00">
    <link rel="icon" type="image/x-icon" href="ASSETS/IMAGES/tftg-ticon.png">
    <link rel="stylesheet" type="text/css" href="STYLES/CSS/Home.css">
   <!--FONT AWESOME-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"> 
    <!-- BOXICONS-->
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"> 
    <!-- REMIXICON-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.css"> 
    <!--FONTS-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href='https://fonts.googleapis.com/css?family=Great+Vibes|Noto+Sans|Oswald|Raleway|Poppins' rel='stylesheet'>

    
    
</head>

<body>

</html>