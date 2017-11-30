<?php
$user='root';
$pass='';
$db='project';
$db=new mysqli('localhost',$user,$pass,$db) or die ("unable to connect");
session_start();
$db->close();
?>
<html>
<body background="back.jpg" style="background-size:cover" link="white" alink="white" vlink="white">
    <center>
      <img src="Picture1.png" height=200 width=270><br><br>
  <iframe src="lookprojects.php" height="390" width="900"></iframe>
    <br>
    <font size=5 color="white" face="Calibri Light">
    <a href="takeprojectform.php">TAKE A PROJECT</a> &nbsp&nbsp&nbsp&nbsp&nbsp
    <a href="employeemain.html">QUIT SEARCH</a>
  </font>
</center>
</body>
</html>
