<?php 
$formbusnumber=$_POST["busnumber"];
$formrecieptnumber=$_POST["recieptnumber"];
$formstopname=$_POST["stopname"];
$db=mysqli_connect("localhost","root","","test");
if(isset($_POST["submit"]))
{
    if($db)
    {
        $query8=mysqli_query($db,"select * from studentdetails where Recieptnumber='$formrecieptnumber' and alloted='YES'");
        $num=mysqli_num_rows($query8);
        if($num>0)
        {
            echo "<h2>student with this reciept number is already allocated</h2>";
            ?>
            <html>
            <head>
            <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <script>
				function home()
				{
					window.location("adminnextpage.php");
				}
            </script>
             <link rel="stylesheet" type="text/css" href="button.css"/>
            </head>
            <body>
            <div class="container">
                <button class="bt" onclick="home()">HOME</button>
            </div>
            </body>
            </html>
            <?php
        }
        else 
        {
        if($formbusnumber==1)
        {
            $stmt1="select * from bus1students";
            $query1=mysqli_query($db,$stmt1);
            if(mysqli_num_rows($query1)<2)
            {
                $result1=mysqli_query($db,"select * from studentdetails where Recieptnumber='$formrecieptnumber'");
                $row1=mysqli_fetch_assoc($result1);
                $firstname=$row1["Firstname"];
                $lastname=$row1["Lastname"];
                $result2=mysqli_query($db,"select * from recieptnumbers where Recieptnumber='$formrecieptnumber'");
                $row2=mysqli_fetch_assoc($result2);
                $yearofstudy=$row2["Year"];
                $stmt2="insert into bus1students(FirstName,LastName,Yearofstudy,RecieptNumber) values('$firstname','$lastname','$yearofstudy','$formrecieptnumber')";
                $query2=mysqli_query($db,$stmt2);
                if($query2)
                {
                    ?><html>
                <head>
                <script>
			function home()
			{
				window.location("adminnextpage.php");
			}
         </script>
         <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <link rel="stylesheet" type="text/css" href="button.css"/>
                </head>
                <style>
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
                </style>
             <body>
             <div class="regsiter">
             <h2>Success</h2>
              <div class="container">
                <button class="bt" onclick="home()">HOME</button>
                </div>
                </div>
              </body>
              </html>
              <?php   
                    $query3=mysqli_query($db,"update studentdetails set alloted='YES',stopname='$formstopname',busnumber=1 where Recieptnumber='$formrecieptnumber'");
                    
                    $query4=mysqli_query($db,"update status set Status='Bus 1 is alloted' where Recieptnumber='$formrecieptnumber'");
                    $name=mysqli_query($db,"select Firstname,Lastname,Year from recieptnumbers where Recieptnumber='$formrecieptnumber'");
                    while($rowname=mysqli_fetch_assoc($name))
                    {
                        $namef=$rowname["Firstname"];
                        $namel=$rowname["Lastname"];
                        $year=$rowname["Year"];
                    }
                    ?>
                    <html>
                    <head>
                    <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    </head>
                    <style>
                    input[type="submit"]
                    {
                    border:none;
                    outline:none;
                    height:40px;
                    color:#fff;
                    font-size:16px;
                    background:#00CC00;
                    cursor:pointer;
                    border-radius:20px;
                    margin-top:20px;
                    margin-left:20px;
                    }
                    input[type="submit"]:hover
                    {
                    background:#006600;
                    color:#fff;
                    }
                    </style>
                    <body>
                    <form action="buspass.php" method="post" target="_blank">
                    <input type="hidden" value="<?php echo $namef?>" name="fname">
                    <input type="hidden" value="<?php echo  $namel?>" name="lname">
                    <input type="hidden" value="<?php echo $year?>" name="yr">
                    <input type="hidden" value="<?php echo $formstopname?>" name="stp">
                    <input type="hidden" value="<?php echo $formrecieptnumber?>" name="r">
                    <input type="hidden" value=1 name="bus">
                    <input type="submit" value="PRINT">
                    </form>
                    </body>
                    </html>
              <?php  }
            }
            else
            {
                ?>
                <html>
                <head>
                <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <link rel="stylesheet" type="text/css" href="stylingbusenter.css"/>
                </head>
                <style>
                h2
{
margin:0;
padding:0 0 20px;
color:red;
margin-left:30px;
margin-top:140px;
font-size:25px;
}
                </style>
                <body>
                <h2>#seats are full in bus1 choose other bus if possible#</h2>
                <div class="registration-box">
				<form action="busenteradmin.php" method="post">
                <p>Reciept Number:</p>
				<input type="text" name="recieptnumber" value="<?php echo $formrecieptnumber ?>">
				<p>StopName:</p>
				<input type="text" name="stopname" value="<?php echo $formstopname ?>">
				<input type="submit" value="Go back" name="submit">
				</form>
				</div>
                </body>
                </html>
            <?php
            $stmt6="update studentdetails set stopname=NULL where Recieptnumber='$formrecieptnumber'";
            $query6=mysqli_query($db,$stmt6);
            $stmt7="update status set Status='Update nearby stopname' where Recieptnumber='$formrecieptnumber'";
            $query7=mysqli_query($db,$stmt7);
            }
        }
        if($formbusnumber==2)
        {
            $stmt1="select * from bus2students";
            $query1=mysqli_query($db,$stmt1);
            if(mysqli_num_rows($query1)<2)
            {
                $result1=mysqli_query($db,"select * from studentdetails where Recieptnumber='$formrecieptnumber'");
                $row1=mysqli_fetch_assoc($result1);
                $firstname=$row1["Firstname"];
                $lastname=$row1["Lastname"];
                $result2=mysqli_query($db,"select * from recieptnumbers where Recieptnumber='$formrecieptnumber'");
                $row2=mysqli_fetch_assoc($result2);
                $yearofstudy=$row2["Year"];
                $stmt2="insert into bus2students(FirstName,LastName,Yearofstudy,RecieptNumber) values('$firstname','$lastname','$yearofstudy','$formrecieptnumber')";
                $query2=mysqli_query($db,$stmt2);
                if($query2)
                {
                    ?><html>
                <head>
                <script>
			function home()
			{
				window.location("adminnextpage.php");
			}
         </script>
         <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <link rel="stylesheet" type="text/css" href="button.css"/>
                </head>
                <style>
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
                </style>
             <body>
             <div class="regsiter">
             <h2>Success</h2>
              <div class="container">
                <button class="bt" onclick="home()">HOME</button>
                </div>
                </div>
              </body>
              </html>
              <?php   
                    $query3=mysqli_query($db,"update studentdetails set alloted='YES',stopname='$formstopname',busnumber=2 where Recieptnumber='$formrecieptnumber'");
                    $query4=mysqli_query($db,"update status set Status='Bus 2 is alloted' where Recieptnumber='$formrecieptnumber'");
                    $name=mysqli_query($db,"select Firstname,Lastname,Year from recieptnumbers where Recieptnumber='$formrecieptnumber'");
                    while($rowname=mysqli_fetch_assoc($name))
                    {
                        $namef=$rowname["Firstname"];
                        $namel=$rowname["Lastname"];
                        $year=$rowname["Year"];
                    }
                    ?>
                    <html>
                    <head>
                    <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    </head>
                    <style>
                    input[type="submit"]
                    {
                    border:none;
                    outline:none;
                    height:40px;
                    color:#fff;
                    font-size:16px;
                    background:#00CC00;
                    cursor:pointer;
                    border-radius:20px;
                    margin-top:20px;
                    margin-left:20px;
                    }
                    input[type="submit"]:hover
                    {
                    background:#006600;
                    color:#fff;
                    }
                    </style>
                    <body>
                    <form action="buspass.php" method="post" target="_blank">
                    <input type="hidden" value="<?php echo $namef?>" name="fname">
                    <input type="hidden" value="<?php echo  $namel?>" name="lname">
                    <input type="hidden" value="<?php echo $year?>" name="yr">
                    <input type="hidden" value="<?php echo $formstopname?>" name="stp">
                    <input type="hidden" value="<?php echo $formrecieptnumber?>" name="r">
                    <input type="hidden" value=2 name="bus">
                    <input type="submit" value="PRINT">
                    </form>
                    </body>
                    </html>
               <?php  }
            }
            else
            {
                ?>
                <html>
                <head>
                <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <link rel="stylesheet" type="text/css" href="stylingbusenter.css"/>
                </head>
                <body>
                                <style>
                h2
{
margin:0;
padding:0 0 20px;
color:red;
margin-left:30px;
margin-top:140px;
font-size:25px;
}
                </style>
                <h2>#seats are full in bus2 choose other bus if possible#</h2>
                <div class="registration-box">
				<form action="busenteradmin.php" method="post">
                <p>Reciept Number:</p>
				<input type="text" name="recieptnumber" value="<?php echo $formrecieptnumber ?>">
				<p>StopName:</p>
				<input type="text" name="stopname" value="<?php echo $formstopname ?>">
				<input type="submit" value="Go back" name="submit">
				</form>
				</div>
                </body>
                </html>
            <?php
            $stmt6="update studentdetails set stopname=NULL where Recieptnumber='$formrecieptnumber'";
            $query6=mysqli_query($db,$stmt6);
            $stmt7="update status set Status='Update nearby stopname' where Recieptnumber='$formrecieptnumber'";
            $query7=mysqli_query($db,$stmt7);
            }
    }
    if($formbusnumber==3)
    {
        $stmt1="select * from bus3students";
        $query1=mysqli_query($db,$stmt1);
        if(mysqli_num_rows($query1)<2)
        {
            $result1=mysqli_query($db,"select * from studentdetails where Recieptnumber='$formrecieptnumber'");
            $row1=mysqli_fetch_assoc($result1);
            $firstname=$row1["Firstname"];
            $lastname=$row1["Lastname"];
            $result2=mysqli_query($db,"select * from recieptnumbers where Recieptnumber='$formrecieptnumber'");
            $row2=mysqli_fetch_assoc($result2);
            $yearofstudy=$row2["Year"];
            $stmt2="insert into bus3students(FirstName,LastName,Yearofstudy,RecieptNumber) values('$firstname','$lastname','$yearofstudy','$formrecieptnumber')";
            $query2=mysqli_query($db,$stmt2);
            if($query2)
            {
                ?><html>
                <head>
                <script>
			function home()
			{
				window.location("adminnextpage.php");
			}
         </script>
         <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <link rel="stylesheet" type="text/css" href="button.css"/>
                </head>
 			<style>
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
 			
 			</style>
             <body>
             <div class="regsiter">
             <h2>Success</h2>
              <div class="container">
                <button class="bt" onclick="home()">HOME</button>
                </div>
                </div>
              </body>
              </html>
              <?php   
                $query3=mysqli_query($db,"update studentdetails set alloted='YES',stopname='$formstopname',busnumber=3 where Recieptnumber='$formrecieptnumber'");
                $query4=mysqli_query($db,"update status set Status='Bus 3 is alloted' where Recieptnumber='$formrecieptnumber'");
                $name=mysqli_query($db,"select Firstname,Lastname,Year from recieptnumbers where Recieptnumber='$formrecieptnumber'");
                while($rowname=mysqli_fetch_assoc($name))
                {
                    $namef=$rowname["Firstname"];
                    $namel=$rowname["Lastname"];
                    $year=$rowname["Year"];
                }
                ?>
                    <html>
                    <head><meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"></head>
                    <style>
                    input[type="submit"]
                    {
                    border:none;
                    outline:none;
                    height:40px;
                    color:#fff;
                    font-size:16px;
                    background:#00CC00;
                    cursor:pointer;
                    border-radius:20px;
                    margin-top:20px;
                    margin-left:20px;
                    }
                    input[type="submit"]:hover
                    {
                    background:#006600;
                    color:#fff;
                    }
                    </style>
                    <body>
                    <form action="buspass.php" method="post" target="_blank">
                    <input type="hidden" value="<?php echo $namef?>" name="fname">
                    <input type="hidden" value="<?php echo  $namel?>" name="lname">
                    <input type="hidden" value="<?php echo $year?>" name="yr">
                    <input type="hidden" value="<?php echo $formstopname?>" name="stp">
                    <input type="hidden" value="<?php echo $formrecieptnumber?>" name="r">
                    <input type="hidden" value=3 name="bus">
                    <input type="submit" value="PRINT">
                    </form>
                    </body>
                    </html>
           <?php }
        }
        else
        {
            ?>
                <html>
                <head>
                <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <link rel="stylesheet" type="text/css" href="stylingbusenter.css"/>
                </head>
                <body>
                                <style>
                h2
{
margin:0;
padding:0 0 20px;
color:red;
margin-left:30px;
margin-top:140px;
font-size:25px;
}
                </style>
                <h2>#seats are full in bus3 choose other bus if possible#</h2>
                <div class="registration-box">
				<form action="busenteradmin.php" method="post">
                <p>Reciept Number:</p>
				<input type="text" name="recieptnumber" value="<?php echo $formrecieptnumber ?>">
				<p>StopName:</p>
				<input type="text" name="stopname" value="<?php echo $formstopname ?>">
				<input type="submit" value="Go back" name="submit">
				</form>
				</div>
                </body>
                </html>
            <?php
            $stmt6="update studentdetails set stopname=NULL where Recieptnumber='$formrecieptnumber'";
            $query6=mysqli_query($db,$stmt6);
            $stmt7="update status set Status='Update nearby stopname' where Recieptnumber='$formrecieptnumber'";
            $query7=mysqli_query($db,$stmt7);
        }
    }
    if($formbusnumber==4)
    {
        $stmt1="select * from bus4students";
        $query1=mysqli_query($db,$stmt1);
        if(mysqli_num_rows($query1)<2)
        {
            $result1=mysqli_query($db,"select * from studentdetails where Recieptnumber='$formrecieptnumber'");
            $row1=mysqli_fetch_assoc($result1);
            $firstname=$row1["Firstname"];
            $lastname=$row1["Lastname"];
            $result2=mysqli_query($db,"select * from recieptnumbers where Recieptnumber='$formrecieptnumber'");
            $row2=mysqli_fetch_assoc($result2);
            $yearofstudy=$row2["Year"];
            $stmt2="insert into bus4students(FirstName,LastName,Yearofstudy,RecieptNumber) values('$firstname','$lastname','$yearofstudy','$formrecieptnumber')";
            $query2=mysqli_query($db,$stmt2);
            if($query2)
            {
                ?><html>
                <head>
                <script>
			function home()
			{
				window.location("adminnextpage.php");
			}
         </script>
         <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <link rel="stylesheet" type="text/css" href="button.css"/>
                </head>
                <style>
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
                </style>
             <body>
             <div class="regsiter">
             <h2>Success</h2>
              <div class="container">
                <button class="bt" onclick="home()">HOME</button>
                </div>
                </div>
              </body>
              </html>
              <?php   $query3=mysqli_query($db,"update studentdetails set alloted='YES',stopname='$formstopname',busnumber=4 where Recieptnumber='$formrecieptnumber'");
                $query4=mysqli_query($db,"update status set Status='Bus 4 is alloted' where Recieptnumber='$formrecieptnumber'");
                $name=mysqli_query($db,"select Firstname,Lastname,Year from recieptnumbers where Recieptnumber='$formrecieptnumber'");
                while($rowname=mysqli_fetch_assoc($name))
                {
                    $namef=$rowname["Firstname"];
                    $namel=$rowname["Lastname"];
                    $year=$rowname["Year"];
                }
                ?>
                    <html>
                    <head><meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"></head>
                    <style>
                    input[type="submit"]
                    {
                    border:none;
                    outline:none;
                    height:40px;
                    color:#fff;
                    font-size:16px;
                    background:#00CC00;
                    cursor:pointer;
                    border-radius:20px;
                    margin-top:20px;
                    margin-left:20px;
                    }
                    input[type="submit"]:hover
                    {
                    background:#006600;
                    color:#fff;
                    }
                    </style>
                    <body>
                    <form action="buspass.php" method="post" target="_blank">
                    <input type="hidden" value="<?php echo $namef?>" name="fname">
                    <input type="hidden" value="<?php echo  $namel?>" name="lname">
                    <input type="hidden" value="<?php echo $year?>" name="yr">
                    <input type="hidden" value="<?php echo $formstopname?>" name="stp">
                    <input type="hidden" value="<?php echo $formrecieptnumber?>" name="r">
                    <input type="hidden" value=4 name="bus">
                    <input type="submit" value="PRINT">
                    </form>
                    </body>
                    </html>
            
            <?php }
        }
        else
        {
            ?>
                <html>
                <head>
                <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <link rel="stylesheet" type="text/css" href="stylingbusenter.css"/>
                </head>
                <body>
                                <style>
                h2
{
margin:0;
padding:0 0 20px;
color:red;
margin-left:30px;
margin-top:140px;
font-size:25px;
}
                </style>
                <h2>#seats are full in bus4 choose other bus if possible#</h2>
                <div class="registration-box">
				<form action="busenteradmin.php" method="post">
                <p>Reciept Number:</p>
				<input type="text" name="recieptnumber" value="<?php echo $formrecieptnumber ?>">
				<p>StopName:</p>
				<input type="text" name="stopname" value="<?php echo $formstopname ?>">
				<input type="submit" value="Go back" name="submit">
				</form>
				</div>
                </body>
                </html>
            <?php 
            $stmt6="update studentdetails set stopname=NULL where Recieptnumber='$formrecieptnumber'";
            $query6=mysqli_query($db,$stmt6);
            $stmt7="update status set Status='Update nearby stopname' where Recieptnumber='$formrecieptnumber'";
            $query7=mysqli_query($db,$stmt7);
        }
    }
    if($formbusnumber==5)
    {
        $stmt1="select * from bus5students";
        $query1=mysqli_query($db,$stmt1);
        if(mysqli_num_rows($query1)<2)
        {
            $result1=mysqli_query($db,"select * from studentdetails where Recieptnumber='$formrecieptnumber'");
            $row1=mysqli_fetch_assoc($result1);
            $firstname=$row1["Firstname"];
            $lastname=$row1["Lastname"];
            $result2=mysqli_query($db,"select * from recieptnumbers where Recieptnumber='$formrecieptnumber'");
            $row2=mysqli_fetch_assoc($result2);
            $yearofstudy=$row2["Year"];
            $stmt2="insert into bus5students(FirstName,LastName,Yearofstudy,RecieptNumber) values('$firstname','$lastname','$yearofstudy','$formrecieptnumber')";
            $query2=mysqli_query($db,$stmt2);
            if($query2)
            {
                ?><html>
                <head>
                <script>
			function home()
			{
				window.location("adminnextpage.php");
			}
         </script>
         <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <link rel="stylesheet" type="text/css" href="button.css"/>
                </head>
                <style>
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
                </style>
             <body>
             <div class="regsiter">
             <h2>Success</h2>
              <div class="container">
                <button class="bt" onclick="home()">HOME</button>
                </div>
                </div>
              </body>
              </html>
              <?php   
                $query3=mysqli_query($db,"update studentdetails set alloted='YES',stopname='$formstopname',busnumber=5 where Recieptnumber='$formrecieptnumber'");
                $query4=mysqli_query($db,"update status set Status='Bus 5 is alloted' where Recieptnumber='$formrecieptnumber'");
                $name=mysqli_query($db,"select Firstname,Lastname,Year from recieptnumbers where Recieptnumber='$formrecieptnumber'");
                while($rowname=mysqli_fetch_assoc($name))
                {
                    $namef=$rowname["Firstname"];
                    $namel=$rowname["Lastname"];
                    $year=$rowname["Year"];
                }
                ?>
                    <html>
                    <head><meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"></head>
                    <style>
                    input[type="submit"]
                    {
                    border:none;
                    outline:none;
                    height:40px;
                    color:#fff;
                    font-size:16px;
                    background:#00CC00;
                    cursor:pointer;
                    border-radius:20px;
                    margin-top:20px;
                    margin-left:20px;
                    }
                    input[type="submit"]:hover
                    {
                    background:#006600;
                    color:#fff;
                    }
                    </style>
                    <body>
                    <form action="buspass.php" method="post" target="_blank">
                    <input type="hidden" value="<?php echo $namef?>" name="fname">
                    <input type="hidden" value="<?php echo  $namel?>" name="lname">
                    <input type="hidden" value="<?php echo $year?>" name="yr">
                    <input type="hidden" value="<?php echo $formstopname?>" name="stp">
                    <input type="hidden" value="<?php echo $formrecieptnumber?>" name="r">
                    <input type="hidden" value=5 name="bus">
                    <input type="submit" value="PRINT">
                    </form>
                    </body>
                    </html>
                
                
                
                <?php }
        }
        else
        {
            ?>
                <html>
                <head>
                <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <link rel="stylesheet" type="text/css" href="stylingbusenter.css"/>
                </head>
                <body>
                                <style>
                h2
{
margin:0;
padding:0 0 20px;
color:red;
margin-left:30px;
margin-top:140px;
font-size:25px;
}
                </style>
                <h2>#seats are full in bus5 choose other bus if possible#</h2>
                <div class="registration-box">
				<form action="busenteradmin.php" method="post">
                <p>Reciept Number:</p>
				<input type="text" name="recieptnumber" value="<?php echo $formrecieptnumber ?>">
				<p>StopName:</p>
				<input type="text" name="stopname" value="<?php echo $formstopname ?>">
				<input type="submit" value="Go back" name="submit">
				</form>
				</div>
                </body>
                </html>
            <?php 
            $stmt6="update studentdetails set stopname=NULL where Recieptnumber='$formrecieptnumber'";
            $query6=mysqli_query($db,$stmt6);
            $stmt7="update status set Status='Update nearby stopname' where Recieptnumber='$formrecieptnumber'";
            $query7=mysqli_query($db,$stmt7);
        }
    }
        }
   }
}
?>