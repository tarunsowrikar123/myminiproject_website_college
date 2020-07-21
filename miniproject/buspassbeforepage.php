<?php 
$formrecieptnumber=$_POST["recieptnumber"];
$db=mysqli_connect("localhost","root","","test");
$query=mysqli_query($db,"select Firstname,Lastname,Year from recieptnumbers where Recieptnumber='$formrecieptnumber'");
while($row1=mysqli_fetch_assoc($query))
{
    $firstname=$row1["Firstname"];
    $lastname=$row1["Lastname"];
    $year=$row1["Year"];
}
$query2=mysqli_query($db,"select stopname,busnumber from studentdetails where Recieptnumber='$formrecieptnumber'");
while($row2=mysqli_fetch_assoc($query2))
{
    $stopname=$row2["stopname"];
    $busnumber=$row2["busnumber"];
}
?>
<html>
<head><meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"></head>
<style>
* {
	margin: 0;
	padding: 0;
}

body {
	margin: 0;
	padding: 0;
	background: url("bus.jpg");
	background-size: cover;
	font-family: sans-serif;
}

nav {
	width: 100%;
	height: 60px;
	background-color: rgba(0, 0, 0, 0.3);
	line-height: 60px;
}

nav ul li {
	list-style-type: none;
	display: inline-block;
	transition: 0.5s all;
}

nav ul {
	float: right;
	margin-right: 30px;
	margin-top:0;
}

nav ul li a {
	text-decoration: none;
	padding: 30px;
	color: #FFF;
}
nav ul li:hover {
	background-color: #FF9900;
}
.confirm-box input[type="submit"] {
	border: none;
	outline: none;
	height: 40px;
	color: #fff;
	font-size: 16px;
	background: #00CC00;
	cursor: pointer;
	border-radius: 20px;
}

.confirm-box input[type="submit"]:hover {
	background: #006600;
	color: #fff;
}
.confirm-box
{
    width:320px;
    height:610px;
    background:rgba(0,0,0,0.7);
    color:#fff;
    top:58%;
    left:50%;
    position:absolute;
    transform:translate(-50%,-50%);
    box-sizing:border-box;
    padding:20px 10px;
}
h2
{
margin:0;
padding:0 0 20px;
color:#FFCC33;
text-align:center;
}
.confirm-box p
{
padding:0;
margin:0;
font-weight:bold;
color:#FFF;
}
.confirm-box input
{
width:100%;
margin-bottom:20px;
}
.confirm-box input[type="text"],.login-box input[type="password"]
{
border:none;
border-bottom:1px solid #fff;
background:transparent;
outline:none;
height:40px;
color:#fff;
font-size:16px;
}
</style>
<body>
<div class="navigation">
<nav>
<ul>
<li><a href=adminnextpage.php>HOME</a></li>
</ul>
</nav>
</div>
<div class="confirm-box">
<h2>Confirm Details:</h2>
<form action="buspass.php" method="post" target="_blank">
<p>Firstname:</p>
<input type="text" value="<?php echo $firstname?>" name="fname">
<p>Lastname:</p>
<input type="text" value="<?php echo $lastname?>" name="lname"><br>
<p>Year:</p>
<input type="text" value="<?php echo $year?>" name="yr"><br>
<p>Stopname:</p>
<input type="text" value="<?php echo $stopname?>" name="stp"><br>
<p>Bus Number:</p>
<input type="text" value="<?php echo $busnumber?>" name="bus"><br>
<p>Reciept Number:</p>
<input type="text" value="<?php echo $formrecieptnumber?>" name="r"><br><br>
<input type="submit" value="PRINT">
</form>
</div>
</body>
</html>