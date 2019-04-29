
<html>
<head>
<style>

body
{
  margin:0;
	background-image:url("p2.jpg");
}

.block
    {
      position: absolute;
      background-color: white;
      margin: auto;
      width: 15%;
      left: 35%;
      margin-top: 50px;
      border: 5px solid black;
      padding: 100px;
    }


.container:hover .button {
  opacity: 1;
}

.button2
	{
	background-color: #4CAF50; /* Green */
    	border: none;
    	color: white;
    	padding: 10px 25px;
    	text-align: center;
    	text-decoration: none;
    	display: inline-block;
    	font-size: 14px;
    	margin: 4px 2px;
    	cursor: pointer;
    	-webkit-transition-duration: 0.4s; /* Safari */
    	transition-duration: 0.4s;
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

	<form action="student.php" id="#form" method="post" name="#form">
  <div class="block">
  <p><b>CLASS</b></p><hr><br>
  <p> BSC COMPUTER SCIENCE </p>

      <p>
      <label>
        <input name="class" type="radio" value="FYBCS"/>
        <span>FY</span>
      </label>
      </p>

      <p>
      <label>
        <input name="class" type="radio" value="SYBCS"/>
        
        <span>SY</span>
      </label>
      </p>

      <p>
      <label>
        <input name="class" type="radio" value="TYBCS"/>
        <span>TY</span>
      </label>
      </p>

      <p> MSC COMPUTER SCIENCE </p>

      <p>
      <label>
        <input name="class" type="radio" value="MCS-I"/>
        <span>MCS-I</span>
      </label>
      </p>

      <p>
      <label>
        <input name="class" type="radio" value="MCS_II"/>
        <span>MCS-II</span>
      </label>
      </p>

       <p> DIVISION </p>

      <p>
      <label>
        <input name="division" type="radio" value="A"/>
        <span>A</span>
      </label>
      </p>

      <p>
      <label>
        <input name="division" type="radio" value="B"/>
        <span>B</span>
      </label>
      </p>
      
      <p> ROLL NO 
      <input type="text" id="rollno" name="roll">
      </p>
      
      <p>
   <input type="submit" name="submit" value="submit"/>
      </p>
  </div>
</form>

<?php
include "page3.php";
?>
<div class="footer">
  	  </div>
  
</body>

</html>
