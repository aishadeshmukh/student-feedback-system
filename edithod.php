<?php


session_start();
$s = "variable";
$_SESSION['abc'] = $s;


if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $contact=$_POST['contact'];
    $userid=$_POST['userid'];
    $password=$_POST['password'];
    $confirm=$_POST['confirm'];

    $host="localhost";
    $user="postgres";
    $pass="aishapsql";
    $db="project";

if($password==$confirm)
{
    $connect=pg_connect("host=$host dbname=$db user=$user password=$pass") or die("Could not connect to server");

    $updatename="update hod set hod_name='$name'";
    $un = pg_query($connect,$updatename) or die("Cannot execute query:$updatename\n");

}
else
{
    echo "<script type='text/javascript'>alert('Password doesnt match');</script>";
    // header("Location:edithod1.php");
}

    pg_close();
}
?>