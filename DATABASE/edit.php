<?php 
  include "dbh.php";

  if(isset($_POST["submit"])){

    $id = $_POST["id"];
    $username = $_POST["username"];
    $email = $_POST["email"];

    $sql = "UPDATE users SET username = '$username', email = '$email' WHERE id = '$id'";

    if($conn->query($sql)){
      echo '<script>alert("Record Updated Successfully");</script>';
    } else {
      echo "Error updating record: " . $conn->error;
    }
  }
  header("location: ../admin.php");
?>