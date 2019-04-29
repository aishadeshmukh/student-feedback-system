<?php

if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $department=$_POST['department'];
    $email=$_POST['email'];
    $contact=$_POST['contact'];
    $subject=$_POST['subject'];
    $class=$_POST['class'];


    $host="localhost";
    $user="postgres";
    $pass="aishapsql";
    $db="project";
    
    $connect=pg_connect("host=$host dbname=$db user=$user password=$pass") or die("Could not connect to server");

    // $q="insert into class values('$class')";
    // $rs=pg_query($connect,$q)or die("Cannot execute query:$q");

    $q1="insert into faculty values('$name','$email','$contact','$department')";
    $rs1=pg_query($connect,$q1)or die("Cannot execute query:$q1");

    $q2="update subject set faculty_name='$name' where subject_name='$subject'";
    //$q2="insert into subject values('$subject','$class','$name')";
    $rs2=pg_query($connect,$q2)or die("Cannot execute query:$q2");

    echo '<script type="text/javascript">'; 
    echo 'alert("Registration Successfull.");'; 
    echo 'window.location.href = "hodcategory.php";';
    echo '</script>';
       
    pg_close($connect);
}

?>