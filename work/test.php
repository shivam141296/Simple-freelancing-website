<?php
//include 'employeeprofile.php';
$user='root';
$pass='';
$db='project';
$db=new mysqli('localhost',$user,$pass,$db) or die ("unable to connect");

$d= "SELECT employer_email FROM projects WHERE project_id=7";
$result = mysqli_query($db, $d);
$row = mysqli_fetch_assoc($result);
echo $row['employer_email'];
$db->close();
?>
