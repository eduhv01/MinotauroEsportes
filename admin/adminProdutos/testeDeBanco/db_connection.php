<?php
$servername = "127.0.0.1:3307";  
$username = "root";              
$password = "";                  
$dbname = "MinotauroEsportes";  

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}
?>
