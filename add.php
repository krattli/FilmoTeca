<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "FilmoTeca";
$conn = new mysqli($servername, $username, $password, $dbname);

echo "Connexion établie avec validation validée";

$name = $_POST['name'];
$genre = $_POST['genre'];
$year = $_POST['year'];
$note = $_POST['note'];
$director = $_POST['director'];
$synopsis = $_POST['synopsis'];
$date = date("Y-m-d");

echo $name;

//if ($conn->connect_error) {
 //   die("Échec de la connexion : " . $conn->connect_error);}


$stmt = $conn->prepare("INSERT INTO Films (title, year, synopsis, director, genre, created_at, note) VALUES (?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("sissssi",$name, $year, $synopsis, $director, $genre, $date, $note);

$sql = "INSERT INTO Films (title, year, synopsis, director, genre, created_at, note) 
                VALUES ($name, $year, $synopsis, $director, $genre, $date, $note)";

if ($stmt->execute()) {
    echo "Le film a été ajouté avec succès.";
} else {
    echo "Erreur : " . $stmt->error;
}
/*
try {
    $conn->query($sql);
} catch (mysqli_sql_exception $e){
    var_dump($e);
      exit; 
}
*/
$stmt->close();
$conn->close();
?>