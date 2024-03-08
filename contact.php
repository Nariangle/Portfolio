

<?php
if(isset($_POST['submit'])) {

 $name = $_POST['name'];
 $email = $_POST['email'];
 $subject = $_POST['subject'];
 $phone = $_POST['phone'];
 $message = $_POST['message'];
 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "eliportcms";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO contact (name, email, subject, message, phone) VALUES ('$name', '$email', '$subject', '$message', '$phone')";

if (mysqli_query($conn, $sql)) {
  echo "Message Sent Succesfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
}
?>