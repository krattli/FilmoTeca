<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "FilmoTeca";
$conn = new mysqli($servername, $username, $password, $dbname);

$name = $_POST["name"];
$genre = $_POST["genre"];
$year = $_POST["year"];
$note = $_POST["note"];
$director = $_POST["director"];
$synopsis = $_POST["synopsis"];
$date = date("Y-m-d");

$query = "INSERT INTO Films (title, year, synopsis, director, created_at, genre, note) 
                VALUES ($name, $year, $synopsis, $director, $date, $genre, $note)";

if ($conn->query($sql) === TRUE) {
    echo "Nouveau record créé avec succès";
} else {
    echo "Erreur : " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>