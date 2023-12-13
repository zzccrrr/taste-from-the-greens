<?php
    require_once 'DATABASE/DBSession.php';
    require_once 'DATABASE/DBSignUp_View.php';
    require_once 'DATABASE/Login_View.php';
?>


<html lang="en">


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
<!--PRE-->
<div id="loader"></div>
<body>


<header class="navbar">
    <a href="#" class="logo"><img src="ASSETS/IMAGES/tftg-ticon.png" alt=""></a>

    <ul class="navlist">
        <li><a href="#Products"> Product</a></li>
        <li><a href="#Join"> Special Offers </a></li>
        <li><a href="#Explore"> Quality </a></li>
        <li><a href="#Footer"> About </a></li>

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
<!--BANNER-->

<section class="banner">
    <div class="banner-text">
        <h5></h5>
        <h4></h4>
        <h1><span class="Tastes">Tastes</span> <span class="fromthe">from the</span><br/>
            <span class="Greens">Greens</span></h1>
        <p></p>

        <a href="#break"> Explore our product <i class="ri-arrow-right-line"></i> </a>
        <a href="#Products" class="menu"> Menu </a>
    </div>

    <div class="banner-img">
        <img src="ASSETS/IMAGES/clearhero.png" alt="">
    </div>
</section>

<div class="icons">
    <a href="#"><i class="ri-instagram-line"></i></a>
    <a href="#"><i class="ri-facebook-line"></i></a>
    <a href="#"><i class="ri-twitter-line"></i></a>
</div>

<!--BREAK-->
<section id="break">
    <div class="break">
            <p>Tastes from the Greens</p> 
            <p>Tastes from the Greens</p> 
            <p>Tastes from the Greens</p>
            <p>Tastes from the Greens</p>
            <p>Tastes from the Greens</p>
            <p>Tastes from the Greens</p>
            <p>Tastes from the Greens</p>
            <p>Tastes from the Greens</p>
    </div>

</section>

<!--CONTENT-->

<section id="products" class="center" style="margin-bottom: 20%">
    <i class="ri-cup-fill" style="color: rgba(0,0,0,0.5)"></i>
    <h1> Explore the recent products</h1>
    <p> Our delectable drink options, including classic chocolate beverages, matcha variants, house specialties, and fruit smoothies.</p>


    <article class="content grid">

        <article>
            <div class="center">
                <div class="ImgHolder">
                    <img alt=""
                         src="ASSETS\IMAGES\chocomaltcreampuff.png" width="35%" style="margin-top: 20px;"/>
                    <p>Blend</p>
                    <h4>Chocomalt Cream Puff </h4>
                    <p><span>₱150</span></p>
                    <div>
                        <a href="#"><h3>Add to cart <i class="ri-arrow-right-line"></i></h3></a>
                        <a href="#" class="heart">
                        </a>
                    </div>
                </div>    
            </div>
        </article>

        <article>
            <div class="center">
                <div class="ImgHolder">
                    <img alt=""
                         src="ASSETS\IMAGES\matcha.png" width="35%" style="margin-top: 20px;"/>
                    <p>Blend</p>
                    <h4>Iced Matcha Green Tea Latte </h4>
                    <p><span>₱150</span></p>
                    <div>
                        <a href="#"><h3>Add to cart <i class="ri-arrow-right-line"></i></h3></a>
                        <a href="#" class="heart">
                        </a>
                    </div>
                </div>    
            </div>
        </article>

        <article>
            <div class="center">
                <div class="ImgHolder">
                    <img alt=""
                         src="ASSETS\IMAGES\cookiesandcream.png" width="35%" style="margin-top: 20px;"/>
                    <p>Blend</p>
                    <h4>Cookies and Cream Puff  </h4>
                    <p><span>₱150</span></p>
                    <div>
                        <a href="#"><h3>Add to cart <i class="ri-arrow-right-line"></i></h3></a>
                        <a href="#" class="heart">
                        </a>
                    </div>
                </div>    
            </div>
        </article>

        <article>
            <div class="center">
                <div class="ImgHolder">
                    <img alt=""
                         src="ASSETS\IMAGES\strawberry.png" width="35%" style="margin-top: 20px;"/>
                    <p>Blend</p>
                    <h4>Strawberry Deluxe</h4>
                    <p><span>₱150</span></p>
                    <div>
                        <a href="#"><h3>Add to cart <i class="ri-arrow-right-line"></i></h3></a>
                        <a href="#" class="heart">
                        </a>
                    </div>
                </div>    
            </div>
        </article>
    </article>

