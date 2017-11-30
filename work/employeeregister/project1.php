<?php
$user='root';
$pass='';
$db='project';
$db=new mysqli('localhost',$user,$pass,$db) or die ("unable to connect");


$a=$_POST["email"];
$b=$_POST["name"];
$c=$_POST["country"];
$d=$_POST["password"];
$e=$_POST["dates"];
$f="SELECT * FROM employee_register WHERE email_id='$a'";
$result=mysqli_query($db,$f);
if (mysqli_num_rows($result)!=0)
{
  header("location:alreadyexist.html");
}
else
{
$sql = "INSERT INTO employee_register(email_id,name,country,password,dob)
VALUES('$a','$b','$c','$d','$e')";
if ($db->query($sql)===TRUE)
{header('location: thanks.html');}
else
{echo "Error connecting to DATABASE".$db->error;}
}
$db->close();
?>
