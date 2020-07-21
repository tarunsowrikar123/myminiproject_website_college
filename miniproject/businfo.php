<html>
<head>
<title>Bus Information</title>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<style>
*
{
margin:0;
padding:0;
}
.navigation nav
{
width:100%;
height:60px;
background-color:rgba(0,0,0,0.3);
line-height:60px;
}
.navigation nav ul li
{
list-style-type:none;
display:inline-block;
transition:0.5s all;
}
.navigation nav ul
{
float:right;
margin-right:30px;
}
.navigation nav ul li a
{
font-size:20px;
text-decoration:none;
padding:30px;
color:#FFF;
}
.navigation nav ul li:hover
{
background-color:#FF9900;
}
 body
        {
            margin:0;
            padding:0;
            background:url("bus.jpg");
            background-size:cover;
            font-family:sans-serif;
        }
   .businfo-box
        {
            width:320px;
            height:400px;
            background:rgba(0,0,0,0.7);
            color:#fff;
            top:60%;
            right:30%;
            position:absolute;
            transform:translate(-50%,-50%);
            box-sizing:border-box;
            padding:70px 10px;
        }
        .businfo-box ul
        {
            margin:0;
            padding:0;
        }
        .businfo-box ul li
        {
            font-size:15px;
            paddding:5px;
            margin:5px;
        }
        a
        {
        text-align:center;
        color:#fff;
        font-size:20px;
        }
        nav
{
width:100%;
height:40px;
line-height:30px;
}
nav ul li
{
list-style-type:none;
transition:0.5s all;
}
nav ul
{
float:center;
}
nav ul li a
{
margin:20px;
text-decoration:none;
padding:10px;
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
<li><a href="guidelines.php">Guidelines</a></li>
<li><a href="about.php">about</a></li>
<li><a href="businfo.php">Businformation</a></li>
<li><a href="studentlogin.php">HOME</a></li>
</ul>
</nav>
</div>
<div class="businfo-box">
        <p>"You can view bus routes by visiting below links"</p><br><br>
        <nav>
        <ul>
        <li><a href=bus1.php>BUS_1</a></li>
        <li><a href=bus2.php>BUS_2</a></li>
        <li><a href=bus3.php>BUS_3</a></li>
        <li><a href=bus4.php>BUS_4</a></li>
        <li><a href=bus5.php>BUS_5</a></li>
        </ul>
		</nav>
 </div>
 </body>
 </html>