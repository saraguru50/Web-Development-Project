<html>
	<head>
		<title>Rules and Regulations</title>
	</head>
	<style>
		pre {
			color: red;
			font-weight: bold;
			font-style: italic;
			font-size: 30px;
		}
		h1 {
			font-family: Cooper Black;
			font-style: italic;
		}
	</style>
	<?php 
		$handle=$_POST["handle"];
	?>
	<body bgcolor="skyblue">
		<fieldset>
		<center><h1>Read the instructions carefully</h1></center>
		<pre>
			<ul>
			<li>	There are five questions in this test </li>
			<li>	All are objective type questions</li>
			<li>	Each question carries one mark</li>
			<li>	No negative marks</li>
			<li>	You will be allowed to take this test only once</li>
			<li>	Think carefully and then answer</li>
			<li>	No time limit</li>
			<li>	This mark will be taken to calculate the average</li>
			</ul>
		</pre>
		<form method="POST" action="aptitude1.php">
			<input type="text" value="<?php echo $handle; ?>" name="handle" hidden>
						<input type="submit" value="Take the test">
		</form>
		</fieldset>
		<form method="POST" action="home.php">
			<input type="submit" value="HOMEPAGE">
		</form>
	</body>
</html>