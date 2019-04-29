<?php

session_start();

$host="localhost";
$user="postgres";
$pass="aishapsql";
$db="project";

$connect=pg_connect("host=$host dbname=$db user=$user password=$pass") or die("Could not connect to server");

$hod="select * from HOD,department where HOD.HOD_name=department.HOD_name";
$rs=pg_query($connect,$hod) or die("Cannot execute query:$hod\n");

if(pg_num_rows($rs))
{
    $_SESSION['hod'] = array();
    $_SESSION['hod_email'] = array();
    $_SESSION['department'] = array();
	while($hod = pg_fetch_row($rs))
	{	
        array_push($_SESSION['hod'],$hod[0]);	
        array_push($_SESSION['hod_email'],$hod[1]);
        array_push($_SESSION['department'],$hod[5]);
		echo "<br>";
    }
}

// for( $j = 0 ; $j<count($_SESSION['hod']) ; $j++)
//  {	
// 	echo "\nIn Name";
// 	echo "\n";
//     echo $_SESSION['hod'][$j];
//     echo "<br>";
//  }

//  for( $j = 0 ; $j<count($_SESSION['hod_email']) ; $j++)
//  {	
// 	echo "\nIn E-mail";
// 	echo "\n";
//     echo $_SESSION['hod_email'][$j];
//     echo "<br>";
//  }

 
//  for( $j = 0 ; $j<count($_SESSION['department']) ; $j++)
//  {	
// 	echo "\nIn Department";
// 	echo "\n";
//    echo $_SESSION['department'][$j];
//  }


pg_close($connect);
?>