
<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '','clients_details');

// get the post records
$destination = $_POST['destination'];
$number = $_POST['number'];
$date = $_POST['date'];
$subject = $_POST['date2'];

// database insert SQL code
$sql = "INSERT INTO `bookings` (`id`, `tour_destination`, `guest_no`, `arrival_date`, `departure_date`) VALUES ('0', '$destination','$number', '$date', '$subject')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Details received. Thank you.";
}
else{
	echo "Failed to connect";
}
?>