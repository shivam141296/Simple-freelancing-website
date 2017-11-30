<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div id="wrapper">
<center><a href="http://localhost/pine/work/first/first.html"><img src="Picture1.png" border="0px" height="200px" width="270px"></a></center> 

<div class="stand">
  <div class="outer-screen">
    <div class="inner-screen">
      <div class="form">
          <strong> <center><font size=4 color="white" face="Calibri Light">Login And Start Working!</center></strong>
        <form method="post" action="validate.php">
        <input type="text" class="zocial-dribbble" placeholder="Enter your email" name="email"/>
        <input type="password" placeholder="Password" name="password"/>
         <input type="submit" value="Login" /><b><br><center><?php 
session_start();
if(empty($_SESSION['email_id'])) {
 echo 'LOGIN PENDING. ENTER CORRECT USERNAME AND PASSWORD' ;
}
?> </center></b><br>
		 </form>
        <a href="http://localhost/pine/work/employeeregister/register.htm"><font color="white" size=4> New? Register With Us!</a></font></font>
      </div> 
    </div> 
  </div> 
</div>
</div>
</body>
</html>  