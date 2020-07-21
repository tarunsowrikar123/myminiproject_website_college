<!DOCTYPE html>
<html>
<head>
	<title>Bus System</title>
	<script>
	function student()
	{
		window.location.href="studentlogin.php";
	}
	function admin()
	{
		window.location.href="admin.php";
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
.open-box
{
    width:320px;
    height:320px;
    background:rgba(0,0,0,0.7);
    color:#fff;
    top:50%;
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
.open-box p
{
padding:0;
margin:0;
font-weight:bold;
color:#FFF;
}
.open-box input
{
width:100%;
margin-bottom:20px;
}
.open-box input[type="text"],.open-box input[type="password"]
{
border:none;
border-bottom:1px solid #fff;
background:transparent;
outline:none;
height:40px;
color:#fff;
font-size:16px;
}
.open-box input[type="submit"]
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
.open-box input[type="submit"]:hover
{
background:#FF9900;
color:#fff;
}
.open-box a
{
color:white;
font-size:14px;
font-weight:bold;
}
.button
{
border:none;
outline:none;
height:40px;
color:#fff;
font-size:16px;
background:#FFCC00;
cursor:pointer;
border-radius:20px;
width:100%;
}
.button:hover
{
background:#FF9900;
color:#fff;
}
.welcome
{
font-weight:bold;
font-family:sans-serif;
font-size:30px;
color:black;
margin-top:60px;
}
.welcome p
{
text-align:center;
}
</style>
<body>
<div class="welcome">
<p>WELCOME ALL</p>
</div>
<div class="open-box">
<p>Select any one of the following:</p><br>
<br><br><button class="button" onclick="student()">STUDENT</button><br><br>
<button class="button" onclick="admin()">ADMIN</button><br><br>
</div>
</body>
</html>