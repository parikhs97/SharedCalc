<?php
$servername = "localhost";
$username = "id15583759_calculations";
$password = "#@srW|Of1u4e*0A%";
$dbname = "id15583759_calculatordata";

$conn = new mysqli($servername, $username, $password, $dbname); // Create connection
if ($conn->connect_error) {     // Check connection
    die("Connection failed: " . $conn->connect_error);
} 


if(empty( $_POST['fname'])) {
    $username = "Unknown User";
}else{
    $username = mysqli_real_escape_string($conn, $_POST['fname']);
}
$calculation = mysqli_real_escape_string($conn, $_POST['calculation']);



$sql = "INSERT INTO sharedData (username,calculation) VALUES ('$username', '$calculation')";

if ($conn->query($sql) === TRUE) {
    echo "Page saved!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>