</section>   
<?php
    if (!isset($_SESSION['user_id'])){ ?>


<!--MORE PRODUCT-->
<section id="Explore">
    <div class="Explore">
        <div class="grid-1">
            <h1>Check out more of <br> our Products! </h1>
            <a href="#Products"> Explore our products <i class="ri-arrow-right-line"></i> </a>
        </div>
        <div class="grid-2">
            <img alt="" src="ASSETS\IMAGES\1placeholder.png" width="45%"/>
        </div>
    </div>



</section>

<!--QUALITY PRODUCTS-->
<section id="ProductQuality Explore">
    <article class="ProductQuality">
        <div class="grid-1">
            <img alt="" src="ASSETS/IMAGES/coffee-pile.png" width="470px"/>
            
        </div>
        <div class="grid-2">
            <h1>We care about the quality of our <span> products </span></h1><br>
            <p>Drinking coffee is one of the most global things you do each days here i can <br> spend a long time and comfortable time with this workspace tacilities</p>
                <div class="child-grid">

                        <img alt="" src="ASSETS/IMAGES/chat.png" width="100px;"/>
                        <div class="child-grid-text">
                            <h1>Active Community</h1>
                            <p>You can reach out whenever <br> you want!</p>
                        </div>
                        

                        <img alt="" src="ASSETS/IMAGES/recycle.png" width="100px;" />
                        <div class="child-grid-text">
                            <h1>Biodiversity friendly</h1>
                            <p>we recycle chena</p>
                        </div>


                        <img alt="" src="ASSETS/IMAGES/milktea.png" width="100px;" />
                        <div class="child-grid-text">
                            <h1>Premium Quality</h1>
                            <p>A premium milk tea is what <br> our customer deserves</p>
                        </div>
                        

                        <img alt="" src="ASSETS/IMAGES/affordability.png" width="100px;" />
                        <div class="child-grid-text">
                            <h1>Affordability</h1>
                            <p>Mura lang for u</p>
                        </div>
                </div>
        </div>
        
    </article>
</section>

<!--JOIN -->

<section id="Join">
    <div class="Join">
        <div>
            <h1>Join in and get <span> %25 OFF!</span></h1>
            <p>Register and subscribe to our newsletter and get 25% OFF discount code.</p>
            <a href="#overlay" id="Reg-1"> Register <i class="ri-arrow-right-line"></i> </a>
        </div>
    </div>
    





    <?php
        check_login_errors();
    ?>

<!--LOGIN -->


<div id="overlay"></div>

<div id="cont" class="cont">
        <div class="form sign-in">
            <h2>Welcome back,</h2>

            <form action="DATABASE/Login.php" method="POST"  autocomplete="off"> <!--LOGIN FORM --> 
                <label>
                    <span>Username</span>
                    <input name="username" type="text"/>
                </label>
                <label>
                    <span>Password</span>
                    <input type="password" name="password" />
                </label>
                <button type="submit" class="submit login-btn">Sign In</button>
            </form>   
            
            <button type="button" id="close" class="login-btn">I changed my mind</button>
        </div>



    <div class="sub-cont">
                <div class="img">
                <div class="img__text m--up">
                    <h2>New here?</h2>
                    <p>Sign up and get %25 OFF of your first purchase!</p>
                </div>
                <div class="img__text m--in">
                    <h2>One of us?</h2>
                    <p>Sign in back and see what we got in store for you!</p>
                </div>
                <div class="img__btn">
                    <span class="m--up">Sign Up</span>
                    <span class="m--in">Log In</span>
                </div>
                </div>
                <div class="form sign-up">
                <h2>Time to feel like home,</h2>

                <form action="DATABASE/DBSignUp.php" method="POST"  autocomplete="off">  <!--REG FORM (PHPVIEW) --> 
                    <?php
                    signup_inputs();
                    ?>
                        <button type="submit" name="reg_user" class="submit login-btn">Sign Up</button>
                </form>
            <button type="button" id="close-1" class="login-btn">I changed my mind</button>

            </div>
        </div>
</div>

       
 <!--PHP-->
<?php
check_signup_errors();
?>




</section>

</form>

   <?php } ?>


