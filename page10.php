<?php

if(isset($_POST['email']))
{
session_start();

for($i=0;$i<count($_SESSION['student_email']);$i++)
{
   $notchechked[$i]=$_SESSION['student_email'][$i];
}

// for($i=0;$i<count($_SESSION['student_email']);$i++)
// {
//         echo $_SESSION['student_email'][$i];
// }

$mail=implode(',',$_SESSION['student_email']);
echo $mail;
}
?>

<form action="mailto:<?php echo $mail;?>" method="post" enctype="text/plain">
</form>

