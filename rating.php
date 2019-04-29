<?php

//  include 'page3.php';
// session_start();
if(isset($_POST['submit']))
   {
      $rate1=$_POST['rating1'];
      $rate2=$_POST['rating2'];
      $rate3=$_POST['rating3'];
      $rate4=$_POST['rating4'];
      $rate5=$_POST['rating5'];
      $faculty=$_POST['drop'];

        $host="localhost";
        $user="postgres";
        $pass="aishapsql";
        $db="project";

        $connect=pg_connect("host=$host dbname=$db user=$user password=$pass") or die("Could not connect to server");

       $insert = "insert into feedback values('$_COOKIE[class]','$_COOKIE[division]','$faculty','$_COOKIE[student]','$rate1','$rate2','$rate3','$rate4','$rate5')";
       $insertion = pg_query($connect,$insert) or die("Cannot execute query:$insert\n");

       $delete="delete from teacher where tname='$faculty'";
       $del=pg_query($connect,$delete) or die("Cannot execute query:$delete\n");


         $teacher="select * from teacher";
         $teach=pg_query($connect,$teacher) or die("Cannot execute query:$teacher\n");

         if(pg_num_rows($teach)>0)
         {
            $_SESSION['teach'] = array();

         if(pg_num_rows($teach))
         {
            
            while($staff= pg_fetch_row($teach))
            {		
               array_push($_SESSION['teach'],$staff[0]);		
            }
         }
      }

        else
         {
            $set = "update student set status='t' where reg_no='$_COOKIE[student]'";
            $set1 = pg_query($connect,$set) or die("Cannot execute query:$set\n");            

            header("Location:feedbackcomplete.php");
         }
         pg_close();
   }
?>