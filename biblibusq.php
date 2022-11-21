<?php

$host = "localhost"
$username = "root"
$password= "";
$dbname = "biblibusq";
$port = 80;

try{
  $conn = new PDO("mysql:host=$host;port=$port;dbname=" . $dbname, $user, $password);
  echo "Conectado a $dbname em $host com sucesso";
} catch(PDOException $pe){
  die("ERROR: Não foi possível conectar ao $dbname:" . $pe->getMessage());
}
?>
