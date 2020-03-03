<?php
$conn=mysqli_connect("localhost","root","","patient");
if(isset($_POST['submit']))
{
    $fname = $_POST['name'];
    $fid = $_POST['id'];
    $fstate = $_POST['state'];
    $fjob = $_POST['job'];
    $fage = $_POST['age'];
    $fstorylocation = $_POST['story'];
    $file = $_FILES['image'];
    $ferror = $_FILES['image']['error'];
    $filetmp = $_FILES['image']['tmp_name'];
    print_r($file);
    echo "<br>";
    echo "<br>";
    
    $sql = "INSERT INTO image1 (id,patient_name,age,job,state1)
    VALUES ('$fid','$fname',$fage,'$fstate','$fstorylocation','$fjob')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully <br><br>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
} 
    /* $select=mysqli_query($conn,"SELECT * from image1");
    $row = mysqli_fetch_row($select);
    $did = $row[0];
    $dname = $row[1];
    $dage = $row[2];
    $djob = $row[3];
    $dstory_location = $row[4];
    $dstate = $row[5];

    if($fid === $did and $fname === $dname and $fstate === $dstate and $fjob === $djob and $fage === $dage and $fstorylocation === $dstory_location)
    {

      echo '<br>';
      echo '<b><i>Name is&nbsp</i></b>'.$name;
      echo '<br>';
      print("Error code is&nbsp".$file['error']);
      echo '<br>';
      print("Temporary name is&nbsp:".$file['tmp_name']);
      echo '<br>'; */

      $fname = $_FILES['image']['name'];
      $fsplit = explode('.',$fname);
      $fextension = strtolower(end($fsplit));
      $extallowed = array('jpg','jpeg','png','ppt','pdf');

      if(in_array($fextension,$extallowed))
     {
        if($ferror == 0)
      {  
       
        $fileDestination = 'tableau_img/'.$fname;
        move_uploaded_file($filetmp,$fileDestination);
    //header("Location: index.php?uploadsuccess");
        echo '<b><i>File uploaded successfully</i></b><br><br>';
    }
      else
      echo '<b><i>File not uploaded</i></b>';

   }
echo '<br><br><br>';
    }

mysqli_close($conn);
?>
