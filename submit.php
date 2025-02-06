<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "recipes_db";

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$name = $_POST['name'];
$email = $_POST['email'];
$recipe = $_POST['recipe'];

$sql = "INSERT INTO recipes (name, email, recipe) VALUES ('$name', '$email', '$recipe')";

if ($conn->query($sql) === TRUE) {
    echo "Recipe submitted successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
