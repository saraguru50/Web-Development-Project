<html>
	<head>
		<title>Delete Profile</title>
	</head>
	<body bgcolor="yellow">
		<marquee>	
			<font face="Cooper Black" color="red" size=6>
			Deleting User's Profile
		</marquee>
		<br><br><br><br>
		<form method="POST" action="delete1.php">
				<pre>
						<font face="Cooper Black" size=6 color="blue">Enter your Handle	*	<input type="text" value="" name="handle" required>

	
					<font face="Cooper Black" size=6 color="blue">Enter your Username	*	<input type="text" value="" name="user" required>

				
					<font face="Cooper Black" size=6 color="blue">Enter your Password	*	<input type="password" value="" name="pass" required>

					
					Note:( * are mandatory fields)
		
								<input type="submit" value="Delete Profile">
				</pre>
		</form>
		<form method="POST" action="home.php">
				<input type="submit" value="HOMEPAGE">
		</form>
	</body>
</html>