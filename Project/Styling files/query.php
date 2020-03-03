<!DOCTYPE html>
<head>
    <title>
    Patient Query
    </title>
    <link href="querystyle.css" rel="stylesheet">
</head>
<body>
<div class="box">
	<form action="userquery.php" method="post">
		<span class="text-center">Ask a Question</span>
	<div class="input-container">
		<input type="text" name="fullname" required=""/>
		<label>Full Name</label>		
	</div>
	<div class="input-container">		
		<input type="mail" name="email" required=""/>
		<label>Email</label>
    </div>
    <div class="input-container">		
		<input type="text" name="query" required=""/>
		<label>Query</label>
    </div>
			
		<input class="btn" type="submit" name="submit" value="send"/>&nbsp;
	
    
		
</div>
</body>
</html>
