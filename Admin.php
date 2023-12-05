<?php
    require_once 'DATABASE/DBSession.php';
    require_once 'DATABASE/DBSignUp_View.php';
    require_once 'DATABASE/Login_View.php';


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

    <header class="navbar">
        <a href="#" class="logo"><img src="ASSETS/IMAGES/tftg-ticon.png" alt=""></a>

        <ul class="navlist">
            <li><a href="#"> Product <i class="ri-arrow-down-s-line"></i></a></li>
            <li><a href="#"> Special Offers </a></li>
            <li><a href="#"> The Process </a></li>
            <li><a href="#"> Packing </a></li>
            <li><a href="#"> Career </a></li>
            <li><a href="#Footer"> About </a></li>
            <li><a href="#"> FAQ </a></li>

            <!-- LOGIN NAV-->
            <?php  if (!isset($_SESSION['user_id'])){ ?>

            <li><a href="#overlay" id="Reg"><button> Log In/Sign up </button></a></li>

            <?php }else{ ?>

                <div class="user">
        <li onclick="toggleUserContent()">
            <img src="ASSETS/IMAGES/user.png" width="25px;" style="position: relative; margin-right: 10px; top:5px;">
            <?php output_username(); ?> 
            
            
        </li>

        <div class="user-content" id="userContent">
                <li><i class="ri-shopping-cart-line"></i><span> Cart</span> </li>
            <hr class="user-setting">
                <form action="DATABASE/Logout.php" method="POST">
                    <li> <i class="ri-logout-box-r-line"></i><button type="submit"  id="Logout">  Logout</button> </li>
                </form>
        </div>
    </div>

    <?php } ?>

        </ul>

        <div class="bx bx-menu" style="color: black;" id="menu-icon"></div>
    </header>
</body>
</html>