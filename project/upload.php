<html>
	<head>
		<title>Upload Picture</title>
		<style>
			marquee{
				color: red;
				font-family: Cooper Black;
				font-size: 35px;	
				font-style: italic;
				font-weight: bold;	
			}
			pre {
				color: light green;
				font-family: Lucida Calligraphy;
				font-size: 30px;
				font-weight: bold;
			}
		</style>
	</head>
	<?php 
		$handle=$_POST["handle"];
	?>
	<body bgcolor="skyblue">
		<marquee>
			<u>Profile Picture</u>
		</marquee>
		<form action="upload1.php" method="POST" enctype="multipart/form-data">
				<pre>
					<input type="text" value="<?php echo $handle; ?>" name="handle" hidden>
					Select a proile picture	*	: 	<input type="file" name="upload" value="" required>
					<input type="submit" name="submit" value="Upload">
				</pre>
		</form>
	</body>
</html>