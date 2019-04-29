<?php

$host="localhost";
$user="postgres";
$pass="aishapsql";
$db="project";

$connect=pg_connect("host=$host dbname=$db user=$user password=$pass") or die("Could not connect to server");

$classname = $_POST['classname'];

$ex="select faculty.faculty_name from subject,class,faculty where class.class_name=subject.class_name and faculty.faculty_name=subject.faculty_name and class.class_name='$classname'";
$r = pg_query($connect,$ex) or die("Cannot execute query:$ex\n");

$_SESSION['teachername'] = array();
while($row = pg_fetch_row($r))
{
    array_push($_SESSION['teachername'],$row[0]);
}

// for($i = 0 ; $i < count($_SESSION['teachername']) ; $i++)
// {
//     echo $_SESSION['teachername'][$i];
// }

$overall = array();

for($i = 0 ; $i < count($_SESSION['teachername']) ; $i++)
{
    $cc = array_values($_SESSION['teachername']);
    $q1 = "select rating1,rating2,rating3,rating4,rating5 from feedback where class_name='$classname' and faculty_name='$cc[$i]'";
    $q2 = pg_query($connect,$q1) or die("Cannot execute query:$q1\n");


$_SESSION['rate1'] = array();
$_SESSION['rate2'] = array();
$_SESSION['rate3'] = array();
$_SESSION['rate4'] = array();
$_SESSION['rate5'] = array();

if(pg_num_rows($q2))
{
	
	while($r1 = pg_fetch_row($q2))
	{		
        array_push($_SESSION['rate1'],$r1[0]);
        array_push($_SESSION['rate2'],$r1[1]);
        array_push($_SESSION['rate3'],$r1[2]);
        array_push($_SESSION['rate4'],$r1[3]);
        array_push($_SESSION['rate5'],$r1[4]);
	}
}


$_SESSION['rating1'] = array_sum($_SESSION['rate1']);
$_SESSION['rating2'] = array_sum($_SESSION['rate2']);
$_SESSION['rating3'] = array_sum($_SESSION['rate3']);
$_SESSION['rating4'] = array_sum($_SESSION['rate4']);
$_SESSION['rating5'] = array_sum($_SESSION['rate5']);

$_SESSION['totalrate'] = $_SESSION['rating1'] + $_SESSION['rating2'] + $_SESSION['rating3'] + $_SESSION['rating4'] + $_SESSION['rating5'];

array_push($overall,$_SESSION['totalrate']);
}

$dataPoints = array();

for($i = 0 ; $i < count($overall),$i < count($_SESSION['teachername']) ; $i++){
    array_push($dataPoints, array("x"=>$i,"label"=>$_SESSION['teachername'][$i] , "y"=>$overall[$i]));
}
?>

<!DOCTYPE HTML>
<html>
<head>

<style>
    body
    {
        background-image:url("p2.jpg");
		margin:0;
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
  margin-top:19%;
}

</style>

<script>
window.onload = function() {
 
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
    exportEnabled: true,
	theme: "light2",
	title:{
		text: "<?php echo $classname; ?>"
	},
	axisY: {
		title: "Ratings"
	},
	data: [{
		type: "column",
		yValueFormatString: "#,##0.## tonnes",
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
 
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

<br><br><br><br>

<div id="chartContainer" style="height: 370px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

<div class="footer">
  	  </div>

</body>
</html>                              