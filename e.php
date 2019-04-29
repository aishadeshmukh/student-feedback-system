<?php
//echo "hi";
//function todo($arr)
//{
//session_start();
		
//include 'screen13.php';
$host="localhost";
$user="postgres";
$pass="aishapsql";
$db="project";

$connect=pg_connect("host=$host dbname=$db user=$user password=$pass") or die("Could not connect to server");

$feed = array();
$cls = array();
// for($j = 0 ; $j<count($_SESSION['ab']) ; $j++)
//{
        // for($i = 0 ; $i<count($_SESSION['class']) ; $i++)
        // {
//  $feed=array_values($_SESSION['ab']);
 //$cls=array_values($_SESSION['']);


 $facs = $_POST['pie'];
 $cs = $_POST['class_name'];
$ex="select rating1,rating2,rating3,rating4,rating5 from feedback where faculty_name='$facs' and class_name='$cs'";
$r = pg_query($connect,$ex) or die("Cannot execute query:$ex\n");

?>
<!DOCTYPE html>
<html lang="en">
<head>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);
 
function drawChart() {
 
    var data = google.visualization.arrayToDataTable([
      ['Language', 'Rating'],
      <?php
      if(pg_num_rows($r) > 0){
          while($row = pg_fetch_row($r)){
            echo $row['rating1'];
			echo $row['rating2'];
            echo $row['rating3'];
            echo $row['rating4'];
            echo $row['rating5'];
          }
      }
      ?>
    ]);
    
    var options = {
        title: 'Most Popular Social Media',
        width: 900,
        height: 500,
    };
    
    var chart = new google.visualization.PieChart(document.getElementById('piechart'));
    
    chart.draw(data, options);
}
</script>
</head>
<body>
    <!-- Display the pie chart -->
    <div id="piechart"></div>
</body>
</html>

<?php 
  
pg_close();
//}
//}
?>
