<?php 
$formrecieptnum=$_POST["recieptnum"];
$password=$_POST["password"];
$db=mysqli_connect("localhost","root","","test");
if($db)
{
    $stmt1="select * from studentdetails where Recieptnumber='$formrecieptnum' and Password='$password'";
    $query=mysqli_query($db,$stmt1);
    $num_rows=mysqli_num_rows($query);
    if($num_rows)
    {
       ?> <html>
        <head>
        <style>
        #thanx
        {
            font-weight:bold;
            font-size:40px;
            text-align:center;
            font-family:sans-serif;
            margin:0;
            padding:35px;
        }
        body
        {
            margin:0;
            padding:0;
            background:url("bus.jpg");
            background-size:cover;
            font-family:sans-serif;
        }
        .busenter-box
        {
            width:580px;
            height:370px;
            background:rgba(0,0,0,0.7);
            color:#fff;
            top:55%;
            left:50%;
            position:absolute;
            transform:translate(-50%,-50%);
            box-sizing:border-box;
            padding:70px 10px;
        }
        h2
        {
            margin:0;
            padding:0 0 20px;
            color:#FFCC33;
            text-align:center;
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
        .busenter-box a
        {
            color:white;
            font-size:14px;
            font-weight:bold;
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
        </style>
        <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
        </head>
        <body>
        <div class="navigation">
<nav>
<ul>
<li><a href="status.php">STATUS</a></li>
</ul>
</nav>
</div>
        <p id="thanx">"Thankyou for logging in"</p>
        <div class="busenter-box">
        <p>Once submitted cannot be changed as of now.Need to consult administration</p>
        <br><br>
        <form action="busenter.php" method="post">
        Enter your reciept number:<input type="text" name="recieptnum" value="<?php echo $formrecieptnum?>"><br>
        Enter stop name you want to choose:<input type="text" name="stopname" required>
        <br><br>
        <input type="submit" name="sub" value="submit">
        </form>
        </div>
        </body>
        </html>
<?php    
    }
    else
    {
        ?>
        <html>
        <style>
        body
{
    margin:0;
    padding:0;
    background:url("busshades.jpg");
    background-size:cover;
    font-family:sans-serif;
} 
.register
{
transform:translate(40%,200%);
}
.register p
{
font-size:25px;
font-weight:bold;
font-family:sans-serif;
}
.register a
{
font-size:25px;
font-weight:bold;
font-family:sans-serif;
}
        </style>
        <body>
		<div class="register">
        <p>Please do register first</p>
        <a href=newuser.php>Register_here</a>
        </div>
        </body>
        </html>
    <?php 
    }
}
else
    echo "didnot connect to the database";
?>










