<html>
<body bgcolor="white" alink="white" vlink="white" link="white">
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
   th, td {
    padding: 15px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}
tr:hover {background-color: #f5f5f5}
th {
    background-color: #4CAF50;
    color: white;
}

</style>
<div style="overflow-x:auto;">
<?php
$user='root';
$pass='';
$db='project';
$db=new mysqli('localhost',$user,$pass,$db) or die ("unable to connect");
session_start();
$abcd=$_SESSION['email_id'];
$query = "SELECT bid.bid_id, bid.proj_id, projects.project_name,bid.bid_amount,bid.submit_time
FROM bid
INNER JOIN projects
ON bid.proj_id=projects.project_id where bid.employee_email='$abcd'";
$result = mysqli_query($db,$query);

echo "<font face='Calibri Light' size=4><table border=0 style='width:100%'><tr><th>Bid ID</th><th>Project ID</th><th>Project Name</th><th>Bid Amount</th><th>Time of Submission</th></tr>"; // start a table tag in the HTML

while($row = mysqli_fetch_array($result))
{
echo "<tr><td>" . $row['bid_id'] . "</td><td>" . $row['proj_id'] . "</td><td>" . $row['project_name'] . "</td><td>" . $row['bid_amount'] . "</td><td>" . $row['submit_time'] . "</td></tr>";
}

echo "</table>";

$db->close();
?>
</div>
</body>
</html>
