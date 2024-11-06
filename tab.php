<?php
header('Content-Type: text/html; charset=utf-8');
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "FilmoTeca";

$conn = new mysqli($servername, $username, $password, $dbname);

$sql = "SELECT title, year, synopsis, director, genre FROM Films";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo $row["title"];
        echo "oui ";
    }
} else {
    echo "<p>Aucun film trouvé.</p>";
}

echo "heyeyeye";

$conn->close();

?>