<!--PRODUCTS-->

<section id="Products" class="center" style="margin-bottom: 45%">
    <i class='bx bx-coffee-togo' style="color: rgba(0,0,0,0.5)"></i>
    <h1> Our Delectable Products</h1>
    <p> Choose from our wide variety of products ranging from classic coffee beverages, smooth boba milk teas, up all the way to our greeny matcha variants!</p>

    <article class="content grid">

        <article> <!--FIRST ROW-->
            <div class="center">
                <div class="ImgHolder">
                    <img alt=""
                         src="ASSETS\IMAGES\chocomaltcreampuff.png" width="35%" style="margin-top: 20px;"/>
                    <p>Blend</p>
                    <h4>Chocomalt Cream Puff </h4>
                    <p><span>₱150</span></p>
                    <div>
                        <a href="#"><h3>Add to cart <i class="ri-arrow-right-line"></i></h3></a>
                    </div>
                </div>    
            </div>
        </article>

        <article>
            <div class="center">
                <div class="ImgHolder">
                    <img alt=""
                         src="ASSETS\IMAGES\matcha.png" width="35%" style="margin-top: 20px;"/>
                    <p>Blend</p>
                    <h4>Iced Matcha Green Tea Latte </h4>
                    <p><span>₱150</span></p>
                    <div>
                        <a href="#"><h3>Add to cart <i class="ri-arrow-right-line"></i></h3></a>
                    </div>
                </div>    
            </div>
        </article>

        <article>
            <div class="center">
                <div class="ImgHolder">
                    <img alt=""
                         src="ASSETS\IMAGES\cookiesandcream.png" width="35%" style="margin-top: 20px;"/>
                    <p>Blend</p>
                    <h4>Cookies and Cream Puff  </h4>
                    <p><span>₱150</span></p>
                    <div>
                        <a href="#"><h3>Add to cart <i class="ri-arrow-right-line"></i></h3></a>
                    </div>
                </div>    
            </div>
        </article>

        <article>
            <div class="center">
                <div class="ImgHolder">
                    <img alt=""
                         src="ASSETS\IMAGES\strawberry.png" width="35%" style="margin-top: 20px;"/>
                    <p>Blend</p>
                    <h4>Strawberry Deluxe</h4>
                    <p><span>₱150</span></p>
                    <div>
                        <a href="#"><h3>Add to cart <i class="ri-arrow-right-line"></i></h3></a>
                    </div>
                </div>    
            </div>
        </article>

        <article> <!--SECOND ROW-->
            <div class="center">
                <div class="ImgHolder">
                    <img alt=""
                         src="ASSETS\IMAGES\wintermelon.png" width="35%" style="margin-top: 20px;"/>
                    <p>Blend</p>
                    <h4>Wintermelon </h4>
                    <p><span>₱150</span></p>
                    <div>
                        <a href="#"><h3>Add to cart <i class="ri-arrow-right-line"></i></h3></a>
                    </div>
                </div>    
            </div>
        </article>

        <article>
            <div class="center">
                <div class="ImgHolder">
                    <img alt=""
                         src="ASSETS\IMAGES\supremetaro.png" width="35%" style="margin-top: 20px;"/>
                    <p>Blend</p>
                    <h4>Supreme Taro</h4>
                    <p><span>₱150</span></p>
                    <div>
                        <a href="#"><h3>Add to cart <i class="ri-arrow-right-line"></i></h3></a>
                    </div>
                </div>    
            </div>
        </article>

        <article>
            <div class="center">
                <div class="ImgHolder">
                    <img alt=""
                         src="ASSETS\IMAGES\hazelcocoa.png" width="35%" style="margin-top: 20px;"/>
                    <p>Blend</p>
                    <h4>Hazel Cocoa</h4>
                    <p><span>₱150</span></p>
                    <div>
                        <a href="#"><h3>Add to cart <i class="ri-arrow-right-line"></i></h3></a>
                    </div>
                </div>    
            </div>
        </article>

        <article>
            <div class="center">
                <div class="ImgHolder">
                    <img alt=""
                         src="ASSETS\IMAGES\supremetaro.png" width="35%" style="margin-top: 20px;"/>
                    <p>Blend</p>
                    <h4>Butter Cookies</h4>
                    <p><span>₱150</span></p>
                    <div>
                        <a href="#"><h3>Add to cart <i class="ri-arrow-right-line"></i></h3></a>
                    </div>
                </div>    
            </div>
        </article>
    </article>

