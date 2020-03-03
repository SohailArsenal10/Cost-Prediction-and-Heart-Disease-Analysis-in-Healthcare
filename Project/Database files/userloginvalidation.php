<?php
$conn1=mysqli_connect("localhost","root","","patient");
if(isset($_POST['submit']))
{
$x = $_POST['name'];
$y = $_POST['password'];

$user1 = 'Sohail';
$user2 = 'Vishnu';
$user3 = 'Keerthana';

$select=mysqli_query($conn,"SELECT name from image1");

if($x === $user1)
{
    header("Location: user1output.php"); 
}

else if($x === $user2)
{
    header("Location: user2output.php"); 
}

else if($x === $user3)
{
    header("Location: user3output.php"); 
}

else{
    echo "User not found...";
}
}
?>































