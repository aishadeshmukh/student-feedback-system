<html>

	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
	<style>

		body
		{
		  background-image:url("p2.jpg");
		  margin:0;
		  background-repeat: no-repeat;
		}

		.center
		 {
    	display: block;
    	margin-left: 33%;
    	margin-right: 150px;
    	margin-top:12%;
    	width: 100%;
		}

		.button 
		{
 	    background-color: grey; /* Green */
    	border: none;
    	color: white;
    	padding: 65px 82px;
    	text-align: center;
    	text-decoration: none;
    	display: inline-block;
    	font-size: 18px;
    	margin: 6px 4px;
    	cursor: pointer;
    	-webkit-transition-duration: 0.4s; /* Safari */
    	transition-duration: 0.4s;
		}

		#rcorners1 
		{
    	border-radius: 25px;
    	padding: 40px; 
    	width: 250px;
    	height: 150px;    
		}

		.button1:hover 
	 	{
     	box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
	 	}
	 	
		 #rcorners2
		{
		border-radius: 25px;
		padding: 50px; 
		width: 200px;
		height: 60px;    
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
  margin-top:15%;
}


	</style>
	</head>

	<body>
	<div class="topnav">
		<a href="home.php">Home</a>
		<a href="adminlogin.php">Admin</a>
		<a href="hodlogin.php">HOD</a>
		<a href="student.php">Student</a>
		<a style="float:right" href="hodlogin.php">Logout</a>
	</div>

		 <!-- <button class="button button1" id="rcorners2" onclick="location.href='scree.php'"> HOME </button> -->

		<div class="center">
		<button class="button button1" id="rcorners1" onclick="location.href='checkfeedback.php'">STUDENT FEEDBACK</button> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<button class="button button1" id="rcorners1" onclick="location.href='addfaculty.php'">ADD <br>FACULTY</button> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<br><br>
	    <button class="button button1" id="rcorners1"onclick="location.href='teacherlist.php'">TEACHER STATISTICS</button>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	    <button class="button button1" id="rcorners1"onclick="location.href='overallfeedback.php'">OVERALL CLASS FEEDBACK</button>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	   	</div>
		   <div class="footer">
  	  </div>

	</body>
	
</html>
