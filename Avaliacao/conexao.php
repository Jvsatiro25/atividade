<?php
$servername = "localhost";
$username = "João Victor Satiro";
$password = "jvsatiro2006";
$dbname = "Escola";
$port = "3307";

$conn = new mysqli($servername, $username, $password, $dbname, 3307);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
?>