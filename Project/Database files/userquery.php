<?php
$conn=mysqli_connect("localhost","root","","patient");
if(isset($_POST['submit']))
{
	$name1 = $_POST['fullname'];
	$email1 = $_POST['email'];
	$query1 = $_POST['query'];
    $sql = "INSERT into patient_query values('$name1','$email1','$query1')";
	if(mysqli_query($conn, $sql)) {
		echo "New record created successfully";
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
}

?>
