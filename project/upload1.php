<html>
	<head>
		<title>Upload Picture</title>
	</head>
	<body bgcolor="skyblue">
	<?php 
		$port=getenv('S2G_MYSQL_PORT');
		$dbhost="localhost:".$port;
		$user='root';
		$pass='';
		$conn=mysql_connect($dbhost,$user,$pass) or die("Connection failed");
		$handle=$_POST["handle"];
		mysql_select_db('project');
		$target_file=$_FILES['upload']['name'];
		$img_type=pathinfo($target_file,PATHINFO_EXTENSION);

		$maxsize = 10000000; //set to approx 10 MB

    		//check associated error code
    		if($_FILES['upload']['error']==UPLOAD_ERR_OK) {

       		 //check whether file is uploaded with HTTP POST
      		  if(is_uploaded_file($_FILES['upload']['tmp_name'])) {    

        		    //checks size of uploaded image on server side
           		 if( $_FILES['upload']['size'] < $maxsize) {  
  
             		  //checks whether uploaded file is of image type
            		    if(($img_type!="mp3" && $img_type!="mp4") && ($img_type=="jpeg" || $img_type=="jpg" || $img_type=="png" || $img_type=="gif")) {    

                  		  // prepare the image for insertion
                 		   $imgData =addslashes (file_get_contents($_FILES['upload']['tmp_name']));
			   $query="update register set profile='$imgData' where handle='$handle'";
			   echo "Uploaded Profile Picture Successfully"; ?>
			   <br><br><br><br>
			   <form action="home.php" method="POST">
					<input type="submit" value="HOMEPAGE">
			   </form>
			  <?php 
			   mysql_query($query,$conn);
			}
				else{   
				?>
				<form method="POST" action="upload.php">
					<pre>
						Click the back button to choose another profile picture
						<input type="text" value="<?php echo $handle; ?>" name="handle" hidden>
											<input type="submit" value="Back">
					</pre>
				</form>
				<?php
				die("The file is not an image");
				}
			}
			else {   
				?>
				<form method="POST" action="upload.php">
					<pre>
						Click the back button to choose another profile picture
						<input type="text" value="<?php echo $handle; ?>" name="handle" hidden>
											<input type="submit" value="Back">
					</pre>
				</form>
				<?php
			die("File size is too large");
			}
		}
		else {   
				?>
				<form method="POST" action="upload.php">
					<pre>
						Click the back button to choose another profile picture
						<input type="text" value="<?php echo $handle; ?>" name="handle" hidden>
											<input type="submit" value="Back">
					</pre>
				</form>
				<?php
		die("File not uploaded successfully");
		}
	
}
			
	?>
		
	</body>
</html>