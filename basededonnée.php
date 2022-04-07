<?php
$servername = "localhost";
$username = "charlotte";
$password = "Loloti13";
try{
$bdd = new PDO("mysql:host=$servername;dbname=cinema", $username, $password);

$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}


?>