<?php

if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $department=$_POST['department'];
    $email=$_POST['email'];
    $contact=$_POST['contact'];
    $userid=$_POST['userid'];
    $password=$_POST['password'];

    if(!preg_match("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^",$email))
    { 
        echo "<script>
        alert('Invalid Emailid.');
        window.location.href='addhod.php';
        </script>";
    }
    else
    {

    $host="localhost";
    $user="postgres";
    $pass="aishapsql";
    $db="project";
    
    $connect=pg_connect("host=$host dbname=$db user=$user password=$pass") or die("Could not connect to server");

    if($password==$confirm)
    {
        $query1="insert into HOD values('$name','$email','$contact','$userid','$password')";
        $q1=pg_query($connect,$query1) or die("Cannot execute query:$query1\n");

        
        $query2="insert into department values('$department','$name')";
        $q2=pg_query($connect,$query2) or die("Cannot execute query:$query2\n");

        echo "<script type='text/javascript'>alert('Registration Successful');</script>";
        header("Location:admin3.php");
    }
    else
       echo "<script type='text/javascript'>alert('Password does not match');</script>";

      pg_close();
}
}

?>