<?php 
$formstopname=$_POST["stopname"];
$formrecieptnum=$_POST["recieptnum"];
$db=mysqli_connect("localhost","root","","test");
if($db)
{
    $stmt1="select * from studentdetails where Recieptnumber='$formrecieptnum' and stopname IS NULL";
    $query=mysqli_query($db,$stmt1);
    $num=mysqli_num_rows($query);
    if($num!=0)
    {
        $query2=mysqli_query($db,"UPDATE studentdetails set stopname='$formstopname' where Recieptnumber='$formrecieptnum'");
        $stmt2="select * from status where Recieptnumber='$formrecieptnum'";
        $query3=mysqli_query($db,$stmt2);
        $num_rows=mysqli_num_rows($query3);
        if($num_rows==0)
            $query4=mysqli_query($db,"Insert into status(Recieptnumber,Status) values('$formrecieptnum','in progress')");
        if($query2)
        {
           ?>
 			<html>
        <head>
        <script>
		function home()
		{
			window.location("open.php");
		}
        </script>
        <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
        </head>         
        <style>
        body
{
    margin:0;
    padding:0;
    background:url("busshades.jpg");
    background-size:fit;
    font-family:sans-serif;
} 
.register
{
transform:translate(40%,40%);
}
.register p
{
font-size:25px;
font-weight:bold;
font-family:sans-serif;
}
.container
{
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
        </style>
        <body>
        <div class="register">
        <p>Sucessfully Updated</p>
        <div class="container">
        <button class="bt" onclick="home()">HOME</button>
        </div>
        </body>
        </html>             
 <?php 
        }
        else
        {
            echo "couldnot update database";
        }
    }
    else
    {
        ?>
         <html>
         <head>
         <script>
			function home()
			{
				window.location("open.php");
			}
         </script>
         </head>
        <style>
        body
{
    margin:0;
    padding:0;
    background:url("busshades.jpg");
    background-size:fit;
    font-family:sans-serif;
} 
.register
{
transform:translate(40%,40%);
}
.register p
{
font-size:25px;
font-weight:bold;
font-family:sans-serif;
}
.container
{
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
*
{
margin:0;
padding:0;
}
        </style>
        <body>
        <div class="navigation">
<nav>
<ul>
<li><a href=status.php>Status</a></li>
</ul>
</nav>
</div>
<br>
		<div class="register">
        <p>could not find reciept number entered by you or already given</p>
        <div class="container">
        <button class="bt" onclick="home()">HOME</button>
        </div>
   </div>
   </body></html>
   <?php }    
}
else
{
    echo "not connected to database";
}
?>