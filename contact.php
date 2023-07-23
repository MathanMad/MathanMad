<?php

$name="";
$email="";
$Message="";

$name=$_GET["name"];

$email=$_GET["email"];

$message=$_GET["Message"];

$servername = "localhost";
$username = "";
$password = "";
$dbname = "test";

//Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO contact (Fullname,Email,Message)
VALUES ('$name' , '$email' , '$message')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
  echo '<script type="text/javascript"> window.location = "http://localhost/About/index.html";
</script>';
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>
