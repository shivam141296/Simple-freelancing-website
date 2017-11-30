<html>
<head>
	<script>
	history.pushState(null, document.title, location.href);
	window.addEventListener('popstate', function (event)
	{
	  history.pushState(null, document.title, location.href);
	});
	</script>
	<style>
.button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 16px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
}

.button1 {
    background-color: white;
    color: black;
    border: 2px solid #4CAF50;
}

.button1:hover {
    background-color: #4CAF50;
    color: white;
}

.button2 {
    background-color: white;
    color: black;
    border: 2px solid #008CBA;
}

.button2:hover {
    background-color: #008CBA;
    color: white;
}

.button3 {
    background-color: white;
    color: black;
    border: 2px solid #f44336;
}

.button3:hover {
    background-color: #f44336;
    color: white;
}

.button4 {
    background-color: white;
    color: black;
    border: 2px solid #e7e7e7;
}

.button4:hover {background-color: #e7e7e7;}

.button5 {
    background-color: white;
    color: black;
    border: 2px solid #555555;
}

.button5:hover {
    background-color: #555555;
    color: white;

#wrapper {
    width: 500px;
    margin: 0 auto;
}
</style>
</head>
<body background="back.jpg" style="background-size:cover" text="white" alink="black" vlink="black" link="black">

<?php

	echo "<br><br><br><br><br><br><br><br><center><font size=6 color='white' face='Calibri Light'>Logged out scuccessfully<br><br><button class='button button1'><font size=5 color='black' face='Calibri Light'><a href='http://localhost/pine/work/first/first.html' target='_top'>Go Home</a></font></button>";


    session_start();
	session_destroy();
	session_regenerate_id(true);

?>
</body>
</html>
