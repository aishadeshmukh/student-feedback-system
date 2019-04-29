<html>

	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>

		body
		{
		  background-image:url("p2.jpg");
		  margin:0;
		}

		.center 
		{
		position: absolute;
		background-color: white;
    	margin: auto;
    	width: 15%;
    	margin-top: 10%;
    	left: 38%;
    	border: 5px solid black;
    	padding: 80px;
		}																																															
	 	
		 /* Style the top navigation bar */
.topnav {
  overflow: hidden;
  background-color: black;
  width:100%;
  margin-top:0;
  font-size:24px;
}

/* Style the topnav links */
.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 30px 16px;
  text-decoration: none;
}

/* Change color on hover */
.topnav a:hover {
  background-color: grey;
  color: black;
}

/* Style the footer */
.footer {
  background-color: black;
  padding: 40px;
  margin-top:42%;
}


	</style>
	</head>

	<body>

	<div class="topnav">
		<a href="home.php">Home</a>
		<a href="adminlogin.php">Admin</a>
		<a href="hodlogin.php">HOD</a>
		<a href="student.php">Student</a>
	</div>

		
		<form action="page7.php" method="post">
		
		<div class="center" style="font-size: 20">
		
		
		<b>Head Of Department</b><br><br><br>
		<b>Login Details</b><br><hr><br>
		Enter Username<font color="red">*</font>
		<br>
		<input type="text"  name="username"  id="username" required="required"/>
		<br><br><br>

		Enter Password<font color="red">*</font>
		<br>
			<input type="password" name="password" id="password" required="required"/><br>
			<input type="checkbox" onclick="myFunction()" style="font-size:8">Show Password

			<br><br>
			<input type="submit" name="submit" value="submit"/>
			
		</div>
          
		  
		<script>
		function myFunction() {
    	var x = document.getElementById("password");
    	if (x.type === "password") 
    	{
        	x.type = "text";
    	} 
    	else 
    	{
        x.type = "password";
    	}
		}
		</script>

	    
	 </form>
	 <div class="footer">
  	  </div>

	</body>
	
</html>