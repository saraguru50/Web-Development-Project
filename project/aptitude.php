<html>
	<head>
		<title>Aptitude Questions</title>
	</head>
	<?php 
		$c=$_POST["handle"];
	?>
	<body bgcolor="skyblue">
		<pre>
		<font color="red" size=6 face="Cooper Black">
		<form name="1" method="POST" action="result.php">
			<input type="text" value="<?php echo $c; ?>" name="handle" hidden>
			1)<u>Find the output of the following:</u>
				
				int main(){
					int i;
					for(i=1;i<=10;i++);
					printf("%d ",i); 
					return 0;
				}
				</font>
				<font color="blue" face="Lucida Calligraphy" size=6>
			a)	<input type="radio" name="1" value="11">11
			b)	<input type="radio" name="1" value="1 2 3 4 5 6 7 8 9 10">1 2 3 4 5 6 7 8 9 10
			c)	<input type="radio" name="1" value="syntax error">syntax error
			d)	<input type="radio" name="1" value="runtime error">runtime error
				</font>
			
				
			<font color="red" size=6 face="Cooper Black">
			2)<u>	Find the output of the following:</u>


				int main(){
					int i=5;
					for(i--;i--;i--)
					printf("%d ",i); 
					return 0;
				}
				</font>
				<font color="blue" face="Lucida Calligraphy" size=6>
			a)	<input type="radio" name="2" value="infinite loop">infinite loop
			b)	<input type="radio" name="2" value="3 1">3 1
			c)	<input type="radio" name="2" value="syntax error">syntax error
			d)	<input type="radio" name="2" value="runtime error">runtime error
				</font>
			
								<font color="red" size=6 face="Cooper Black">
			3)<u>	Find the output of the following:</u>


				int main(){
					int i=5;
					for(i;i--;i)
					printf("%d ",i); 
					return 0;
				}
				</font>
				<font color="blue" face="Lucida Calligraphy" size=6>
			a)	<input type="radio" name="3" value="infinite loop">infinite loop
			b)	<input type="radio" name="3" value="syntax error">syntax error
			c)	<input type="radio" name="3" value="4 3 2 1 0">4 3 2 1 0
			d)	<input type="radio" name="3" value="runtime error">runtime error
				</font>
			
								<font color="red" size=6 face="Cooper Black">
			4)


				Which of the following is(are) entry-controlled loop(s)?
		

				</font>
				<font color="blue" face="Lucida Calligraphy" size=6>
			a)	<input type="radio" name="4" value="for loop">for loop
			b)	<input type="radio" name="4" value="while loop">while loop
			c)	<input type="radio" name="4" value="for and while loop">for and while loop
			d)	<input type="radio" name="4" value="do-while loop">do-while loop
				</font>
			
							<font color="red" size=6 face="Cooper Black">
			5)<u>	Find the output of the following:</u>


				int main(){
					int i=5;
					for(;;){
						printf("%d ",i--);
					}
					return 0;
				}
		

				</font>
				<font color="blue" face="Lucida Calligraphy" size=6>
			a)	<input type="radio" name="5" value="runtime error">runtime error
			b)	<input type="radio" name="5" value="syntax error">syntax error
			c)	<input type="radio" name="5" value="5 4 3 2 1 0">5 4 3 2 1 0
			d)	<input type="radio" name="5" value="infinite loop">infinite loop
				</font>
			
				<input type="submit" name="que" value="GET RESULT">


			</form>

			</pre>
		



	</body>
</html>
					
			