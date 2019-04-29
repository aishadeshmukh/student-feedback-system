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
  background-color: transparent;
  margin: auto;
  width: 60%;
  left: 14%;
  margin-top: -50px;
  border: 3px solid transparent;
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


<script language="javascript" type="text/javascript">
function showRow(row)
{
var x=row.cells;
document.getElementById("teach").value = x[0].innerHTML;
}
</script>


</head>

<body>

<div class="topnav">
		<a href="home.php">Home</a>
		<a href="adminlogin.php">Admin</a>
		<a href="hodlogin.php">HOD</a>
		<a href="student.php">Student</a>
    <a style="float:right" href="hodlogin.php">Logout</a>
	</div>

<form action="teacherfeedback.php" method="POST">
<div class="block">

<font color="white" size="5px"> <b>LIST  OF  TEACHERS</b> </font>

<table id="customers">
  <tr>
    <th>TEACHER NAME</th>  
    <th>FEEDBACK</th>
  </tr>

  <?php
    session_start();

    $host="localhost";
    $user="postgres";
    $pass="aishapsql";
    $db="project";
    
    $connect=pg_connect("host=$host dbname=$db user=$user password=$pass") or die("Could not connect to server");
    
    $t1=" select * from faculty";
    $t2 = pg_query($connect,$t1) or die("Cannot execute query:$t1\n");
 
    $_SESSION['faculty_name'] = array();
    if(pg_num_rows($t2))
    {
      while($fname = pg_fetch_row($t2))
      {		
        array_push($_SESSION['faculty_name'],$fname[0]);       
      }
    }
     
    if(pg_num_rows($t2)>0)
    {
      for($j = 0 ; $j<count($_SESSION['faculty_name']) ; $j++)
       {
         $i = $_SESSION['faculty_name'][$j];
        echo '<tr>
                <td>'.$_SESSION['faculty_name'][$j].'</td>
                <td>
                <button type="submit" name="showed" value="'.$i.'">View Feedback</button></td>
            </tr>';
        }
    }

    pg_close($connect);
    ?>

</table>

</div>
</form>

<div class="footer">
  	  </div>

</body>
</html>