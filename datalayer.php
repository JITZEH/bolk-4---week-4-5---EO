<?php

function createDatabaseConnection(){
 $servername = "localhost";
 $username = "root";
 $password = "mysql";
 $dbname = "blok 3 - week 4/5 - EO";
 
try {
 $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
// set the PDO error mode to exception
 $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
return $conn;
 }
catch(PDOException $e){
 echo "Connection failed: ". $e->getMessage();
 }
}

function readCharacters(){
 $dbConnection = createDatabaseConnection();
 $stmt = $dbConnection->prepare("SELECT * FROM characters");
 $stmt->execute();
 $result = $stmt->fetchAll();
 $dbConnection = null;
 return $result;
}

function readCharacter($id){
 $dbConnection = createDatabaseConnection();
 $stmt = $dbConnection->prepare("SELECT * FROM characters WHERE id=$id");
 $stmt->execute();
 $result = $stmt->fetch();
 $dbConnection = null;
 return $result;
}

function readCharactersSorted($data){
$dbconnection = createDatabaseConnection();
$sql-sprintf("SELECT + FROM characters ORDER BY %s %s", $data["sort"], $data["order"]);
$dbConnection->prepare($sql);
$stmt->execute();
$result - $stmt->fetchAll();
$dbConnection - null;
return $result;
}
?>