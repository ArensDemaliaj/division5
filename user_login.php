<?php
require_once 'db_connect.php';
?>
<?php
$email = $_POST['email'];
$password = $_POST['password'];
$stmd = $conn->prepare("SELECT id, firstName, lastName, email, admin, password FROM users WHERE email = :email;");
$stmd->bindParam(":email", $email);
$stmd->execute();

$result = $stmd->fetch();

if (isset($result)) {
    $email = $result[0]["email"];
    $hash = $result[0]["password"];
    $admin = $result[0]["admin"];

    if (strcmp($password, $hash)) {
        $value = $result[0]["name"] . " " . $result[0]["surname"];
        $id = $result[0]["id"];
        setcookie("email", $value, time() + 3600 * 24 * 7, $path = "/");
        setcookie("UserId", $id, time() + 3600 * 24 * 7, $path = "/");

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
