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
        <p>samplebbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbb</p>
        </div>

    


  <div id="Products" class="content">
  <?php
            $sql = "SELECT * FROM products";
            $result = mysqli_query($conn, $sql);
            $resultCheck = mysqli_num_rows($result);

            if ($resultCheck > 0) {
                echo "<table>";
                echo "<tr><th>ID</th><th>Name of Product</th><th>Price</th></tr>";

                $rowNumber = 0;

                while ($row = mysqli_fetch_assoc($result)) {
                    $rowNumber++;
                    $rowColor = $rowNumber % 2 == 0 ? "even" : "odd";

                    echo "<tr class='$rowColor'>";
                    echo "<td>" . $row['ID'] . "</td>";
                    echo "<td class='middle'>" . $row['Name'] . "</td>";
                    echo "<td class='right'>" . $row['Price'] . "</td>";
                    echo "</tr>";
                }

                echo "</table>";
            }
    ?>
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
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" value="<?=$row['username']?>">
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" value="<?=$row['email']?>">
    <button type="submit" name="submit">Update</button>
</form>
</div>

</section>








  
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
  // Check if the flag is set in Local Storage
  if (localStorage.getItem('executeCodeAfterRefresh')) {
    $('#cont').css('display', 'block');
    $('#overlay').css('display', 'block');
    $('body').css('overflow-y', 'hidden');
    // Clear the flag from Local Storage
    localStorage.removeItem('executeCodeAfterRefresh');
  }
});

function setFlagAndReload(url) {
  // Set the flag in Local Storage
  localStorage.setItem('executeCodeAfterRefresh', 'true');
  // Reload the page
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
</body>
</html>