</section>

<section id="Products" class="center" style="margin-bottom: 45%">
<i class='bx bxs-coffee-bean' style="color: rgba(0,0,0,0.5)"></i>
    <h1 style="margin-top: -5px;"> Coffee Series</h1>

    <article class="content grid">

        <article> <!--FIRST ROW-->
            <div class="center">
                <div class="ImgHolder">
                    <img alt=""
                         src="ASSETS\IMAGES\coffee.png" width="35%" style="margin-top: 20px;"/>
                    <p>Brew</p>
                    <h4>Coffee Milk Tea </h4>
                    <p><span>₱150</span></p>
                    <div>
                        <a href="#"><h3>Add to cart <i class="ri-arrow-right-line"></i></h3></a>
                    </div>
                </div>    
            </div>
        </article>

        <article>
            <div class="center">
                <div class="ImgHolder">
                    <img alt=""
                         src="ASSETS\IMAGES\icedcoffee.png" width="35%" style="margin-top: 20px;"/>
                    <p>Brew</p>
                    <h4>Cold Brew Coffee Milk Tea </h4>
                    <p><span>₱150</span></p>
                    <div>
                        <a href="#"><h3>Add to cart <i class="ri-arrow-right-line"></i></h3></a>
                    </div>
                </div>    
            </div>
        </article>

        <article>
            <div class="center">
                <div class="ImgHolder">
                    <img alt=""
                         src="ASSETS\IMAGES\icedcoffee.png" width="35%" style="margin-top: 20px;"/>
                    <p>Brew</p>
                    <h4>White Iced Coffee  </h4>
                    <p><span>₱150</span></p>
                    <div>
                        <a href="#"><h3>Add to cart <i class="ri-arrow-right-line"></i></h3></a>
                    </div>
                </div>    
            </div>
        </article>

        <article>
            <div class="center">
                <div class="ImgHolder">
                    <img alt=""
                         src="ASSETS\IMAGES\coffee.png" width="35%" style="margin-top: 20px;"/>
                    <p>Brew</p>
                    <h4>Golden Iced Coffee</h4>
                    <p><span>₱150</span></p>
                    <div>
                        <a href="#"><h3>Add to cart <i class="ri-arrow-right-line"></i></h3></a>
                    </div>
                </div>    
            </div>
        </article>

        <article> <!--SECOND ROW-->
            <div class="center">
                <div class="ImgHolder">
                    <img alt=""
                         src="ASSETS\IMAGES\coffeecreampuff.png" width="35%" style="margin-top: 20px;"/>
                    <p>Brew</p>
                    <h4>Coffee Cream Puff </h4>
                    <p><span>₱150</span></p>
                    <div>
                        <a href="#"><h3>Add to cart <i class="ri-arrow-right-line"></i></h3></a>
                    </div>
                </div>    
            </div>
        </article>

        <article>
            <div class="center">
                <div class="ImgHolder">
                    <img alt=""
                         src="ASSETS\IMAGES\southcoffee.png" width="45%" style="margin-top: 20px;"/>
                    <p>Brew</p>
                    <h4>South Black</h4>
                    <p><span>₱50</span></p>
                    <div>
                        <a href="#"><h3>Add to cart <i class="ri-arrow-right-line"></i></h3></a>
                    </div>
                </div>    
            </div>
        </article>

        <article>
            <div class="center">
                <div class="ImgHolder">
                    <img alt=""
                         src="ASSETS\IMAGES\southgold.png" width="45%" style="margin-top: 20px;"/>
                    <p>Brew</p>
                    <h4>South Gold</h4>
                    <p><span>₱60</span></p>
                    <div>
                        <a href="#"><h3>Add to cart <i class="ri-arrow-right-line"></i></h3></a>
                    </div>
                </div>    
            </div>
        </article>

        <article>
            <div class="center">
                <div class="ImgHolder">
                    <img alt=""
                         src="ASSETS\IMAGES\southwhite.png" width="45%" style="margin-top: 20px;"/>
                    <p>Brew</p>
                    <h4>South White</h4>
                    <p><span>₱50</span></p>
                    <div>
                        <a href="#"><h3>Add to cart <i class="ri-arrow-right-line"></i></h3></a>
                    </div>
                </div>    
            </div>
        </article>
    </article>

