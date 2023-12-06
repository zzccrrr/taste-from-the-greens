<?php
    require_once 'DATABASE/DBSession.php';
    require_once 'DATABASE/DBSignUp_View.php';
    require_once 'DATABASE/Login_View.php';

    if (!isset($_SESSION["user_id"]) || $_SESSION["user_username"] !== 'admin') {
        header("location: index.php");

$hostname = 'localhost';
$username = 'root';
$password = '';

// Create a new mysqli object
$mysqli = new mysqli($hostname, $username, $password);

// Check for errors
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

// Run a SQL query
$result = $mysqli->query("SELECT * FROM mytable");

// Print the results
while ($row = $result->fetch_assoc()) {
    var_dump($row);
}
    }


?>

<html>


<head>
    <title> Tastes from the Greens </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=2.00, minimum-scale=1.00">
    <link rel="icon" type="image/x-icon" href="ASSETS/IMAGES/tftg-ticon.png">
    <link rel="stylesheet" type="text/css" href="STYLES/CSS/Admin.css">
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
    <nav class="navbar">
        <ul class="navbar-nav">
            <li class="nav-item padding20">
                    <a href="#" class="logo"><img src="ASSETS/IMAGES/tftg-icon.png" alt=""></a>
            </li>

            <li class="nav-item active">
                    <a href="#Users" class="nav-link active"><p class="link-text"><i class="ri-user-fill"></i>Users</p></a>
            </li>

            <li class="nav-item">
                    <a href="#Orders" class="nav-link"><p class="link-text"><i class='bx bx-coffee-togo'></i>Orders</p></a>
            </li>


            <li class="nav-item u-bottom padding20">  <!-- LAST CHILD-->
  
                <?php  if (isset($_SESSION['user_id'])){ ?>
                    <div class="user">
                        <img src="ASSETS/IMAGES/user.png" width="20px;" style="position: relative; top:5px;">
                        <?php output_username(); ?> 
                    </div>
                <?php } ?>
                <li>
                    <hr class="header">
                    <form action="DATABASE/Logout.php" method="POST">
                    <li class="Logout"> 
                        <i class="ri-logout-box-r-line"></i><button type="submit"  id="Logout">&nbsp;Logout</button> 
                    </li>
                    </form>
                </li>
            </li>
        </ul>
    </nav>



    <div id="Users" class="content">
    <table>
        <?php
            $conn = mysqli_connect("localhost", "username", "password", "database");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Select the user from the database
$result = mysqli_query($conn, "SELECT id, username, email FROM users WHERE id = 1");

// Fetch the user data
$user = mysqli_fetch_assoc($result);

// Echo the user data
echo "ID: " . $user['id'] . "\n";
echo "Username: " . $user['username'] . "\n";
echo "Email: " . $user['email'] . "\n";

// Close the connection
mysqli_close($conn);
        ?>
    </table>
    </div>

    <div id="Orders" class="content">
    bbbbbbbbbb
    </div>






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
<script> //NAV
const navItems = document.querySelectorAll('.nav-item');

navItems.forEach(item => {
  item.addEventListener('click', () => {
    navItems.forEach(item => {
      item.classList.remove('active');
    });
    
    item.classList.add('active');
  });
});
</script>

<script>//DIV
const links = document.querySelectorAll('.nav-link');
const contents = document.querySelectorAll('.content');

links.forEach(link => {
  link.addEventListener('click', (event) => {
    event.preventDefault();
    const targetId = link.getAttribute('href').substring(1);

    contents.forEach(content => {
      if (content.id === targetId) {
        content.style.display = 'block';
      } else {
        content.style.display = 'none';
      }
    });
  });
});
</script>
</body>
</html>