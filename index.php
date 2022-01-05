<html>
<head>
	<meta charset="UTF=0.8"/>
	<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
	<title>Employee Details</title>
</head>

<body>
	<h1>Employee Details</h1>
	
	<form action="connect.php" method="post">
		<label for="name">Name:</label><br/>
		<input type="text" name="name"/>
		<br/>
		<label for="id">ID:</label><br/>
		<input type="number" name="id"/>
		<br/>
		<label for="role">Role:</label><br/>
		<input type="text" name="role"/>
		<br/>
		<label for="exp">Experience(in years):</label><br/>
		<input type="text" name="exp"/>
		<br/>
		
		<input type="submit" value="submit"/>
		
	</form>

</body>
</html>