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
				var len1=no.length;
				var i=0,x,count=0;
				for(i=0;i<len1;i++){
					x=no.charCodeAt(i);
					if(x>=48 && x<=57)count++;
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
			<font size=8 color="red" face="cooperblack">
			 Update User's Profile
			</font>
		</marquee>
		<hr>
		<br><br>
		<form name="register" method="POST" onsubmit="return validate();" action="update3.php">
		<pre>
		<font size=5 face="Lucida Calligraphy" color="blue">
		First Name 			:<input type="text" name="f_name" value="">
		Last Name 			:<input type="text" name="l_name" value="">
		Date of Birth			:Date:  <select name="date"><option></option><?php $i=1;while($i<=31){  ?>  <option><?php echo $i; $i++; ?></option>  <?php }  ?></select>      Month:  <select name="month"><option></option><option>January</option><option>February</option><option>March</option><option>April</option><option>May</option><option>June</option><option>July</option><option>August</option><option>September</option><option>October</option><option>November</option><option>December</option> </select>      Year:   <select name="year"><option></option><?php $i=1950;while($i<=2020) { ?> <option> <?php echo $i; $i++; ?></option>  <?php } ?>  </select>
		Email-ID    			:<input type="email" name="email" value="">
		Contact No			:<input type="text" name="phone" value="">
		Address     			:
			   			<textarea rows=5 cols=50 value="" name="address"></textarea>
		Nationality  			:<select name="nation"><option></option><option>India</option><option>China</option><option>Japan</option><option>Korea</option><option>USA</option><option>England</option><option>Russia</option><option>Germany</option><option>Saudi Arabia</option><option>Spain</option><option>Italy</option><option>Australia</option> </select>			

				(NOTE:  empty fields will not be updated)
		<input type="text" name="users" value="<?php echo $_POST["users"]; ?>" hidden>		

								<input type="submit" name="submit" value="Update">    
		</pre>
		</form>
	
		<center>
		<form method="POST">
	 <input type="submit" name="home" value="HOMEPAGE" formaction="home.php">
		</form>
		</center>
					
	</body>
</html>
		
			