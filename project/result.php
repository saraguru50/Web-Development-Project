<html>
	<head>
		<title>Test2</title>
	</head>
	<?php 
		$port=getenv('S2G_MYSQL_PORT');
		$dbhost="localhost:".$port;
		$user='root';
		$pass='';
		$conn=mysql_connect($dbhost,$user,$pass) or die("Connection failed");
		$handle=$_POST["handle"];
		$ans=0;
		mysql_select_db('project');
		$query="select * from aptitude";
		$result=mysql_query($query);
		while($row=mysql_fetch_array($result,MYSQL_ASSOC)){
				$temp=$row['question'];
				if($_POST["$temp"]==$row['answer'])$ans++;
		}
	?>
	<body bgcolor="skyblue">
		<br><br><br><br>
		<h1>Your score is : <?php echo $ans; ?>/5</h1>
		<br><br><br><br>
		<?php 
			if($ans>=3)echo "<h1>You are progressing well</h1>";
			else echo "<h1>You need to practice a lot</h1>";
			$query="update performance set test1='$ans' where handle='$handle' and test1='-1'";
			mysql_query($query,$conn);
			$query="select * from performance where handle='$handle'";
			$result=mysql_query($query);
			$row=mysql_fetch_array($result,MYSQL_ASSOC);
			$sum=0;$x=0;
			if($row['test1']!=-1){$sum+=$row['test1'];$x++;}
			if($row['test2']!=-1){$sum+=$row['test2'];$x++;}
			if($row['test3']!=-1){$sum+=$row['test3'];$x++;}
			$avg=$sum/$x;
			$query="update performance set average='$avg' where handle='$handle'";
			mysql_query($query,$conn);
			if($avg>=4)$rank="GrandMaster";
			else if($avg>=3)$rank="Master";
			else if($avg>=2)$rank="Specialist";
			else $rank="Newbie";
			$query="update performance set ranking='$rank' where handle='$handle'";
			mysql_query($query,$conn);
		?>
	<br><br><br><br>
	<form method="POST" action="home.php">
		<input type="submit" value="HOMEPAGE">
	</form>
	</body>
</html>
		