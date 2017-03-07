<html>
	<head>
		<title>INSERTION</title>
	</head>
	<?php 
		$f_name=$_POST["f_name"];
		$l_name=$_POST["l_name"];
		$date=$_POST["date"];
		$month=$_POST["month"];
		$year=$_POST["year"];
		$handle=$_POST["handle"];
		$user=$_POST["user"];
		$pass=$_POST["pass"];
		$email=$_POST["email"];
		$phone=$_POST["phone"];
		$address=$_POST["address"];
		$nation=$_POST["nation"];
		$gender=$_POST["gender"];
		if(!empty($_POST["program"])){
		     $count=count($_POST["program"]);
		      $program1="";
		      foreach($_POST["program"] as $selected){
			$program1=$program1.$selected;
			if($count>1)$program1=$program1.",";
			$count--;
		     }	
		}
		else {
		      $program1="No Interested Programming Languages";
		}	
		$port=getenv('S2G_MYSQL_PORT');
		$dbhost="localhost:".$port;
		$user1='root';
		$pass1='';
		$conn=mysql_connect($dbhost,$user1,$pass1) or die("Connection failed");
		mysql_select_db('project');
		$insert_query="insert into register(first,last,date,month,year,handle,user,pass,email,phone,address,nation,gender,program) values ('$f_name','$l_name',
							'$date','$month','$year','$handle','$user','$pass','$email','$phone','$address','$nation','$gender','$program1')";
		if(mysql_query($insert_query,$conn)){
			echo "Registered Successfully";	
		}
		else {
			echo "Registration failed";
		}
		$query="insert into performance(handle,test1,test2,test3,average,ranking) values ('$handle','-1','-1','-1','-1','NA')";
		mysql_query($query,$conn);
	?>
	<body bgcolor="skyblue">
		<br><br><br><br>
		<form action="upload.php" method="POST">
				<pre>
					<input type="text" value="<?php echo $handle; ?>" name="handle" hidden>
					Click here to choose your Profile Picture:
									<input type="submit" name="submit" value="Set Profile Picture">
				</pre>
		</form>
		
	</body>
</html>