<?php
//session_name("session1");
session_start();
if(isset($_POST['submit']))
{

$class_selected = $_POST['class'];
$division_selected = $_POST['division'];
$rollno_entered = $_POST['roll'];

		
$host="localhost";
$user="postgres";
$pass="aishapsql";
$db="project";

$connect=pg_connect("host=$host dbname=$db user=$user password=$pass") or die("Could not connect to server");

$check="select status from student,division,class,student_class_division where student.reg_no=student_class_division.reg_no and class.class_name=student_class_division.class_name and division.division_name=student_class_division.division_name and class.class_name='$class_selected' and division.division_name='$division_selected' and rollno='$rollno_entered'";
$checks = pg_query($connect,$check) or die("Cannot execute query:$check\n");

$status = pg_fetch_row($checks);
$query="select student.student_name from student,division,class,student_class_division where student.reg_no=student_class_division.reg_no and class.class_name=student_class_division.class_name and division.division_name=student_class_division.division_name and class.class_name='$class_selected' and division.division_name='$division_selected' and rollno='$rollno_entered'";

$rs=pg_query($connect,$query) or die("Cannot execute query:$query\n");

while($name=pg_fetch_row($rs))
{	
$_SESSION['na'] = $name[0];
//echo "$name[0]";
}

if($status[0] != 't')
{

$delete1 = "delete from teacher";
$del1 = pg_query($connect,$delete1) or die("Cannot execute query:$delete1\n");

  
$query2 = "select faculty.faculty_name from faculty,subject,class where faculty.faculty_name=subject.faculty_name and subject.class_name=class.class_name  and class.class_name='$class_selected';";
$tc = pg_query($connect,$query2) or die("Cannot execute query:$query2\n");
$i = 0;
$_SESSION['t'] = array();
if(pg_num_rows($tc))
{
	
	while($tname = pg_fetch_row($tc))
	{		
		array_push($_SESSION['t'],$tname[0]);
	
		// echo $tname[0];
		// $i++;
		
		// echo "<br>";
		// echo $i;	
	}
}

$a = "select * from division";
$ab = pg_query($connect,$a) or die("Cannot execute query:$a");

$_SESSION['ab'] = array();
if(pg_num_rows($ab))
{
	
	while($abc = pg_fetch_row($ab))
	{		
		array_push($_SESSION['ab'],$abc[0]);
	
	}
}

$arr=array_values($_SESSION['t']);

for($i=0; $i<sizeof($arr) ; $i++)
{
$insert = "insert into teacher values('$arr[$i]')";
$in = pg_query($connect,$insert) or die("Cannot execute query:$insert\n");
}

$teacher="select * from teacher";
$teach=pg_query($connect,$teacher) or die("Cannot execute query:$teacher\n");

$_SESSION['teach'] = array();
if(pg_num_rows($teach))
{
	
	while($staff= pg_fetch_row($teach))
	{		
		array_push($_SESSION['teach'],$staff[0]);		
	}
}

$query3="select student.reg_no from student,class,division,student_class_division where student.reg_no=student_class_division.reg_no and class.class_name=student_class_division.class_name and division.division_name=student_class_division.division_name and rollno='$rollno_entered' and class.class_name='$class_selected' and division.division_name='$division_selected'";
$student_id=pg_query($connect,$query3) or die("Cannot execute query:$query\n");

while($stud=pg_fetch_row($student_id))
{
	echo "<br>";
	setcookie('student',$stud[0]);
}

$query4="select class.class_name from class,student,division,student_class_division where class.class_name=student_class_division.class_name and student.reg_no=student_class_division.reg_no and division.division_name=student_class_division.division_name and  class.class_name='$class_selected' and rollno='$rollno_entered' and division.division_name='$division_selected'";
$class=pg_query($connect,$query4) or die("Cannot execute query:$query4\n");


while($classid=pg_fetch_row($class))
{
	echo "<br>";
	setcookie('class',$classid[0]);
}


$query5="select division.division_name from class,student,division,student_class_division where class.class_name=student_class_division.class_name and student.reg_no=student_class_division.reg_no and division.division_name=student_class_division.division_name and  class.class_name='$class_selected' and rollno='$rollno_entered' and division.division_name='$division_selected'";
$division=pg_query($connect,$query5) or die("Cannot execute query:$query\n");

while($divid=pg_fetch_row($division))
{
	echo "<br>";
	setcookie('division',$divid[0]);
}


header("Location:studentfeedback.php");
}

else
header("Location:alreadycomplete.php");
pg_close($connect);
}	
?>
