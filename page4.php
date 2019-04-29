<?php

// session_start();

$host="localhost";
$user="postgres";
$pass="aishapsql";
$db="project";

$connect=pg_connect("host=$host dbname=$db user=$user password=$pass") or die("Could not connect to server");

$query="select * from question";
$rs=pg_query($connect,$query) or die("Cannot execute query:$query\n");

if(pg_num_rows($rs))
{
	$_SESSION['q'] = array();
	while($question = pg_fetch_row($rs))
	{	
        array_push($_SESSION['q'],$question[1]);	
		
		echo "<br>";
    }
}

pg_close($connect);
?>