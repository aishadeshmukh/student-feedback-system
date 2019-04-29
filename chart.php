<?php

$host="localhost";
$user="postgres";
$pass="aishapsql";
$db="project";

$connect=pg_connect("host=$host dbname=$db user=$user password=$pass") or die("Could not connect to server");


$facs = $_POST['faculty_name'];
$cs = $_POST['class_name'];

$ex="select rating1,rating2,rating3,rating4,rating5 from feedback where faculty_name='$facs' and class_name='$cs'";
$r = pg_query($connect,$ex) or die("Cannot execute query:$ex\n");

$_SESSION['r1'] = array();
$_SESSION['r2'] = array();
$_SESSION['r3'] = array();
$_SESSION['r4'] = array();
$_SESSION['r5'] = array();
if(pg_num_rows($r))
{
	
	while($r1 = pg_fetch_row($r))
	{		
        array_push($_SESSION['r1'],$r1[0]);
        array_push($_SESSION['r2'],$r1[1]);
        array_push($_SESSION['r3'],$r1[2]);
        array_push($_SESSION['r4'],$r1[3]);
        array_push($_SESSION['r5'],$r1[4]);
	}
}


$_SESSION['rt1'] = array_sum($_SESSION['r1']);
$_SESSION['rt2'] = array_sum($_SESSION['r2']);
$_SESSION['rt3'] = array_sum($_SESSION['r3']);
$_SESSION['rt4'] = array_sum($_SESSION['r4']);
$_SESSION['rt5'] = array_sum($_SESSION['r5']);

$_SESSION['total'] = $_SESSION['rt1'] + $_SESSION['rt2'] + $_SESSION['rt3'] + $_SESSION['rt4'] + $_SESSION['rt5'];


$_SESSION['total1'] = ($_SESSION['rt1']/$_SESSION['total']) * 360;
$_SESSION['total2'] = ($_SESSION['rt2']/$_SESSION['total']) * 360;
$_SESSION['total3'] = ($_SESSION['rt3']/$_SESSION['total']) * 360;
$_SESSION['total4'] = ($_SESSION['rt4']/$_SESSION['total']) * 360;
$_SESSION['total5'] = ($_SESSION['rt5']/$_SESSION['total']) * 360;


if( isset($_POST['pies']))
{
	$dataPoints = array( 
		array("label"=>"Punctuality", "y"=>$_SESSION['total1']),
		array("label"=>"Availabity", "y"=>$_SESSION['total2']),
		array("label"=>"Knowledge", "y"=>$_SESSION['total3']),
		array("label"=>"Interactivity", "y"=>$_SESSION['total4']),
		array("label"=>"Communication Skills", "y"=>$_SESSION['total5'])
	);
	
	pg_close();
 ?>

<!DOCTYPE HTML>
<html>
<head>
<style>
body
{
	background-image:url("p2.jpg");
	margin:0;
	background-repeat: no-repeat;
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
		margin-top:0%;
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
		title: {
		text: "<?php echo $facs;?>"
		},
		subtitles: [{
		text: "<?php echo $cs;?>"
		}],
		data: [{
		type: "pie",
		showInLegend: "true",
        legendText: "{label}",
        indexLabelFontSize: 16,
		yValueFormatString: "#,##0.00\"%\"",
		indexLabel: "{label} ({y})",
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
		}]  
		});
	 chart.render();}
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
<script src="https://canvasjs.com/assets/script/canvasjs.min.js">		
</script>

<div class="footer">
  	  </div>

</body>
</html>

	<?php } 
	
	else if(isset($_POST['bars']))
	{

		$dataPoints = array(
			array("x"=> 10, "label"=> "Punctuality","y"=> $_SESSION['total1']),
			array("x"=> 20, "label"=> "Availability","y"=> $_SESSION['total2']),
			array("x"=> 30, "label"=> "Knowledge","y"=> $_SESSION['total3']),
			array("x"=> 40, "label"=> "Interactivity","y"=> $_SESSION['total4']),
			array("x"=> 50, "label"=> "Communication skills","y"=> $_SESSION['total5'])
		);
		
			
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
		margin-top:18%;
		}
		</style> 
		
		<script>
		window.onload = function () {
		 
		var chart = new CanvasJS.Chart("chartContainer", {
			animationEnabled: true,
			exportEnabled: true,
			theme: "light1", // "light1", "light2", "dark1", "dark2"
			title:{
				text: "<?php echo "Feedback of $facs of class $cs"?>"
			},
			data: [{
				type: "column", //change type to bar, line, area, pie, etc
				//indexLabel: "{y}", //Shows y value on all Data Points
				indexLabelFontColor: "#5A5757",
				indexLabelPlacement: "outside",   
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

		<br><br><br><br><br>
		<div id="chartContainer" style="height: 370px; width: 100%;"></div>
		<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

		<div class="footer">
  	  </div>

		</body>
		</html>

<?php	}

?>

