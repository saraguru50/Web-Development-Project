<html>
	<head>
		<title>Display profile picture</title>
	</head>
	<body bgcolor="skyblue">
		<?php 
			$port=getenv('S2G_MYSQL_PORT');
		$dbhost="localhost:".$port;
		$user='root';
		$pass='';
		$conn=mysql_connect($dbhost,$user,$pass) or die("Connection failed");
		mysql_select_db('project');
		$query="select * from register where handle='saraguru25'";
		$result=mysql_query($query);
		$row=mysql_fetch_array($result,MYSQL_ASSOC);
		echo '<img src="data:image/jpeg;base64,'.base64_encode($row['profile']).'"/>';
		mysql_close($conn);
		
		?>
	</body>
</html>