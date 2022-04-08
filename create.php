<?php
// var_dump($_POST);

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pdo_toets_herkansing";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // prepare sql and bind parameters
    $stmt = $conn->prepare("INSERT INTO burrito (id, size, saus, bonen, rijst)
  VALUES (NULL, :size, :saus, :bonen, :rijst)");
//   $stmt->bindParam(':id', $id);
    $stmt->bindParam(':size', $size);
    $stmt->bindParam(':saus', $saus);
    $stmt->bindParam(':bonen', $bonen);
    $stmt->bindParam(':rijst', $rijst);


    $size = $_POST["size"];
    $saus = $_POST["saus"];
    $bonen = $_POST["bonen"];
    $rijst = $_POST["rijst"];
//   insert a row   //
    $stmt->execute();


    // insert a row
//   $id = 1;
//   $firstname = "John";
//   $infix = "dil";
//   $lastname = "Doe";
//   $stmt->execute();

    echo "New records created successfully";
    header("Refresh: 2; url = ./index.php");
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;