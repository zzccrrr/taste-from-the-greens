<?php
include("dbh.php");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $price = $_POST["price"];

    
    $sql = "INSERT INTO products (Name, Price) VALUES ('$name', $price)";

    if ($conn->query($sql) === TRUE) {
        header("Location: ../admin.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

}

$conn->close();
?>