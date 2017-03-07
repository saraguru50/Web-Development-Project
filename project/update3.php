<html>
	<head>
		<title>Update Profile</title>
	</head>
	<?php 
		$first=$_POST["f_name"];
		$profile=$_POST["users"];
		$last=$_POST["l_name"];
		$date=$_POST["date"];
		$month=$_POST["month"];
		$year=$_POST["year"];
		$email=$_POST["email"];
		$phone=$_POST["phone"];
		$address=$_POST["address"];
		$nation=$_POST["nation"];
		$port=getenv('S2G_MYSQL_PORT');
		$dbhost="localhost:".$port;
		$user='root';
		$pass='';
		$conn=mysql_connect($dbhost,$user,$pass) or die("Connection Failed");
		mysql_select_db('project');
		$ans=0;
		if($first!=NULL){
			$query="update register set first='$first' where handle='$profile'";
			mysql_query($query,$conn);$ans++;
		}
		if($last!=NULL){
			$query="update register set last='$last' where handle='$profile'";
			mysql_query($query,$conn);$ans++;
		}
		if($email!=NULL){
			$query="update register set email='$email' where handle='$profile'";
			mysql_query($query,$conn);$ans++;
		}
		if($phone!=NULL){
			$query="update register set phone='$phone' where handle='$profile'";
			mysql_query($query,$conn);$ans++;
		}
		if($address!=NULL){
			$query="update register set address='$address' where handle='$profile'";
			mysql_query($query,$conn);$ans++;
		}
		if($nation!=NULL){
			$query="update register set nation='$nation' where handle='$profile'";
			mysql_query($query,$conn);$ans++;
		}
		if($date!=NULL){
			$query="update register set date='$date' where handle='$profile'";
			mysql_query($query,$conn);$ans++;
		}
		if($month!=NULL){
			$query="update register set month='$month' where handle='$profile'";
			mysql_query($query,$conn);$ans++;
		}
		if($year!=NULL){
			$query="update register set year='$year' where handle='$profile'";
			mysql_query($query,$conn);$ans++;
		}
	?>
	<body bgcolor="yellow">
		<br><br><br><br>
		<?php 
			if(!$ans){	?>
				<font face="Cooper Black" size=5 color="blue">No Fields are Updated</font>
					<form method="POST" action="home.php">
				<input type="submit" value="HOMEPAGE">
		</form>
				
			<?php die("");}  ?>
				<font face="Cooper Black" size=5 color="blue">The Fields are Updated Successfully</font>
		<br><br><br><br>
		<form method="POST" action="home.php">
				<input type="submit" value="HOMEPAGE">
		</form>
	</body>
</html>
				