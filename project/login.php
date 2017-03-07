<html>
	<head>
		<title>LOGIN</title>
		<style>
			pre {
				color: blue;
				font-weight: bold;
				font-family: Lucida Calligraphy;
				font-size: 35px;
			}
		</style>
	</head>
	<body bgcolor="skyblue">
		<marquee>
			<font size=6 color="red" face="Cooper Black">
			Welcome to Login Page
			</font>
		</marquee>
		<br><br><br><br>
		<fieldset>
		<form name="login" method="POST" action="insert1.php">
			<pre>
			Username		:<input type="text" name="user" value="" required> 


			Password			:<input type="password" name="pass" value="" required>


					<input type="submit" value="LOGIN" name="login">
			</pre>
		</form>
		</fieldset> 
		<br><br><br><br>
		<form method="POST" action="home.php">
				<input type="submit" value="HOMEPAGE">
		</form>
				
				
		
	</body>
</html>