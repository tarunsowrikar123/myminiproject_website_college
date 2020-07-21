<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
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
    height:370px;
    background:rgba(0,0,0,0.7);
    color:#fff;
    top:58%;
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
#h
{
margin-top:120px;
color:red;
font-size:20px;
}
</style>
<body>
<h2 id="h">*Login with credentials gievn to you*</h2><br>
<br>
<div class="login-box">
<h2>Login Here</h2>
<form action="admin2.php" method="post">
<p>User Name:</p>
<input type="text" name="username" placeholder="enter user number" required><br><br>
<p>Password:</p>
<input type="password" name="password" placeholder="enter password" required><br><br>
<input type="submit" name="submit" value="submit">
</form>
</div>
</body>
</html>