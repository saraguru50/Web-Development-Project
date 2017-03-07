<html>
	<head>
		<title>Display User Profile</title>
	</head>
	<?php 
		$country=$_POST["country"];
		$port=getenv('S2G_MYSQL_PORT');
		$dbhost="localhost:".$port;
		$user='root';
		$pass='';
		$conn=mysql_connect($dbhost,$user,$pass) or die("Connection failed");
		mysql_select_db('project');
		$query="select * from register where nation='$country'";
		$result=mysql_query($query);
		$result1=mysql_query($query);
	?>
	<body bgcolor="yellow">
		<br><br><br><br>
		<center>
		<font face="cooperblack" size=6 color="red">
		<?php 
			$count=0;
			while($row=mysql_fetch_array($result,MYSQL_ASSOC)){
					$count++;
			}
		
			if(!$count){ ?>
				<form method="POST" action="home.php">
						<input type="submit" value="HOMEPAGE">
				</form>
				<?php 
				die("There are no users in the country :  $country");
			}
		?>
			The List of users in <?php echo $country; ?> are:<br><br>	
			<?php if($count){
				?>
				<form action="display3.php" method="POST">
				<pre>
			<select name="users">
				<?php while($row=mysql_fetch_array($result1,MYSQL_ASSOC)){ ?>
					<option value="<?php echo $row['handle']; ?>"><?php echo $row['handle']; ?></option>
			<?php }  ?>
				</select>		<input type="submit" value="Display Profile">
				</pre>
				</form>
			<?php } ?>
		</font>
		</center>
		<form method="POST" action="home.php">
				<input type="submit" value="HOMEPAGE">
		</form>
	</body>
</html>

			