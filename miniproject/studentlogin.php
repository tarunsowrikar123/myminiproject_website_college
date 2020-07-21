<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<script>
	function newuser()
	{
		window.location.href="newuser.php";
	}
	</script>
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
.login-box
{
    width:320px;
    height:450px;
    background:rgba(0,0,0,0.7);
    color:#fff;
    top:58%;
    left:60%;
    position:absolute;
    transform:translate(-50%,-50%);
    box-sizing:border-box;
    padding:70px 10px;
}
.register-box
{
width:320px;
    height:150px;
    background:rgba(0,0,0,0.7);
    color:#fff;
    top:38%;
    right:60%;
    position:absolute;
    box-sizing:border-box;
    padding:40px 10px;
}
h2
{
margin:0;
padding:0 0 20px;
color:#FFCC33;
text-align:center;
}
.login-box p
{
padding:0;
margin:0;
font-weight:bold;
color:#FFF;
}
.login-box input
{
width:100%;
margin-bottom:20px;
}
.login-box input[type="text"],.login-box input[type="password"]
{
border:none;
border-bottom:1px solid #fff;
background:transparent;
outline:none;
height:40px;
color:#fff;
font-size:16px;
}
.login-box input[type="submit"]
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
.login-box input[type="submit"]:hover
{
background:#FF9900;
color:#fff;
}
.login-box a
{
color:white;
font-size:14px;
font-weight:bold;
}
#pid
{
font-size:18px;
color:white;
}
.button
{
border:none;
outline:none;
height:40px;
color:#fff;
font-size:16px;
background:#00CC00;
cursor:pointer;
border-radius:20px;
width:100%;
}
.button:hover
{
background:#006600;
color:#fff;
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
#h
{
color:red;
font-size:20px;
}
.container input
{
left:0;
top:95;
height:20px;
width:20px;
background-color:#eee;
padding:5px;
margin:5px;
}
</style>
<body>
<div class="navigation">
<nav>
<ul>
<li><a href=guidelines.php>Guidelines</a></li>
<li><a href=about.php>about</a></li>
<li><a href=businfo.php>Bus-information</a></li>
<li><a href=open.php>HOME</a></li>
<li><a href=bot.php>BOT</a></li>
</ul>
</nav>
</div>
<br>
<h2 id="h">*View buses information before logging in*</h2><br>
<br>
<div class="login-box">
<h2>Login Here</h2>
<form action="studentlogin2.php" method="post">
<p>Reciept number:</p>
<input type="text" name="recieptnum" placeholder="enter reciept number" required><br><br>
<p>Password:</p>
<input type="password" name="password" placeholder="enter password" required><br><br>
<input type="submit" name="submit" value="submit">
<div class="container">
<input type="checkbox" name="checkbox1" required>viewed buses information
<br>
<input type="checkbox" name="checkbox2" required>guidelines followed
</div>
</div>
<div class="register-box">
<p id="pid">If you are a new user </p><br><br><button class="button" onclick="newuser()">SIGN UP</button>
</div>
</form>
</body>
</html>