<?php
require_once 'db_connect.php';

$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];

$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

echo $email;

$stmd = $conn->prepare("SELECT * FROM users WHERE email  = '$email';");
$stmd->execute();

$result = $stmd->fetch();
if (!empty($result)) {
    echo "User is there";
    //header("location: register.php?fehler=10");
}

$stmd = $conn->prepare("INSERT INTO users (firstName, lastName, email, password) VALUES (:firstName, :lastName, :email, :password)");
$stmd->bindParam(":firstName", $firstName);
$stmd->bindParam(":lastName", $lastName);
$stmd->bindParam(":email", $email);
$stmd->bindParam(":password", $password);
$stmd->execute();

header("location: login.php?fehler=3");
?>
      