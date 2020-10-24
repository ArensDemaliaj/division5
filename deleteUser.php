<?php
if(isset($_COOKIE["fullname"]) && isset($_COOKIE["admin"])){
require_once 'db_connect.php';
$sql = "DELETE FROM users WHERE id=" . $_GET["id"] . ";";
$sth = $conn->prepare($sql);
$sth->execute();
$conn = null;
header("location:index.php");
}
else{
    header("location: login.php?fehler=2");
}
