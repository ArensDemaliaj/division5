<?php
$servername = "localhost";
$username = "root";
$password = "arensidem";

try {
    $conn = new PDO("mysql:host=$servername;dbname=division5", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);    
}
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
?>