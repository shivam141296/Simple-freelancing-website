<?php
//include 'employeeprofile.php';
$user='root';
$pass='';
$db='project';
$db=new mysqli('localhost',$user,$pass,$db) or die ("unable to connect");

session_start();
$a=$_POST["prochoice"];
$b=$_POST["bid_amt"];
$c=$_POST["time"];
$f=$_SESSION['email_id'];
$e=$_SESSION['name'];
$d= "SELECT employer_email FROM projects WHERE project_id='$a'";
$res = mysqli_query($db, $d);
$row = mysqli_fetch_assoc($res);
$z=$row['employer_email'];
$qwe = "INSERT INTO bid (proj_id, employee_email,employee_name,bid_amount,submit_time,employer_email) VALUES('$a','$f','$e','$b','$c','$z')";

if ($db->query($qwe)===TRUE)
{header('location: thanks2.html');}
else
{echo "Error connecting to DATABASE".$db->error;}
$db->close();
?>
