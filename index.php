hallo ik doe het

<?php

include "secret.php";

// $username is created in secret.php 
// $password is created in secret.php 


$servername = "localhost";

$dbname = "programitehv1";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";

$sql = "SELECT * FROM question";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - content: " . $row["content"]. " code: " . $row["code"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>