<html>
	<head>
		<script>
			function login_s(){
				window.alert("Successfully logged in");
			}
		</script>
		<script>
			function login_f(){
				window.alert("Invalid username or password");
			}
		</script>
	</head>
	<?php
		$port=getenv('S2G_MYSQL_PORT');
		$dbhost="localhost".$port;
		$user1='root';
		$pass1='';
		$conn=mysql_connect($dbhost,$user1,$pass1) or die("Connection failed");
		$a=$_POST["user"];
		$b=$_POST["pass"];
		mysql_select_db('project');
		$query="select * from register";
		$result=mysql_query($query) or die("failed");
		$count=0;
		while($row=mysql_fetch_array($result,MYSQL_ASSOC)){
				if($row['user']==$a && $row['pass']==$b)
				$count++;
		}
		if(!$count){  ?>
			<script>login_f();</script>
		<?php }
		else {     ?>
			<script>login_s();</script>
		<?php }
	?>
	<body bgcolor="orange">
		<form method="POST" action="home.php">
			<br><br>
			<input type="submit" name="home" value="HOMEPAGE">
		</form>
	</body>
	
</html>	 