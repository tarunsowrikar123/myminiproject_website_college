<html>
<head>
<script>
function reload()
{
	location.reload();
}
</script>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<style>
.container
{
text-align:center;
margin-top:80px;
}
.bt
{
border:none;
outline:none;
background:#FFCC00;
padding:10px 20px;
font-size:20px;
font-family:sans-serif;
cursor:pointer;
margin:10px;
border-radius:5px;
}
.bt:hover
{
background:#FF9900;
color:#fff;
}
  body
        {
            margin:0;
            padding:0;
            background:url("bus.jpg");
            background-size:cover;
            font-family:sans-serif;
        }
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
table
{
margin-top:10px;
margin-left:35px;
padding:20px;
}
table tr th 
{
padding:5px;
margin:10px;
}
table tr td
{
padding:5px;
margin:10px;
}
</style>
<body>
<div class="navigation">
<nav>
<ul>
<li><a href="studentlogin.php">HOME</a></li>
</ul>
</nav>
</div>
<table>
<tr>
<th>Recieptnumber</th>
<th>Status</th>
</tr>
<?php 
$db=mysqli_connect("localhost","root","","test");
if($db)
{
    $stmt1="select * from status";
    $query1=mysqli_query($db,$stmt1);
    if(mysqli_num_rows($query1)>0)
    {
        while($row=mysqli_fetch_assoc($query1))
        {
            echo "<tr><td>".$row['Recieptnumber']."</td><td>".$row['Status']."</td>";
        }
    }
}
?>
</table>
<br>
<div class="container">
<button class="bt" onclick="reload()">RELOAD</button>
</div>
</body>
</html>