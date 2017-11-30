<html>
<body>
<?php
$user='root';
$pass='';
$db='project';
$db=new mysqli('localhost',$user,$pass,$db) or die ("unable to connect");

if(isset($_POST["email"],$_POST["password"]))
{
$a=$_POST["email"];
$b=$_POST["password"];

$query="SELECT * FROM employee_register WHERE email_id = '$a' AND  password = '$b'";
$result = mysqli_query($db, $query) or die(mysqli_error($db));
$count = mysqli_num_rows($result);

if ($count == 1){
session_start();
$row=mysqli_fetch_assoc($result);
$_SESSION['email_id'] = $a;
$_SESSION['name'] = $row['name'];
header("location:employeemain.html");
exit();
}
else{
header("location:login.php");
}
}
$db->close();
?>
</body>
</html>
