<html>
	<head>
		<title>Display User Profile</title>
	</head>
	<style>
		font,h1 {
			font-size: 25px;
			font-weight: bold;
			font-style: italic;
		}
	</style>
	<?php 
		$handle=$_POST["users"];
		$port=getenv('S2G_MYSQL_PORT');
		$dbhost="localhost:".$port;
		$user='root';
		$pass='';
		$conn=mysql_connect($dbhost,$user,$pass) or die("Connection failed");
		mysql_select_db('project');
		$query="select * from register where handle='$handle'";
		$result=mysql_query($query);
		$result1=mysql_query($query);
	?>
	<body bgcolor="yellow">
		<br<br><br><br>
		
			<?php 
				
				while($row=mysql_fetch_array($result,MYSQL_ASSOC)){ ?>
				<pre>
				<font size="6">
				<font color="red">User Profile:</font> <?php echo $handle; ?>
			
				<?php echo '<img src="data:image/jpeg;base64,'.base64_encode($row['profile']).'"/>'; ?>



				
	<font color="blue">First Name	</font>			:	<?php echo $row['first']; ?>

	<font  color="blue">Last Name	</font>			:	<?php echo $row['last']; ?>

	<font color="blue">Date of Birth</font>				:	<?php echo $row['month']," ",$row['date'],",",$row['year']; ?>

	<font  color="blue">Email-Id	</font>			:	<?php echo $row['email']; ?>

	<font  color="blue">Contact No</font>				:	<?php echo $row['phone']; ?>

	<font f color="blue">Address	</font>				:	<?php echo $row['address']; ?>

	<font  color="blue">Nationality	</font>			:	<?php echo $row['nation']; ?>

	<font  color="blue">Gender	</font>				:	<?php echo $row['gender']; ?>

	<font  color="blue">Interested Programming languages</font>	:	<?php echo $row['program']; ?>
				
				</font>
				</pre>
				<?php } 
				$query="select * from performance where handle='$handle'";
				$result=mysql_query($query);
			?>
	<br><br><br><br>
	<pre>
				<font size="6">
				<u><font color="red">Performance of </font> <?php echo $handle; ?> :</u>

	<br><br>
	<?php while($row=mysql_fetch_array($result,MYSQL_ASSOC)){ 
	if($row['test1']==-1)$x="NA";
	else $x=$row['test1']; ?>
	<font color="blue">TEST-1 (LOOPS)</font>				:	<?php echo $x; ?><br><br><br>
	<?php 
	if($row['test2']==-1)$x="NA";
	else $x=$row['test2'];  ?>
	<font color="blue">TEST-2 (ALGORITHMS)</font>			:	<?php echo $x; ?><br><br><br>
	<?php 
	if($row['test3']==-1)$x="NA";
	else $x=$row['test3']; ?>
	<font color="blue">TEST-1 (DATA STRUCTURES)</font>		:	<?php echo $x; ?><br><br><br>
	<?php 
	if($row['average']==-1)$x="NA";
	else $x=$row['average']; ?>
	<font color="blue">AVERAGE</font>					:	<?php echo $x; ?><br><br><br>
	<?php 
	if($row['ranking']==-1)$x="NA";
	else $x=$row['ranking']; ?>
	<font color="blue">CURRENT RANKING</font>				:	<?php echo $x; ?><br><br><br>
	
	<?php }
	?>
	</pre>
	</font>
	<form action="home.php" method="POST">
			<input type="submit" value="HOMEPAGE">
	</form>
		
	</body>
</html>
					