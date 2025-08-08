<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "slider2";

$slider1 = $_POST['slider1'];
$slider2 = $_POST['slider2'];


// Save or display values (for testing, just echo them)
echo "Slider 1: " . $slider1 . "<br>";
echo "Slider 2: " . $slider2 . "<br>";



// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO slider2 (id, motor1, motor2)
VALUES ('', '$slider1', '$slider2')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
