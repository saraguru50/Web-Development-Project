<html>
	<head>
		<title>LOGIN</title>
	</head>
	<body bgcolor="skyblue">
		<marquee>
			<font size=6 color="red" face="Cooper Black">
			Welcome to Login Page
			</font>
		</marquee>
		<br><br><br><br>
		<fieldset>
		<form name="login" method="POST" action="check1.php">
			<font face="chiller" size=6">
			<pre>
			Username		:<input type="text" name="user" value="" required> 


			Password		:<input type="password" name="pass" value="" required>

			
			Handle			:<input type="text" name="handle" value="" required>


					<input type="submit" value="LOGIN" name="login">
			</pre>
			</font>
		</form>
		<br><br><br><br>
		<form method="POST" action="home.php">
				<input type="submit" value="HOMEPAGE">
		</form>
		</fieldset>
				
				
		
	</body>
</html>