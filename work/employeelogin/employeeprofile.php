<html>
<body background="profileback.jpg" alink="white" vlink="white" link="white">
<style>
a {
     text-decoration: none ;
  }
a:hover
  {
    color:white;
    text-decoration:none;
    cursor:pointer;
   }
</style>
<?php
$user='root';
$pass='';
$db='project';
$db=new mysqli('localhost',$user,$pass,$db) or die ("unable to connect");
session_start();
$abc=$_SESSION['email_id'];
$sql = " SELECT name FROM employee_register WHERE email_id ='$abc' ";
$result = mysqli_query($db,$sql);
$row = mysqli_fetch_array($result);
$x=$row['name'];
?>
<img align="left" src="profileicon.png" height=60 width=60 style='position:absolute ; top:20px'><font color="white" size="6" face="Calibri Light">
<?php
echo "<div style='position:absolute ; left:80px; top:30px'>";
echo "Hello ".$x;
echo "</div>";
$db->close();
?>
<img src="Picture1.png" height="77" width="97" align="middle" style="position:absolute ; right:625px">
<?php
	if($_SESSION['email_id'])
	{
	    echo "<a href='logout.php' target='_top' style='position:absolute ; right:20px ; top:30px'>LOGOUT</a>";
	}
	else
	{
		header("location:login.php");
	}
?>
</font>
</body>
</html>
