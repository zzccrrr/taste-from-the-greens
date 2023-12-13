<?php
    require_once 'DATABASE/DBSession.php';
    require_once 'DATABASE/DBSignUp_View.php';
    require_once 'DATABASE/Login_View.php';
    include_once 'DATABASE/dbh.php';


    if (!isset($_SESSION["user_id"]) || $_SESSION["user_username"] !== 'admin') {
        header("location: index.php");
        exit();
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    

    
    
</head>

<body>
    <nav class="navbar">
        <ul class="navbar-nav">
            <li class="padding20">
                    <a href="#" class="logo"><img src="ASSETS/IMAGES/tftg-iconw.png" alt=""></a>
            </li>

            <li class="nav-item active">
                    <a href="#Users" class="nav-link"><p class="link-text"><i class="ri-user-fill"></i>Users</p></a>
            </li>

            <li class="nav-item">
                    <a href="#Orders" class="nav-link"><p class="link-text"><i class='bx bx-coffee-togo'></i>Orders</p></a>
            </li>

            <li class="nav-item">
                    <a href="#Products" class="nav-link"><p class="link-text"><i class="ri-box-3-fill"></i>Products</p></a>
            </li>
            <li class="nav-item">
                    <a href="#Ingredients" class="nav-link"><p class="link-text"><i class='bx bxs-coffee-bean'></i>Ingredients</p></a>
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

<section class="centered content-section">
        <div id="Users" class="content"  style="display: block">
          <div class="content-text">
            <h2> Users </h2>
            <p> List of all users </p>
          </div>
                  <button id="Reg" class="add" style="margin-left: 25px; margin-top:8px;"><i class="ri-add-fill"></i></button>
            <?php
              $sql = "SELECT * FROM users";
              $result = mysqli_query($conn, $sql);
              $resultCheck = mysqli_num_rows($result);

              if ($resultCheck > 0) {
                  echo "<table>";
                  echo "<tr><th>ID</th><th>Username</th><th>Email</th><th>Edit</th><th>Delete</th></tr>";

                  $rowNumber = 0;

                  while ($row = mysqli_fetch_assoc($result)) {
                      $rowNumber++;
                      $rowColor = $rowNumber % 2 == 0 ? "even" : "odd";

                      echo "<tr class='$rowColor'>";
                      echo "<td>" . $row['id'] . "</td>";
                      echo "<td class='middle'>" . $row['username'] . "</td>";
                      echo "<td class='middle'>" . $row['email'] . "</td>";
            ?>

                    
                      <td class='middle button'> <button class='Edit' onclick="setFlagAndReload('admin.php?edit=<?=$row['id'];?>');"><a> <i class='ri-edit-fill'></i> </a> </button> </td>
                      <td class='right button'> <button> <a href="DATABASE/delete.php?delete=<?=$row['id'];?>"> <i class='ri-delete-bin-7-fill'></i> </a> </button> </td>
              <?php
                        echo "</tr>";
                    }

                    echo "</table>";
                }
              ?>
        </div>



        <div id="Orders" class="content">
        <div class="content-text">
            <h2> Orders </h2>
            <p> List of all Orders </p>
          </div>
          <button class="add" style="margin-left: 25px; margin-top:8px;"><i class="ri-add-fill"></i></button>
  <?php
            $sql = "SELECT * FROM orders";
            $result = mysqli_query($conn, $sql);
            $resultCheck = mysqli_num_rows($result);

            if ($resultCheck > 0) {
                echo "<table>";
                echo "<tr><th>Order ID</th><th>Recipient</th><th>Product</th><th>Quantity</th><th>Total</th><th>Date</th><th>Edit</th><th>Delete</th></tr>";

                $rowNumber = 0;

                while ($row = mysqli_fetch_assoc($result)) {
                    $rowNumber++;
                    $rowColor = $rowNumber % 2 == 0 ? "even" : "odd";

                    echo "<tr class='$rowColor'>";
                    echo "<td>" . $row['ID'] . "</td>";
                    echo "<td class='middle'>" . $row['Recipient'] . "</td>";
                    echo "<td class='middle'>" . $row['Product'] . "</td>";
                    echo "<td class='middle'>" . $row['Quantity'] . "</td>";
                    echo "<td class='middle'>" . $row['Total'] . "</td>";
                    echo "<td class='middle'>" . $row['Date'] . "</td>";
                    ?>
                      <td class='middle button'> <button ><a> <i class='ri-edit-fill'></i> </a> </button> </td>
                      <td class='right button'> <button> <a> <i class='ri-delete-bin-7-fill'></i> </a> </button> </td>


                    <?php
                    echo "</tr>";
                }

                echo "</table>";
            }
          ?>
        </div>

    


  <div id="Products" class="content">
          <div class="content-text">
            <h2> Products </h2>
            <p> List of all products </p>
          </div>
          <button class="add" style="margin-left: 25px; margin-top:8px;"><i class="ri-add-fill"></i></button>
  <?php
            $sql = "SELECT * FROM products";
            $result = mysqli_query($conn, $sql);
            $resultCheck = mysqli_num_rows($result);

            if ($resultCheck > 0) {
                echo "<table>";
                echo "<tr><th>ID</th><th>Name of Product</th><th>Price</th><th>Edit</th><th>Delete</th></tr>";

                $rowNumber = 0;

                while ($row = mysqli_fetch_assoc($result)) {
                    $rowNumber++;
                    $rowColor = $rowNumber % 2 == 0 ? "even" : "odd";

                    echo "<tr class='$rowColor'>";
                    echo "<td>" . $row['ID'] . "</td>";
                    echo "<td class='middle'>" . $row['Name'] . "</td>";
                    echo "<td class='middle'>" . $row['Price'] . "</td>";
                    ?>
                      <td class='middle button'> <button ><a> <i class='ri-edit-fill'></i> </a> </button> </td>
                      <td class='right button'> <button> <a> <i class='ri-delete-bin-7-fill'></i> </a> </button> </td>


                    <?php
                    echo "</tr>";
                }

                echo "</table>";
            }
          ?>
  </div>

  <div id="Ingredients" class="content">
    <article class="grid">
          <div class="content-text">
            <h2> Ingredients</h2>
            <p> Input available ingredients to see what products could be made </p>
            <button class="add" style="margin-top:8px;"><i class="ri-add-fill"></i></button>
         
          <table style="width:20%; margin-left: -50px;">
          <tr><th>Ingredient</th><th>Available Amount</th><th>Measurement</th><th>Per cup:</th><th>Small</th><th>Regular</th><th>Large</th><th>Edit</th><th>Delete</th></tr>
            <tr>
              <th>Sugar <br/></th>
              <td>~57 </td>
              <td class="middle">Grams <span>(g)</span></td>
              <td class="middle"><!--Interval--></td>
              <td class="middle">~42<span>g</span></td>
              <td class="middle">~57<span>g</span></td>
              <td class="middle">~60<span>g</span></td>
              <td class='middle button'> <button ><a> <i class='ri-edit-fill'></i> </a> </button> </td>
              <td class='right button'> <button> <a> <i class='ri-delete-bin-7-fill'></i> </a> </button> </td>
            </tr>
            <tr>
              <th>Milk <br/></th>
              <td>32<span>oz</span></td>
              <td class="middle">Ounce <span>(oz)</span</td>
              <td class="middle"><!--Interval--></td>
              <td class="middle">~8<span>oz</span></td>
              <td class="middle">~8<span>oz</span></td>
              <td class="middle">~8.5<span>oz</span></td>
              <td class='middle button'> <button ><a> <i class='ri-edit-fill'></i> </a> </button> </td>
              <td class='right button'> <button> <a> <i class='ri-delete-bin-7-fill'></i> </a> </button> </td>
            </tr>
            <tr>
            <th>Jasmine Tea Leaves <br/></th>
              <td>64<span>pieces</span></td>
              <td class="middle">Tablespoon<span>(tbsp)</span</td>
              <td class="middle"><!--Interval--></td>
              <td class="middle">~1<span>tbsp</span></td>
              <td class="middle">~1<span>tbsp</span></td>
              <td class="middle">~1<span>tbsp</span></td>
              <td class='middle button'> <button ><a> <i class='ri-edit-fill'></i> </a> </button> </td>
              <td class='right button'> <button> <a> <i class='ri-delete-bin-7-fill'></i> </a> </button> </td>
            </tr>
            <tr>
            <th>Strawberry <br/><span>Measured as/for Strawberry Syrup</span></th>
              <td>32<span>pieces</span></td>
              <td class="middle">Tablespoon<span>(tbsp)</span</td>
              <td class="middle"><!--Interval--></td>
              <td class="middle">~6<span>tbsp</span></td>
              <td class="middle">~7<span>tbsp</span></td>
              <td class="middle">~8<span>tbsp</span></td>
              <td class='middle button'> <button ><a> <i class='ri-edit-fill'></i> </a> </button> </td>
              <td class='right button'> <button> <a> <i class='ri-delete-bin-7-fill'></i> </a> </button> </td>
            </tr>
          </table>
          </div>
          <div class="content-text">
            <h2> Output</h2>
            <p> List of Milkteas that can be served</p>


                <section class="grid-output" style="margin-top: 80px; margin-right: 40px;">
                  <article>
                    <div class="center">
                      <div class="ImgHolder">
                        <img src="ASSETS\IMAGES\strawberry.png" width="35%" style="margin-left: 0px;"/>
                        <h4>Strawberry Deluxe</h4>
                        <p>₱150</p>
                        <ul>
                          <li>~8oz Milk</li>
                          <li>1 tbsp Tea</li>
                          <li>~7 tbsp Strawberry Syrup</li>
                        </ul>
                      </div>    
                    </div>
                  </article>
            
            
                  <article>
                    <div class="center">
                      <div class="ImgHolder">
                        <img src="ASSETS\IMAGES\brownsugar.png" width="35%" style="margin-left: 0px;"/>
                        <h4>Brown Sugar Milk Tea</h4>
                        <p>₱150</p>
                        <ul>
                          <li>~8oz Milk</li>
                          <li>1 tbsp Tea</li>
                          <li>~2 cups brown sugar</li>
                        </ul>
                      </div>    
                    </div>
                  </article>

                </section>

    </article>
  </div>
</section>

<section>
<div id="overlay"></div>


<div id="cont" class="cont">
  
<?php 
include "DATABASE/dbh.php";
$id = $_GET['edit'];
$sql = "SELECT * FROM users WHERE id = '$id'";
$query = $conn->query($sql);
$row = $query->fetch_assoc();
?>

<form method="POST" action="DATABASE/edit.php" autocomplete="off">
<label for="id">ID:</label>
    <input type="text" id="id" name="id" value="<?=$row['id']?>">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" value="<?=$row['username']?>">
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" value="<?=$row['email']?>"> <br/>
    <button type="submit" name="submit" id="submit" class="login-btn">Update</button>
</form>
</div>

</section>

<div id="cont2" class="cont">
    <div>
                <div>
                <h2>Add User</h2>

                <form action="DATABASE/DBSignUp.php" method="POST"  autocomplete="off">  <!--REG FORM (PHPVIEW) --> 
                    <?php
                    signup_inputs();
                    ?>
                        <button type="submit" name="reg_user" class="submit login-btn">ADD USER</button>
                </form>
            <button type="button" id="close" class="login-btn">Close Form</button>

            </div>
        </div>
</div>





  
<script>
  // NAV
  const navItems = document.querySelectorAll('.nav-item');

  navItems.forEach(item => {
    item.addEventListener('click', () => {
      navItems.forEach(item => {
        item.classList.remove('active');
      });

      item.classList.add('active');
    });
  });

  // DIV
  const links = document.querySelectorAll('.nav-link');
  const contents = document.querySelectorAll('.content');

  links.forEach(link => {
    link.addEventListener('click', (event) => {
      event.preventDefault();
      const targetId = link.getAttribute('href').substring(1);

      contents.forEach(content => {
        if (content.id === targetId) {
          content.style.display = 'block';
          content.style.pointerEvents = 'auto';
          content.style.zIndex = '10';
        } else {
          content.style.display = 'none';
          content.style.zIndex = '-1';
          content.style.pointerEvents = 'none';
        }
      });
    });
  });
</script>

<script>//DELETE OVERLAY
$(document).ready(function() {
  if (localStorage.getItem('executeCodeAfterRefresh')) {
    $('#cont').css('display', 'block');
    $('#overlay').css('display', 'block');
    $('body').css('overflow-y', 'hidden');
    localStorage.removeItem('executeCodeAfterRefresh');
  }
});

function setFlagAndReload(url) {
  localStorage.setItem('executeCodeAfterRefresh', 'true');
  window.location.href = url;
}

    $('#overlay').click(function(event) {
        event.preventDefault();
        $('#cont').css('display', 'none');
        $('#overlay').css('display', 'none');
        $('body').css('overflow', 'auto');
    });
    
    $('.navbar').click(function(event) {
        $('#cont').css('display', 'none');
        $('#overlay').css('display', 'none');
        $('body').css('overflow', 'auto');
    });


  </script>
  <script> //REGISTER BUTTON
document.querySelector('.img__btn').addEventListener('click', function() {
  document.querySelector('.cont2').classList.toggle('s--signup');
});
</script>

<script>//REGISTER OVERLAY
document.getElementById('Reg').addEventListener('click', function() {
    console.log('Button clicked!');
    document.getElementById('cont2').style.display = 'block';
    document.getElementById('overlay').style.display = 'block';
    document.getElementsByTagName("BODY")[0].style.overflow = "hidden";
});

    document.getElementById('close').addEventListener('click', function() {
      console.log('Button clicked!');
        document.getElementById('cont2').style.display = 'none';
        document.getElementById('overlay').style.display = 'none';
        document.getElementsByTagName("BODY")[0].style.overflow = "auto";
    });

  </script>
</body>
</html>