
<?php

//start_session();


if(isset($_POST['submit']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];

    $host="localhost";
    $user="postgres";
    $pass="aishapsql";
    $db="project";
    
    $connect=pg_connect("host=$host dbname=$db user=$user password=$pass") or die("Could not connect to server");

 $query = "select * from admin where admin_userid='$username' and admin_password='$password'";

 $rs=pg_query($connect,$query) or die("Cannot execute query:$query\n");
     
     if(pg_num_rows($rs)>0)
     header("Location:hoddetails.php");
     else
     {
        echo "<script>
                alert('Verify the username and password entered.');
                window.location.href='adminlogin.php';
                </script>";
    }
    
 pg_close($connect);
 
}
?>