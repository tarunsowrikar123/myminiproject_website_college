<html>
<head>
<link rel="stylesheet" href="navigation.css" type="text/css"/>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<style>
body
{
    margin:0;
    padding:0;
    background:url("bus.jpg");
    background-size:cover;
    font-family:sans-serif;
}
.registration-box
{
    width:320px;
    height:340px;
    background:rgba(0,0,0,0.7);
    color:#fff;
    top:50%;
    left:70%;
    position:absolute;
    transform:translate(-50%,-50%);
    box-sizing:border-box;
    padding:70px 10px;
}
.registration-box p
{
padding:0;
margin:0;
font-weight:bold;
color:#FFF;
}
.registration-box input
{
width:100%;
margin-bottom:20px;
}
.registration-box input[type="text"]
{
border:none;
border-bottom:1px solid #fff;
background:transparent;
outline:none;
height:40px;
color:#fff;
font-size:16px;
}
.registration-box input[type="submit"]
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
.registration-box input[type="submit"]:hover
{
background:#FF9900;
color:#fff;
}
h2
{
margin:0;
padding:0 0 20px;
color:black;
margin-left:30px;
margin-top:140px;
font-size:25px;
}
</style>
<body>
<div class="navigation">
<nav>
<ul>
<li><a href=adminnextpage.php>HOME</a></li>
</ul>
</nav>
</div>
<?php 
$formrecieptnumber=$_POST["recieptnumber"];
$formstopname=$_POST["stopname"];
$db=mysqli_connect("localhost","root","","test");
if($db)
{
 $stmt1="select * from bus1route where stopname='$formstopname'";
 $query1=mysqli_query($db,$stmt1);
 $num_rows1=mysqli_num_rows($query1);
 $query8=mysqli_query($db,"select * from bus1students");
 $num1=mysqli_num_rows($query8);
 $query23=mysqli_query($db,"select * from studentdetails where Recieptnumber='$formrecieptnumber' and alloted='YES'");
 $num6=mysqli_num_rows($query23);
 if($num6>0)
     echo "<h2>Student is already allocated</h2>";
 else 
 {
 if($num_rows1!=0)
 {
     if($num1<2)
     {
      echo "<h2>You can choose bus number 1</h2><br>";
     }
     else 
     {
         echo "<h2>bus 1 goes in the way but it is full</h2><br>";
         $query18=mysqli_query($db,"update studentdetails set stopname=NULL where Recieptnumber='$formrecieptnumber'");
         $query13=mysqli_query($db,"update status set Status='update your stop name' where Recieptnumber='$formrecieptnumber'");       
     }
 }
 $stmt2="select * from bus2route where stopname='$formstopname'";
 $query2=mysqli_query($db,$stmt2);
 $query9=mysqli_query($db,"select * from bus2students");
 $num2=mysqli_num_rows($query9);
 $num_rows2=mysqli_num_rows($query2);
 if($num_rows2!=0)
 {
     if($num2<2)
     {
         echo "<h2>You can choose bus number 2</h2><br>";
     }
     else
     {
         echo "<h2>bus 2 goes in the way but it is full</h2><br>";
         $query19=mysqli_query($db,"update studentdetails set stopname=NULL where Recieptnumber='$formrecieptnumber'");
         $query14=mysqli_query($db,"update status set Status='update your stop name' where Recieptnumber='$formrecieptnumber'");
     }
 }
 $stmt3="select * from bus3route where stopname='$formstopname'";
 $query3=mysqli_query($db,$stmt3);
 $num_rows3=mysqli_num_rows($query3);
 $query10=mysqli_query($db,"select * from bus3students");
 $num3=mysqli_num_rows($query10);
 if($num_rows3!=0)
 {
     if($num3<2)
     {
         echo "<h2>You can choose bus number 3</h2><br>";
     }
     else
     {
         echo "<h2>bus 3 goes in the way but it is full</h2><br>";
         $query20=mysqli_query($db,"update studentdetails set stopname=NULL where Recieptnumber='$formrecieptnumber'");
         $query15=mysqli_query($db,"update status set Status='update your stop name' where Recieptnumber='$formrecieptnumber'");
     }
 }
 $stmt4="select * from bus4route where stopname='$formstopname'";
 $query4=mysqli_query($db,$stmt4);
 $num_rows4=mysqli_num_rows($query4);
 $query11=mysqli_query($db,"select * from bus4students");
 $num4=mysqli_num_rows($query11);
 if($num_rows4!=0)
 {
     if($num4<2)
     {
         echo "<h2>You can choose bus number 4</h2><br>";
     }
     else
     {
         echo "<h2>bus 4 goes in the way but it is full</h2><br>";
         $query21=mysqli_query($db,"update studentdetails set stopname=NULL where Recieptnumber='$formrecieptnumber'");
         $query16=mysqli_query($db,"update status set Status='update your stop name' where Recieptnumber='$formrecieptnumber'");
     }
 }
 $stmt5="select * from bus5route where stopname='$formstopname'";
 $query5=mysqli_query($db,$stmt5);
 $num_rows5=mysqli_num_rows($query5);
 $query12=mysqli_query($db,"select * from bus5students");
 $num5=mysqli_num_rows($query12);
 if($num_rows5!=0)
 {
     if($num5<2)
     {
         echo "<h2>You can choose bus number 5</h2><br>";
     }
     else
     {
         echo "<h2>bus 5 goes in the way but it is full</h2><br>";
         $query22=mysqli_query($db,"update studentdetails set stopname=NULL where Recieptnumber='$formrecieptnumber'");
         $query17=mysqli_query($db,"update status set Status='update your stop name' where Recieptnumber='$formrecieptnumber'");
     }
 }
 if($num_rows1==0&&$num_rows2==0&&$num_rows3==0&&$num_rows4==0&&$num_rows5==0)
 {   
     echo "<h2>There is no bus related to that stop</h2>";
     $stmt6="update studentdetails set stopname=NULL where Recieptnumber='$formrecieptnumber'";
     $query6=mysqli_query($db,$stmt6);
     $stmt7="update status set Status='update your stop name' where Recieptnumber='$formrecieptnumber'";
     $query7=mysqli_query($db,$stmt7);
 }
 }
}
?>
<div class="registration-box">
<form action="busenterseat.php" method="post">
<p>Enter bus number:</p>
<input type="text" name="busnumber" placeholder="enter busnumber">
<p>Reciept Number:</p>
<input type="text" name="recieptnumber" value="<?php echo $formrecieptnumber ?>">
<input type="text" name="stopname" value="<?php echo $formstopname ?>">
<input type="submit" value="submit" name="submit">
</form>
</div>
</body>
</html>