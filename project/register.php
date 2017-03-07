<html>
	<head>
		<title>Register</title>
		<script>
			function validate(){
				var date=document.forms["register"]["date"].value;
				var month=document.forms["register"]["month"].value;
				var year=document.forms["register"]["year"].value;
				var ans=1;
				if(month.localeCompare("February")==0){
					if(year%400==0 || (year%4==0 && year%100!=0)){
						if(date>29)ans=0; 
					}
					else {
						if(date>28)ans=0;
					}
				}
				if(month.localeCompare("April")==0){
					if(date>30)ans=0;
				}
				if(month.localeCompare("June")==0){
					if(date>30)ans=0;
				}
				if(month.localeCompare("September")==0){
					if(date>30)ans=0;
				}
				if(month.localeCompare("November")==0){
					if(date>30)ans=0;
				}
				if(!ans){
					alert("Invalid Date of Birth");
					return false;
				}
				var no=document.forms["register"]["phone"].value;
				var pass1=document.forms["register"]["pass1"].value;
				var len1=no.length;
				var i=0,x,count=0;
				for(i=0;i<len1;i++){
					x=no.charCodeAt(i);
					if(x>=48 && x<=57)count++;
				}
				var pass=document.forms["register"]["pass"].value;
				var len2=pass.length,num=0,u=0,l=0;
				for(i=0;i<len2;i++){
					x=pass.charCodeAt(i);
					if(x>=65 && x<=90)u++;
					else if(x>=97 && x<=122)l++;
					else if(x>=48 && x<=57)num++;
				}
				if(len2<6){
					alert("Password should contain minimum 6 characters");
					return false;
				}
				if(len2>20){
					alert("Password should not have more than  20 characters");
					return false;
				}
				if(u==0){
					alert("Password should contain an uppercase letter");
					return false;
				}
				if(l==0){
					alert("Password should contain a lowercase letter");
					return false;
				}
				if(num==0){
					alert("Password should contain a numeric value from 0 to 9");
					return false;
				}
				if(u+l+num!=len2){
					alert("Password should contain only lowercase,uppercase and numbers");
					return false;
				}
				if(pass.localeCompare(pass1)!=0){
					alert("Passwords did not match");
					return false;
				}
				if(count!=len1){
					alert("Mobile numbers can contain only numeric values from 0 to 9");
					return false;
				}
				return true;
			}
		</script>
	</head>
	<body bgcolor="yellow">
		<marquee>
			<font size=6 color="red" face="Cooper Black">
			Welcome to Registration Page
			</font>
		</marquee>
		<hr>
		<br><br>
		<form name="register" method="POST" onsubmit="return validate();" action="insert.php">
		<pre>
		<font size=5 face="Lucida Calligraphy" color="blue">
		First Name 	*		:<input type="text" name="f_name" value="" required>
		Last Name 	*		:<input type="text" name="l_name" value="" required>
		Date of Birth	*		:Date:  <select name="date" required><option></option><?php $i=1;while($i<=31){  ?>  <option><?php echo $i; $i++; ?></option>  <?php }  ?></select>      Month:  <select name="month" required><option></option><option>January</option><option>February</option><option>March</option><option>April</option><option>May</option><option>June</option><option>July</option><option>August</option><option>September</option><option>October</option><option>November</option><option>December</option> </select>      Year:   <select name="year" required><option></option><?php $i=1950;while($i<=2020) { ?> <option> <?php echo $i; $i++; ?></option>  <?php } ?>  </select>
		Handle		*		:<input type="text" name="handle" value="" required>
		Username     	*		:<input type="text" name="user" value="" required>
		Password     	*		:<input type="password" name="pass" value="" required><font size=4>(Minimum : 6 characters,Maximum : 20 characters,should contain a lowercase,uppercase and a number)</font>
		Confirm Password	*	:<input type="password" name="pass1" value="" required>
		Email-ID    	*		:<input type="email" name="email" value="" required placeholder="eg: xyz@gmail.com">
		Contact No	*		:<input type="text" name="phone" value="" required placeholder="only numeric values">
		Address     			:
			   			<textarea rows=5 cols=50 value="" name="address"></textarea>
		Nationality  	*		:<select name="nation" required><option>India</option><option>China</option><option>Japan</option><option>Korea</option><option>USA</option><option>England</option><option>Russia</option><option>Germany</option><option>Saudi Arabia</option><option>Spain</option><option>Italy</option><option>Australia</option> </select>
		Gender       	*		:<input type="radio" name="gender" value="Male" required>Male     <input type="radio" name="gender" value="Female" required>Female
		Interested Programming Languages	:<input type="checkbox" name="program[]" value="C"><label>C</label>           <input type="checkbox" name="program[]" value="C++"><label>C++</label>      <input type="checkbox" name="program[]" value="JAVA"><label>JAVA</label>

		
					

				(NOTE:  * are mandatory fields)
				

								<input type="submit" name="submit" value="REGISTER">    
		</pre>
		</form>
	
		<center>
		<form method="POST">
	 <input type="submit" name="home" value="HOMEPAGE" formaction="home.php">
		</form>
		</center>
					
	</body>
</html>
		
			