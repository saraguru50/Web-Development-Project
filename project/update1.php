<html>
	<head>
		<title>Update User Profile</title>
	</head>
	<?php 
		$user1=$_POST["user"];
		$handle1=$_POST["handle"];
		$pass1=$_POST["pass"];
		$port=getenv('S2G_MYSQL_PORT');
		$dbhost="localhost:".$port;
		$user='root';
		$pass='';
		$conn=mysql_connect($dbhost,$user,$pass) or die("Connection failed");
		mysql_select_db('project');
		$select_query="select * from register where user='$user1' and pass='$pass1' and handle='$handle1'";
		$result=mysql_query($select_query);
		$ans=0;
		while($row=mysql_fetch_array($result,MYSQL_ASSOC)){
				$ans++;
		}
		if(!$ans){ ?>
				<form method="POST" action="home.php">
				<input type="submit" value="HOMEPAGE">
		</form>	
			<?php die("User ($handle1) does not exist");
		}
		if($ans){ ?>
			<form method="POST" action="update2.php">
				<input type="submit" value="Click here to Update Your Profile">
				<input type="text" name="users" value="<?php echo $handle1; ?>" hidden>
			</form>
		<?php }  ?>
	<body bgcolor="yellow">
		<br><br><br><br>
	</body>
</html>
		