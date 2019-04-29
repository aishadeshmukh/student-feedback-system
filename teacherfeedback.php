<html>

	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
	<style>

		body
		{
		  background-image:url("p2.jpg");
		  margin:0;
		}

		.center
		 {
    	display: block;
    	margin-left: 650px;
    	margin-right: 150px;
    	margin-top:320px;
    	width: 100%;
		}

		.button 
		{
 	    background-color: black; 
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

		#rcorners1 
		{
    	border-radius: 25px;
    	padding: 20px; 
    	width: 200px;
    	height: 100px;    
		}

		.button1:hover 
	 	{
     	box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
	 	}

		.shift
		{
			position:relative;
			margin-left:15%;
		}

		p
		{
			color:white;
			font-size:20px;
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
		margin-top:22%;
		}
		
	</style>
	</head>

<?php
// include_once 'ex.php';

session_start();
$x = array();
$_SESSION['ab'] = array();
$f1 = array();

$a = $_POST['showed'];
for($j = 0 ; $j<count($_SESSION['faculty_name']) ; $j++)
{
	$x[$j] = $_POST['showed'];
	$_SESSION['ab'][$j] = $x[0];
	if($_SESSION['ab'][$j] == $_SESSION['faculty_name'][$j])
	{
		$host="localhost";
		$user="postgres";
		$pass="aishapsql";
		$db="project";
		
		$connect=pg_connect("host=$host dbname=$db user=$user password=$pass") or die("Could not connect to server");
		
		for($j = 0 ; $j<count($_SESSION['ab']) ; $j++)
		{
			$f1 = array_values($_SESSION['ab']);
			$std="select distinct class.class_name from subject,faculty,class where class.class_name=subject.class_name and faculty.faculty_name=subject.faculty_name and faculty.faculty_name='$f1[$j]'";
			$cl=pg_query($connect,$std) or die("Cannot execute query:$std\n");

			if(pg_num_rows($cl)>0)
			{
				$_SESSION['class'] = array();
				while($row = pg_fetch_row($cl))
				{
					array_push( $_SESSION['class'],$row[0]);
				}
			}

				for($i=0;$i<count($_SESSION['class']);$i++)
				{
					$c[$i]=$_SESSION['class'][$i];
				}

		} 
		$arr=array_values($_SESSION['class']);
	?>

		<body>

		<div class="topnav">
		<a href="home.php">Home</a>
		<a href="adminlogin.php">Admin</a>
		<a href="hodlogin.php">HOD</a>
		<a href="student.php">Student</a>
		<a style="float:right" href="hodlogin.php">Logout</a>
		</div>

			<br>

			<p> <b> Select category of Feedback </b> </p><br><br>

	<?php
		$_SESSION['abc'] =array();
		for($i=0;$i<count($_SESSION['class']);$i++)
		{	
			$_SESSION['abc'] = $arr[$i];
			echo "<br><button value='".$_SESSION['abc']."' class=button button1 id=rcorners1 onclick=myFunction(); todo(this.value);>". $arr[$i]."</button>";
			?>
			<form action="chart.php" method="post">
			<body>
			<div class="shift" id="mydiv" style="display:none">
				<input type="hidden" name="class_name" value="<?php echo $_SESSION['class'][$i];?>"/>
				<input type="hidden" name="faculty_name" value="<?php echo $a;?>"/>
				
				<button class="button button1" id="rcorners1" name="pies" value="pies">Pie Chart </button><br>
				<button class="button button1" id="rcorners1" name="bars"  value="bars">Bar Graph</button><br>
			</div>
			</body>
			</form>
		
			<?php
		}
	}
}
?>

<script>
	function myFunction() 
	{
  		var x = document.getElementById("mydiv");
  		if (x.style.display === "block")
  		 {
    		x.style.display = "none";
  		 } 
		else 
		{
    		x.style.display = "block";
  		}
	}
</script>

</div>

<div class="footer">
  	  </div>

</body>

</html>

