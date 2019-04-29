<!DOCTYPE html>
<html>
<head>
<style>
body
{
  background-image:url("p2.jpg");
  margin:0;
  background-repeat: no-repeat;
}

#customers 
{
  font-family: "verdana";
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th 
{
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}
#customers tr:nth-child(odd){background-color: white;}

#customers tr:hover {background-color: #ddd;}

#customers th 
{
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
    margin-top:0%;
    width:65%;
}

.block
    {
      position: relative;
      background-color: white;
      margin: auto;
      width: 65%;
      margin-top: 8%;
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
  margin-top:9.2%;
}

</style>
</head>

<body>

<div class="topnav">
		<a href="home.php">Home</a>
		<a href="adminlogin.php">Admin</a>
		<a href="hodlogin.php">HOD</a>
		<a href="student.php">Student</a>
    <a style="float:right" href="adminlogin.php">Logout</a>
	</div>

<form action="hoddetails.php" method="POST">
<div class="block">

<p>Head of Department Details</p> <button><a href="addhod.php">ADD</a></button>


<table id="customers">
  <tr>
    <th>NAME</th>
    <th>DEPARTMENT</th>
    <th>EMAIL</th>
    <th>UPDATE</th>
  </tr>

  <?php
  include 'admin3page.php'; 
  //session_start();

        for( $j = 0 ; $j<count($_SESSION['hod']) ; $j++)
       {
         $hod[$j] = $_SESSION['hod'][$j];
       }
   
        for( $j = 0 ; $j<count($_SESSION['hod_email']) ; $j++)
       {
         $hod[$j] = $_SESSION['hod_email'][$j];
       }

       for( $j = 0 ; $j<count($_SESSION['department']) ; $j++)
       {
         $hod[$j] = $_SESSION['department'][$j];
       }

       
if (pg_num_rows($rs) > 0) 
{
          for($i=0;$i<count($_SESSION['hod']);$i++)
          {
         echo '<tr>
                 <td>'.$_SESSION['hod'][$i].'</td>                                        
                 <td>'.$_SESSION['department'][$i].'</td>
                 <td>'.$_SESSION['hod_email'][$i].' </td>
                 <td style=white-space: nowrap>
                      <form action="deletehod.php" method="POST"> 
                          <button type="submit" name="delete" value="'.$_SESSION['hod'][$i].'">Delete</button>
                      </form>
             </tr>';
          }
}
?>
  
  </tr>
        
</table>
</div>

<div class="footer">
  	  </div>

</body>
</html>