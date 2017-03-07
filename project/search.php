<html>
	<head>
		<title>SEARCH</title>
	</head>
	<body bgcolor="yellow">
		<marquee>
			<font face="Cooper Black" color="red" size=6>
			Search for Users
		</marquee>
		<br><br><br><br>
		<form name="search" method="POST" action="display.php">
			<pre>
				<font color="blue" face="Lucida Calligraphy" size=5>
				<u>Search by Handle Name:</u>	<input type="text" name="handle" value="" required>	<input type="submit" value="Search">
				</font>
			</pre>
		</form>
		<br><br>
		<form name="search1" method="POST" action="display1.php">
			<pre>
				<font color="blue" face="Lucida Calligraphy" size=5>
				<u>Search by Country:</u>	<select name="country" required><option></option><option>India</option><option>China</option><option>Japan</option><option>Korea</option><option>USA</option><option>England</option><option>Russia</option><option>Germany</option><option>Saudi Arabia</option><option>Spain</option><option>Italy</option><option>Australia</option> </select>	<input type="submit" value="Search">
				</font>
			</pre>
		</form>
		<br><br>
		<form name="search2" method="POST" action="display2.php">
			<pre>
				<font color="blue" face="Lucida Calligraphy" size=5>
				<u>Search by Handle Name and Country:</u>
								
								Handle<input type="text" name="handle1" value="" required>    and    Country<select name="country1" required><option></option><option>India</option><option>China</option><option>Japan</option><option>Korea</option><option>USA</option><option>England</option><option>Russia</option><option>Germany</option><option>Saudi Arabia</option><option>Spain</option><option>Italy</option><option>Australia</option> </select>	<input type="submit" value="Search">
				</font>
			</pre>
		</form>
		<form method="POST" action="home.php">
				<input type="submit" value="HOMEPAGE">
		</form>
	</body>
</html>