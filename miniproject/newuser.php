<!DOCTYPE html>
<html>
<head>
	<title>Registration Page</title>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<style>
*
{
margin:0;
padding:0;
}
body
{
    margin:0;
    padding:0;
    background:url("bus.jpg");
    background-size:cover;
    font-family:sans-serif;
}
nav
{
width:100%;
height:60px;
background-color:rgba(0,0,0,0.3);
line-height:60px;
}
nav ul li
{
list-style-type:none;
display:inline-block;
transition:0.5s all;
}
nav ul
{
float:right;
margin-right:30px;
}
nav ul li a
{
text-decoration:none;
padding:30px;
color:#FFF;
}
nav ul li:hover
{
background-color:#FF9900;
}
.registration-box
{
    width:320px;
    height:570px;
    background:rgba(0,0,0,0.7);
    color:#fff;
    top:55%;
    left:50%;
    position:absolute;
    transform:translate(-50%,-50%);
    box-sizing:border-box;
    padding:70px 10px;
}
h2
{
margin:0;
padding:0 0 20px;
color:#FFCC33;
text-align:center;
}
.registration-box p
{
padding:0;
margin:0;
font-weight:bold;
color:#FFF;
}
.registration-box input
{
width:100%;
margin-bottom:20px;
}
.registration-box input[type="text"],.registration-box input[type="password"]
{
border:none;
border-bottom:1px solid #fff;
background:transparent;
outline:none;
height:40px;
color:#fff;
font-size:16px;
}
.registration-box input[type="submit"]
{
border:none;
outline:none;
height:40px;
color:#fff;
font-size:16px;
background:#FFCC00;
cursor:pointer;
border-radius:20px;
}
.registration-box input[type="submit"]:hover
{
background:#FF9900;
color:#fff;
}
</style>
<body>
<div class="navigation">
<nav>
<ul>
<li><a href=guidelines.php>Guidelines</a></li>
<li><a href=about.php>about</a></li>
<li><a href=open.php>HOME</a></li>
</ul>
</nav>
</div>
<div class="registration-box">
<form action="studentdetails.php" method="post">
<h2>Register Here</h2>
<p>FirstName:</p>
<input type="text" name="fname" placeholder="enter first name" required><br><br>
<p>Last Name:</p>
<input type="text" name="lname" placeholder="enter last name" required><br><br>
<p>Reciept Number:</p>
<input type="text" name="recieptnum" placeholder="reciept number" required><br><br>
<p>Password:</p>
<input type="password" name="pass" placeholder="password" required><br><br>
<input type="submit" name="submit" value="submit">
</form>
</div>
</body>
</html>