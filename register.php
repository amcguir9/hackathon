<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="style.css">
		<title>Mini-Hackathon Registration Form</title>
	</head>
	<body>
		<h1>Mini-Hackathon 2025 Registration Form</h1>
		<form method="POST" action="submit.php">
			<label for="name">Name:</label>
			<input id="name" type="text" name="name">

			<label for="email">Email:</label>
			<input id="email" type="text" name="email">

			<label for="track">Track(Web,Cyber,Data):</label>
			<input id="track" type="text" name="track">
			
			<label for="shirt">Shirt:</label>
			<input id="shirt" type="text" name="shirt">

			<label for="laptop">Need a laptop?</label>
			<input id="laptop" type="checkbox" name="laptop">

			<a href="submit.php"><button type="button" id="submit-btn">Submit</button></a>
	</form>
</body>	
</html>