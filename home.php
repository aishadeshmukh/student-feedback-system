<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
  /* font-family: Arial, Helvetica, sans-serif; */
}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
  font-size:24px;
}

/* Style the top navigation bar */
.topnav {
  overflow: hidden;
  background-color: black;
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

/* Style the content */
.content {
    background-image:url("p2.jpg");
  padding: 100px;
  height: 800px; /* Should be removed. Only for demonstration */
  background-size:cover;
}

/* Style the footer */
.footer {
  background-color: black;
  padding: 40px;
  margin-top:0%;
}


.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 18px 34px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
  cursor: pointer;
}


.button5 {
  background-color: grey;
  color: black;
  border: 3px solid #555555;
}

.button5:hover {
  background-color: #555555;
  color: white;
}
.para
{
margin-left:20%;
font-size:28px;
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

<div class="content">
    <div class="para">
    <br><br>
  <h2 style="font-size:70px;">STUDENT FEEDBACK SYSTEM</h2>
  <p style="margin-left:20%;">Computer Science Department</p>
    <br><br><br>
  <!-- <button class="button button5" style="margin-left:30%;">Start</button> -->
    </div>
</div>


<div class="footer">
  
</div>

</body>
</html>
