<html>
<head>
<title>BOT</title>
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
.bot
{
margin-left:450px;
margin-top:80px;
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

</style>
<body>
<div class="navigation">
<nav>
<ul>
<li><a href=guidelines.php>Guidelines</a></li>
<li><a href=about.php>about</a></li>
<li><a href=businfo.php>Bus-information</a></li>
<li><a href=studentlogin.php>HOME</a></li>
</ul>
</nav>
</div>
<div class="bot">
<iframe width="400" height="500" allow="microphone;" src="https://console.dialogflow.com/api-client/demo/embedded/546d6808-a5b1-4360-9024-219b2460b3ba"></iframe>
</div>
</body>
</html>