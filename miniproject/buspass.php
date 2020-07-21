<?php 
$formfirstname=$_POST["fname"];
$formlastname=$_POST["lname"];
$formyear=$_POST["yr"];
$formstopname=$_POST["stp"];
$formbusnumber=$_POST["bus"];
$formrecieptnumber=$_POST["r"];
$db=mysqli_connect("localhost","root","","test");
?>
<html>
<head>
<title>BUS-PASS</title>
<script type="text/javascript">
function func()
{
	window.print();
	<?php 
	$q=mysqli_query($db,"update studentdetails set pass='DONE' where Recieptnumber='$formrecieptnumber'");
	?>	
}
</script>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<style>
.pass-box
{
    width:380px;
    height:240px;
    background:white;
    color:blue;
    margin-left:280px;
    transform:translate(50%,50%);
    box-sizing:border-box;
    border:2px solid #336699;
}
#head
{
font-family:arial;    
text-align:center;
background:#336699;
color:white;
font-size:25px;
margin:0;
padding:0;
}
#clg
{
color:#336699;
font-size:16px;
padding:2px;
margin:0;
text-align:center;
font-weight:bold;
}
#address
{
color:#336699;
font-size:16px;
padding:2px;
margin:0;
text-align:center;
}
hr
{
margin:0;
border:0.5px solid #336699;
}
.info input[type="text"]
{
border:none;
border-bottom:0.5px solid #336699;
background:transparent;
outline:none;
height:25px;
font-size:14px;
color:#336699;
}
#studentsign
{
float:left;
color:#336699;
font-size:14px;
font-weight:bold;
margin-top:38px;
margin-left:5px;
}
#principalsign
{
float:right;
color:#336699;
font-size:14px;
font-weight:bold;
margin-top:38px;
margin-right:5px;
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
margin-top:200px;
margin-left:580px;
border-radius:5px;
}
.bt:hover
{
background:#FF9900;
color:#fff;
}
</style>
<body>
<div class="pass-box">
<p id="head"><b>BUS PASS</b></p>
<p id="clg"><b>Geethanjali college of Engineering and Technology</b></p>
<p id="address">Cheeryal(V),Keesara(M),Ranga Reddy District.</p>
<hr>
<table>
<tr>
<td>
<div style="padding:3px;margin:3px;width:75px;height:85px;border:0.5px solid #336699;"><p style="text-align:center;">photo</p></div>
</td>
<td>
<div class="info">
Name  :<input type="text" value="<?php echo $formfirstname." ".$formlastname  ?>">
<br>Year  :<input type="text" value="<?php echo $formyear?>">
<br>Bus number  :<input type="text" value="<?php  echo $formbusnumber?>">
<br>Stop name  :<input type="text" value="<?php echo $formstopname?>">
</div>
</td>
</tr>
</table>
<p id="studentsign">Sign of student</p>
<p id="principalsign">Sign of Principal</p>
</div>
<form action="buspass.php" method="post">
<input type="hidden" value="<?php ?>" name="fname">
<input type="hidden" value="<?php ?>" name="lname">
<input type="hidden" value="<?php ?>" name="yr">
<input type="hidden" value="<?php ?>" name="stp">
<input type="hidden" value="<?php ?>" name="bus">
<input type="hidden" value="<?php ?>" name="r">
<button class="bt" onclick="func()">PRINT</button>
</form>
</body>
</html>