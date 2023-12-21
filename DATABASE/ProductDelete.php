<?php
  include 'dbh.php';
  $id = $_GET['delete'];
  $sql = "DELETE FROM products WHERE id = '$id'";

  if($conn->query($sql)){
    echo '<script>alert("Record Deleted Successfully");</script>';
  } else {
    echo "Error deleting record: " . $conn->error;
  }

  header("location: ../admin.php");
        
?>