</section>

 
<!--FOOTER-->

<Section id="Footer">

        <article>
        <h1><span class="Tastes">Tastes</span> <span class="fromthe">from the</span><br/>
            <span class="Greens">Greens</span></h1>
        </article>

        <article class="footer-child ">
        <h2> Privacy </h2>
            <p> Terms of use </p>
            <p> Privacy Policy </p>
            <p> Cookies </p>
        </article>

        <article class="footer-child">
        <h2> Services </h2>
            <p> Shop </p>
            <p> Order ahead </p>
            <p> Menu </p>
        </article>
        

        <article class="footer-child">
        <h2> About Us </h2>
            <p> Find a location </p>
            <p> About us </p>
            <p> Our Story </p>
        </article>

        <article class="footer-child">
            <h2> Social Media </h2>
        <a href="#" class="footer-icons"><i class="ri-instagram-line"></i></a>
        <a href="#" class="footer-icons"><i class="ri-facebook-line"></i></a>
        <a href="#" class="footer-icons"><i class="ri-twitter-line"></i></a>
        </article>
</section>

















<!--SCRIPTS-->
<script src="STYLES/JS/loader.js"></script>
<script src="STYLES/JS/home.js"></script>
<script> //STICKY
window.onscroll = function() {myFunction()};
    const navbar = document.getElementById("navbar");
    const sticky = navbar.offsetTop;

    function myFunction() {
        if (window.pageYOffset < sticky) {
            navbar.classList.remove("sticky");
        } else {
            navbar.classList.add("sticky")
        }
    }
</script>

<script> //REGISTER BUTTON
document.querySelector('.img__btn').addEventListener('click', function() {
  document.querySelector('.cont').classList.toggle('s--signup');
});
</script>

<script>//REGISTER OVERLAY
document.getElementById('Reg').addEventListener('click', function() {
    console.log('Button clicked!');
    document.getElementById('cont').style.display = 'block';
    document.getElementById('overlay').style.display = 'block';
    document.getElementsByTagName("BODY")[0].style.overflow = "hidden";
});

    document.getElementById('Reg-1').addEventListener('click', function() {
        document.getElementById('cont').style.display = 'block';
        document.getElementById('overlay').style.display = 'block';
        document.getElementsByTagName("BODY")[0].style.overflow = "hidden";
    });

    document.getElementById('close').addEventListener('click', function() {
        document.getElementById('cont').style.display = 'none';
        document.getElementById('overlay').style.display = 'none';
        document.getElementsByTagName("BODY")[0].style.overflow = "auto";
    });

    document.getElementById('close-1').addEventListener('click', function() {
        document.getElementById('cont').style.display = 'none';
        document.getElementById('overlay').style.display = 'none';
        document.getElementsByTagName("BODY")[0].style.overflow = "auto";
    });
  </script>

<script> //USER
    function toggleUserContent(event) {
        var userContent = document.getElementById("userContent");
        var user = document.querySelector(".user");

        userContent.classList.toggle("show");
        user.classList.toggle("active");

        event.stopPropagation();
    }

    document.addEventListener("click", function(event) {
        var userContent = document.getElementById("userContent");
        var user = document.querySelector(".user");
        var targetElement = event.target;

        if (targetElement.tagName !== "LI") {
            userContent.classList.remove("show");
            user.classList.remove("active");
        }
    });
</script>

</body>

</html>