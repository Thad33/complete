
<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '','clients_details');

// get the post records
$name = $_POST['name'];
$number = $_POST['number'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

// database insert SQL code
$sql = "INSERT INTO `clients` (`id`, `name`, `number`, `email`, `subject`, `message`) VALUES ('0', '$name','$number', '$email', '$subject', '$message')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Details received. Thanks you";
}
else{
	echo "Failed to connect";
}
?>