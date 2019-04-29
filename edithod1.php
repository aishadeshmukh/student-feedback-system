<html>
<head>
<style>

body
{
	background-image:url("b1.jpeg");
}

.block
    {
      position: relative;
      background-color: white;
      width: 30%;
      left: 30%;
      margin-top: 60px;
      border: 3px solid #73AD21;
      padding: 80px;
      height:auto;
    }

.center
{
    position:relative;
    margin-left:45%;
}

</style>
</head>
<body>
    <form action="edithod1.php" method="post">
    <div class="block">

<b>Update Hod Details</b><br><hr><br><br>

    <span style="float:right">
    Userid:<br>
    <input type="text" name="userid">
    </span>

    Name:<br>
    <input type="text" name="name"><br><br>

    <span style="float:right">
    Password:<br>
    <input type="password" name="password">
    </span>

    Email-id:<br>
    <input type="text" name="email"><br><br>

    <span style="float:right">
    Confirm Password:<br>
    <input type="password" name="confirm">
    </span>

    Contact Number:<br>
    <input type="text" name="contact"><br><br>
   
    <br><br>
    <div class="center">
    <input type="submit" name="submit" value="submit">
    </div>

    </div>

    <?php include 'addhod2.php';?>
</form>
</body>
</html>