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
      position: absolute;
      background-color: white;
      margin: auto;
      width: 15%;
      left: 38%;
      margin-top: 100px;
      border: 5px solid black;
      padding: 50px;
    }

.button {
  position: absolute;
  width: 500px;
  left:400px;
  top: 180px;
  text-align: center;
  opacity: 0;
  transition: opacity .35s ease;
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

.button a {
  width: 500px;
  padding: 12px 48px;
  text-align: center;
  color: white;
  border: solid 2px white;
  z-index: 1;
}

.container:hover .button {
  opacity: 1;
}
.button1:hover 
{
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}

#rcorners2
		{
		border-radius: 25px;
		padding: 20px; 
		width: 140px;
		height: 60px;    
		}

    .buttons
		{
 	    background-color: #4CAF50; /* Green */
    	border: none;
    	color: white;
    	padding: 35px 52px;
    	text-align: center;
    	text-decoration: none;
    	display: inline-block;
    	font-size: 18px;
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
  margin-top:41.3%;
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

  <form action="checkfeedback.php" method="POST">
  <div class="block">
  <p> <b> CLASS </b> </p> <br>
  <p> BSC.COMPUTER SCIENCE </p> <hr>

      <p>
      <label>
        <input name="class" type="radio" value="FYBCS"/>
        <span>FY</span>
      </label>
      </p>

      <p>
      <label>
        <input name="class" type="radio" value="SYBCS" />
        <span>SY</span>
      </label>
      </p>

      <p>
      <label>
        <input name="class" type="radio" value="TYBCS" />
        <span>TY</span>
      </label>
      </p>

      <p> MSC.COMPUTER SCIENCE </p>

      <p>
      <label>
        <input name="class" type="radio" value="MCS-I" />
        <span>MCS-I</span>
      </label>
      </p>

      <p>
      <label>
        <input name="class" type="radio" value="MCS_II" />
        <span>MCS-II</span>
      </label>
      </p>

       <p> DIVISION </p>

      <p>
      <label>
        <input name="division" type="radio" value="A" />
        <span>A</span>
      </label>
      </p>

      <p>
      <label>
        <input name="division" type="radio" value="B" />
        <span>B</span>
      </label>
      </p>

	<p>
      	<input type="submit" name="submit" value="Submit" >
      </p>
  </div>

  <?php
  include 'page9.php';
  ?>

</form>

<div class="footer">
  	  </div>

</body>

</html>
