<html>
<head>
<style>

body
{
	background-image:url("p2.jpg");
    margin:0;
}

.block
    {
      position: relative;
      background-color: white;
      width: 30%;
      left: 30%;
      margin-top: 5%;
      border: 5px solid black;
      padding: 80px;
      height:auto;
    }

.center
{
    position:relative;
    margin-left:45%;
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
.topnav a 
{
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 30px 16px;
  text-decoration: none;
}

/* Change color on hover */
.topnav a:hover 
{
  background-color: grey;
  color: black;
}

/* Style the footer */
.footer 
{
  background-color: black;
  padding: 40px;
  margin-top:9.6%;
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

    <form action="addfaculty2.php" method="post">
    <div class="block" style="font-size:20px">

<b>Faculty Details</b> <br> <hr> <br> <br>

    <span style="float:right">
    Email<font color="red">*</font>
    <br>
    <input type="text" name="email" required="required">
    </span>

    Name<font color="red">*</font>
    <br>
    <input type="text" name="name" required="required"><br><br>

    <span style="float:right">
     Contact<font color="red">*</font>
     <br>
    <input type="text" name="contact" maxlength="10" required="required">
    </span>

    Department<font color="red">*</font>
    <br>
    <input type="text" name="department" required="required"><br><br>

    <span style="float:right">
    Subject<font color="red">*</font>
    <br>
    <input type="text" name="subject" required="required">
    </span>

    Class<font color="red">*</font>
    <br>
    <input type="text" name="class" required="required"><br><br>

    <br><br>
    <div class="center">
    <input type="submit" name="submit" value="Add Faculty">
    </div>

    </div>

</form>

<div class="footer">
  	  </div>

</body>
</html>