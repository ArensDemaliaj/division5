<?php
require_once 'db_connect.php';

$sql = "UPDATE users SET firstname = :fname, lastname = :lname, email = :eml, admin = :adm WHERE id = :id ;";

$sth = $conn->prepare($sql);
$sth->bindParam(':id', $_POST["id"]);
        $sth->bindParam(':fname', $_POST["firstName"]);
     $sth->bindParam(':lname', $_POST["lastName"]);
$sth->bindParam(':eml', $_POST["email"]);
$sth->bindParam(':adm', $_POST["admin"]);
$sth->execute();  

header("location:index.php");

?>