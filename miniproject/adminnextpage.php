<?php 
$db=mysqli_connect("localhost","root","","test");
if($db)
{
 ?>
 <html>
 <head><script>
function viewdatabase()
{
	window.open("viewdatabase.php","_blank");
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
        .busenter-box
        {
            width:580px;
            height:430px;
            background:rgba(0,0,0,0.7);
            color:#fff;
            top:50%;
            left:50%;
            position:absolute;
            transform:translate(-50%,-50%);
            box-sizing:border-box;
            padding:70px 10px;
        }
        .busenter-box p
        {
            padding:0;
            margin:0;
            font-weight:bold;
            color:#FFF;
        }
        .busenter-box input
        {
            width:100%;
            margin-bottom:20px;
        }
        .busenter-box input[type="text"]
        {
            border:none;
            border-bottom:1px solid #fff;
            background:transparent;
            outline:none;
            height:40px;
            color:#fff;
            font-size:16px;
        }
        .busenter-box input[type="submit"]
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
        .busenter-box input[type="submit"]:hover
        {
            background:#FF9900;
            color:#fff;
        }
        .container
{
margin-top:0px;
}
.bt
{
border:none;
outline:none;
background:#00CC00;
padding:10px 20px;
font-size:20px;
font-family:sans-serif;
cursor:pointer;
margin:15px;
border-radius:5px;
}
.bt:hover
{
background:#006600;
color:#fff;
}
 </style>
 <body>
 <div class="navigation">
<nav>
<ul>
<li><a href=open.php>HOME</a></li>
<li><a href=pass.php>PRINT-PASS</a></li>
</ul>
</nav>
</div>
 <div class="busenter-box">
<div class="container">
<button class="bt" onclick="viewdatabase()">View Students Who Need Bus</button>
</div>
<br><br>
        <form action="busenteradmin.php" method="post">
        <p>Enter the reciept number:</p>
        <input type="text" name="recieptnumber" required><br>
        <br>
        <p>Enter Stop Name entered by student:</p>
        <input type="text" name="stopname" required><br>
        <br>
         <input type="submit" name="sub" value="submit">
        </form>
</div>
 </body>
 </html>   
<?php }
?>