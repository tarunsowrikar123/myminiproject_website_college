<?php 
$formfirstname=$_POST["fname"];
$formlastname=$_POST["lname"];
$formrecieptnum=$_POST["recieptnum"];
$formpassowrd=$_POST["pass"];
$db=mysqli_connect("localhost","root","","test");
if($db){
if(isset($_POST["submit"]))
{
    $stmt1="select * from recieptnumbers where Recieptnumber='$formrecieptnum' AND Firstname='$formfirstname' AND Lastname='$formlastname'";
    $query1=mysqli_query($db,$stmt1);
   $stmt2="select * from studentdetails where Recieptnumber='$formrecieptnum' and Firstname='$formfirstname' and Lastname='$formlastname'";
   $query2=mysqli_query($db,$stmt2);
   $num_rows1=mysqli_num_rows($query2);
    $num_rows2=mysqli_num_rows($query1);
    if($num_rows2==1&&$num_rows1==0)
    {
        $stmt3="insert into studentdetails(Firstname,Lastname,Recieptnumber,Password) values('$formfirstname','$formlastname','$formrecieptnum','$formpassowrd')";
        $query3=mysqli_query($db,$stmt3);
        ?>
        <html>
        <head>
        <style>
        h2
{
font-size:35px;
margin:60px;
padding:0 0 20px;
color:#FFCC33;
text-align:center;
}
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
        </style>
        <script>
		function studentlogin()
		{
			window.location.href="studentlogin.php";
		}
        </script>
        <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
        </head>
        <body>
        <h2>Thankyou for registering..</h2><br><br>
 		<div class="container">       
       <button class="bt" onclick="studentlogin()">login_here</button>
        </div>
        </body></html><?php
    }
    else if($num_rows1!=0)
    {
        ?>
        <html>
        <head>
        <script>
        function studentlogin()
		{
			window.location("studentlogin.php");
		}
        </script>
        </head>
        <style>
                   h2
{
font-size:35px;
margin:60px;
padding:0 0 20px;
color:#FFCC33;
text-align:center;
}
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
        </style>
        <body>
        <h2>you are already registered</h2><br><br>
        <div class="container">
        <button class="bt" onclick="studentlogin()">login_here</button>
        </div>
        </body>
        </html>
        <?php 
    }
    else if($num_rows2!=1)
    {
        ?>
        <html>
        <head>
        <script>
        function newuser()
		{
			window.location("newuser.php");
		}
        </script>
        </head>
        <style>
                           h2
{
font-size:35px;
margin:60px;
padding:0 0 20px;
color:#FFCC33;
text-align:center;
}
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
        </style>
        <body>
        <h2>Please pay your bill or use correct Reciept Number</h2>
        <div class="container">
        <button class="bt" onclick="newuser()">Register_here</button>
		</div>
        </body>
        </html><?php 
    }
}
}
else
    echo "not connected";
?>