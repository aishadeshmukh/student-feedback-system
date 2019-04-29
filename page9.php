<?php

session_start();
if(isset($_POST['submit']))
{

$class_selected = $_POST['class'];
$division_selected = $_POST['division'];
		
$host="localhost";
$user="postgres";
$pass="aishapsql";
$db="project";

$connect=pg_connect("host=$host dbname=$db user=$user password=$pass") or die("Could not connect to server");

$ch1=" select distinct student_name,student_email from student,class,division,student_class_division where student.reg_no=student_class_division.reg_no and class.class_name=student_class_division.class_name and student_class_division.division_name=division.division_name and class.class_name='$class_selected' and division.division_name='$division_selected' and status='f'";
$ch2 = pg_query($connect,$ch1) or die("Cannot execute query:$ch1\n");

$_SESSION['notchecked'] = array();
$_SESSION['student_email'] = array();
if(pg_num_rows($ch2))
{
	
	while($notchecked = pg_fetch_row($ch2))
	{		
		array_push($_SESSION['notchecked'],$notchecked[0]);
        array_push($_SESSION['student_email'],$notchecked[1]);
	}
}

header("Location:nofeedback.php");

pg_close();
}
?>