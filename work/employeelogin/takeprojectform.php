<?php
$user='root';
$pass='';
$db='project';
$db=new mysqli('localhost',$user,$pass,$db) or die ("unable to connect");
session_start();
$db->close();
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div id="wrapper">
<center><a href="http://localhost/pine/work/first/first.html"><img src="Picture1.png" border="0px" height="200px" width="270px"></a><br></center>

<div class="stand">
  <div class="outer-screen">
    <div class="inner-screen">
      <div class="form">
          <strong> <center><font size=4 color="white" face="Calibri Light">Details Of your Project</center></strong>
		  <form method="post" action="takeproject.php">
        <input type="text" class="zocial-dribbble" placeholder="Project id of Your Choice" name="prochoice" required>
        <input type="text" placeholder="Bid Amount" name="bid_amt" required>
        <input type="text" placeholder="Time of Submission" name="time" required>
        <input type="submit" value="Take Project" />
                   </form>
       </font>
      </div>
    </div>
  </div>
</div>
</div>
</body>
</html>
