<!DOCTYPE html>
<html>
<head>
<style>
body
{
  background-image:url("p2.jpg");
  margin:0;
}
#customers {
  font-family: "verdana";
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}
#customers tr:nth-child(odd){background-color: white;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: black;
  color: white;
}

table
{
    position:relative;
    margin-left:2%;
    margin-top:5%;
    width:30%;
}

.block
    {
      position: absolute;
      background-color: white;
      margin: auto;
      width: 60%;
      left: 17%;
      margin-top: 140px;
      border: 5px solid black;
      padding: 70px;
      height:auto;
    }

    p
    {
        /* font-family:"verdana"; */
        color:black;
        text-align:left;
        font-size:50;
    }

    .center
    {
        margin-left:45%;
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
s
{
  margin-top:1%;
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

<div class="block">

<b>Student Names who have not submitted feedback</b><br><hr>

<table id="customers">
  <tr>
    <th>STUDENT NAME</th>  
    <th>EMAIL</th>
  </tr>

  <?php
    include 'page9.php'; 
  
        for( $j = 0 ; $j<count($_SESSION['notchecked']) ; $j++)
       {
         $notchecked[$j] = $_SESSION['notchecked'][$j];
       }

       for( $j = 0 ; $j<count($_SESSION['student_email']) ; $j++)
       {
         $notchecked[$j] = $_SESSION['student_email'][$j];
       }
   
       
      for( $j = 0 ; $j<count($_SESSION['notchecked']) ; $j++)
       {
        for( $j = 0 ; $j<count($_SESSION['notchecked']) ; $j++)
        {
       ?>   
  <tr>
    <td><?php echo $_SESSION['notchecked'][$j]; ?></td>
    <td><?php echo $_SESSION['student_email'][$j]; ?></td>

       </tr>
       <?php
     }
    }?>
</table>

<?php
for($i=0;$i<count($_SESSION['student_email']);$i++)
{
   $notchechked[$i]=$_SESSION['student_email'][$i];
}

$mail=implode(',',$_SESSION['student_email']);
?>
<form action="mailto:<?php echo $mail;?>" method="post" enctype="text/plain">


<br><br>
<div  style="display:none">
  <input type="text" name="FeedBack" value="Dear Student, <br>You have not given feedback for this semester.<br>Kindly submit it within this week.">
</div>

<input class="center" type="submit"  value="Send Email"/>

</form>
</div>

<div class="footer">
  	  </div>

</body>
</html>