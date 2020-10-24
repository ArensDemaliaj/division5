<?php
require_once 'db_connect.php';

$email = $_POST['email'];
$password = $_POST['password'];
$stmd = $conn->prepare("SELECT id, firstName, lastName, email, admin, password FROM users WHERE email = :email;");
$stmd->bindParam(":email", $email);
$count = $stmd->execute();

echo $count;

$result = $stmd->fetchAll(PDO::FETCH_ASSOC);
if (!empty($result)) {
    $email = $result[0]["email"];
    $hash = $result[0]["password"];
    $admin = $result[0]["admin"];


    if (strcmp($password, $hash)) {
        setcookie("fullname", $result[0]["firstName"] . " " . $result[0]["lastName"], time()+3600*24*7, $path = "/");
        setcookie("email", $email, time()+3600*24*7, $path = "/");

        if ($admin == 1) {
            setcookie("admin", $admin, time() + 3600 * 24 * 7, $path = "/");
        }

        header("Location: index.php");
    } else {
        header("location: login.php?fehler=2");
    }
} else {
    header("location: login.php?fehler=1");
}
