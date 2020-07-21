<html>
<head>
<title>BUS 5</title>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<style>
*
{
margin:0;
padding:0;
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
font-size:20px;
text-decoration:none;
padding:30px;
color:#FFF;
}
nav ul li:hover
{
background-color:#FF9900;
}
body
{
    margin:0;
    padding:0;
    background:url("busshades.jpg");
    background-size:cover;
    font-family:sans-serif;
}
table
{
position:absolute;
transform:translate(-50%,-50%);
top:70%;
left:50%;
width:400px;
height:320px;
border:1px solid black;
}
td,th
{
font-size:25px;
}
.info-box
{
text-align:center;
}
.info-box p
{
font-size:20px;
font-family:sans-serif;
fonr-weight:bold;
}
h2
{
margin:10px;
padding:10px;
text-align:center;
font-family:sans-serif;
font-size:30px;
font-weight:bold;
}
</style>
<body>
<div class="navigation">
<nav>
<ul>
<li><a href="studentlogin.php">HOME</a></li>
<li><a href=businfo.php>Bus-information</a></li>
</ul>
</nav>
</div>
<div class="info-box">
<h2>BUS 5</h2><br>
<p>Driver Name:ABC</p><br>
<p>Phone Number:XXXXXXXXXX</p><br>
</div>
<table>
<tr>
<th>Place</th>
<th>Time</th>
</tr>
<tr>
<td>Uppal ringroad</td>
<td>7.35AM</td>
</tr>
<tr>
<td>Asian cineplex</td>
<td>7.45AM</td>
</tr>
<tr>
<td>Boduppal</td>
<td>8.00AM</td>
</tr>
<tr>
<td>Medipally</td>
<td>8.15AM</td>
</tr>
<tr>
<td>Keesara village</td>
<td>8.25AM</td>
</tr>
<tr>
<td>GCET</td>
<td>8.45AM</td>
</tr>
</table>
</body>
</html>