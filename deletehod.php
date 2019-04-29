<?php
session_start();
$f=array();
$fac=array();
for($j=0;$j<count($_SESSION['hod']);$j++)
  {
    $f[$j] = $_POST['delete'];
    $fac[$j] = $f[0];

    if($fac[$j] == $_SESSION['hod'][$j])
    {
  $host="localhost";
  $user="postgres";
  $pass="aishapsql";
  $db="project";
 
  $connect=pg_connect("host=$host dbname=$db user=$user password=$pass") or die("Could not connect to server");

  for($j = 0 ; $j<count($f) ; $j++)
	{
  $del="delete from department where hod_name='$fac[$j]'";
  $d=pg_query($connect,$del) or die("Cannot execute query:$del\n");

    $delete="delete from HOD where hod_name='$fac[$j]'";
     $dl=pg_query($connect,$delete) or die("Cannot execute query:$delete\n");
	
     echo "<script type='text/javascript'>alert('Record Deleted');</script>";
     header("Location:hoddetails.php");
    
    pg_close();
  }
}
}
?>