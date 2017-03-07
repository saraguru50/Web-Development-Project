<html>
	<head>
		<style>
			body {
				background-color: skyblue;
				background-repeat: no-repeat;
			}
			pre {
				font-style: italic;
				font-weight: bold;
				font-size: 20px;
			}
			#heading {
				font-family: Cooper Black;
				font-size: 30px;
				font-style: italic;
				color: blue;
				font-weight: bold;
			}
			a ,legend{
				font-family:Lucida Calligraphy;
				font-size: 20px;
				font-style: italic;
				font-weight: bold;
			}
			a:link {
    				color: red;
				text-decoration: none;
			}
			a:visited {
    				color: #334344;
				text-decoration: none;
			}
			a:hover {
    				color: yellow;
				text-decoration: none;
			}	
			a:active {
    				color: green;
				text-decoration: none;
			}
		</style>
	</head>
	<?php
		$port=getenv('S2G_MYSQL_PORT');
		$dbhost="localhost".$port;
		$user1='root';
		$pass1='';
		$conn=mysql_connect($dbhost,$user1,$pass1) or die("Connection failed");
		$a=$_POST["user"];
		$b=$_POST["pass"];
		$c=$_POST["handle"];
		mysql_select_db('project');
		$query="select * from register";
		$result=mysql_query($query) or die("failed");
		$count=0;
		while($row=mysql_fetch_array($result,MYSQL_ASSOC)){
				if($row['user']==$a && $row['pass']==$b && $row['handle']==$c)
				$count++;
		}
		if(!$count){  ?>
			<form method="POST" action="home.php">
			<br><br>
			<input type="submit" value="HOMEPAGE">
		</form>
		<?php
			die("Invalid Username or Password or handle");
		}
		else {     ?>
		
		<br><br><br><br>
		<center>
		<p id="heading">
			Want to see how you are progressing...Then you are at the right place.<br>Take one of the tests below to test your skills
		</p>
		<br><br>
		<form method="POST">
			<pre>
			<input type="text" value="<?php echo $c; ?>" name="handle" hidden>
		LOOPS	:	<input type="submit" value="TEST-1" formaction="test.php">	

		
		ALGORITHMS	:	<input type="submit" value="TEST-2" formaction="test1.php">
		
		
		DATA STRUCTURES	:	<input type="submit" value="TEST-3" formaction="test2.php">
			</pre>
		</form>
	
		<br><br><br><br>
		<form method="POST" action="home.php">
			<input type="submit" value="HOMEPAGE">
		</form>
			
			
		<?php }
	?>
	<body bgcolor="skyblue">
	</body>
	
</html>	 