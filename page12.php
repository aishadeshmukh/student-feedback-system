<?php

session_start();

$host="localhost";
$user="postgres";
$pass="aishapsql";
$db="project";

$connect=pg_connect("host=$host dbname=$db user=$user password=$pass") or die("Could not connect to server");

$t1=" select faculty_name from faculty";
$t2 = pg_query($connect,$t1) or die("Cannot execute query:$t1\n");


$_SESSION['faculty_name'] = array();
if(pg_num_rows($t2))
{
	while($fname = pg_fetch_row($t2))
	{		
		array_push($_SESSION['faculty_name'],$fname[0]);       
	}
}

pg_close();

?>