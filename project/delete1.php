<html>
	<head>
		<title>Delete User Profile</title>
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
		if($ans){
			$query="delete from register where user='$user1' and pass='$pass1' and handle='$handle1'";
			if(mysql_query($query,$conn)){
			echo "Profile ($handle1) deleted from the website successfully";
			}
			else {
				echo "Deletion failed";
			}
			$query="delete from performance where handle='$handle1'";
			mysql_query($query,$conn);
		}
		else {
			echo "User ($handle1) does not exist";
		}
	?>
	<body bgcolor="yellow">
		<br><br><br><br>
		<form method="POST" action="home.php">
				<input type="submit" value="HOMEPAGE">
		</form>
	</body>
</html>
		