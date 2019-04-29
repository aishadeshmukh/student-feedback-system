<!DOCTYPE html>
<html>
<head>

<style>

body
{
	background-image:url("p2.jpg");
	margin:0;
}

.label 
{
	position:relative;	
    color: white;
    padding: 100px;
    font-family: Arial;
    font-size:25px;
	margin-top:2%;
	margin-left:23%;
	width:40%;
}

.center
{
	top:1000px;
}
.success {background-color: black;}

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
  margin-top:13.5%;
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

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<p class="label success">Hello 
<?php
    session_start();
         $name[0] = $_SESSION['na'];
         echo $name[0];

		?>

 ! <br> You have already completed your feedback for this semester</p>


<div class="footer">
  	  </div>

</body>
</html>

