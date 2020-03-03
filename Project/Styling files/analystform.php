<!DOCTYPE html>
<html>
<head>
<title>Forms - Demo Preview</title>

<link href="analystformcss.css" rel="stylesheet">
</head>
<body>
<div id="first">
<form action="dbconfig.php" method="post" enctype = "multipart/form-data">
<h1>User updation form</h1>
<h4>Please fill all entries.</h4>
<hr>


<label class="one">
<span>Name :</span>
<input class="name" name="name" type="text">
</label>
<label class="two">
<span>Id :</span>
<input class="id" name="id" type="text">
</label>
<label class="three">
<span>State :</span>
<input class="id" name="state" type="text">
</label>
<label class="four">
<span>Job :</span>
<input class="job" name="job" type="text">
</label>
<label class="five">
<span>Age :</span>
<input class="age" name="age" type="text">
</label>

<label class="five">
<span>Story location :</span>
<input class="age" name="story" type="text">
</label>
<input class="file" name="image" type="file">

<input class="submit" name="submit" type="submit" value="Send">
</form>
</div>
</body>
</html>
