<?php
$conn=mysqli_connect("localhost","root","","patient");
if(isset($_POST['submit']))
{
    $fname = $_POST['name'];
    $femail = $_POST['email'];
    $fpassword = $_POST['password'];
    $fretypepassword = $_POST['retypepassword'];
    $fdob = $_POST['dob'];
    $faddress = $_POST['address'];
    
    
    $sql = "INSERT INTO user (patient_name,email,password1,retypepassword,dob,address1)
    VALUES ('$fname','$femail','$fpassword','$fretypepassword','$fdob','$faddress')";

if ($conn->query($sql) === TRUE) {
    echo "<b>New record created successfully</b> <br><br> <b>User value created</b>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
} 
}