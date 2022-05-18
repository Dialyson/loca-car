<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "local";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "INSERT INTO cliente (nome, email)
  VALUES ('Bully Maquire', 'maguire.bully@gmail.com')";
  // use exec() because no results are returned
  $conn->exec($sql);
  echo "Cadastro realizado com sucesso!";
} catch(PDOException $e) {
  echo $sql . "! ERRO 404 !<br>" . $e->getMessage();
}

$conn = null;
?>