<?php
header('Content-type: application/json');

$servername = "localhost";
$username = "id15583759_calculations";
$password = "#@srW|Of1u4e*0A%";
$dbname = "id15583759_calculatordata";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



$sql = 'SELECT * FROM sharedData';

$result = $conn->query($sql);
$response = array();

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $response[] = $row;
    }
    echo json_encode($response);
} else {
    echo "  0 results";
}
$conn->close();     
?>