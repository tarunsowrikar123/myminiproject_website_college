<?php 
$formadminusername=$_POST["username"];
$formadminpassword=$_POST["password"];
$db=mysqli_connect("localhost","root","","test");
if(isset($_POST["submit"]))
{
    if($db)
    {
        $stmt1="select * from admin where username='$formadminusername' and password='$formadminpassword'";
        $query1=mysqli_query($db,$stmt1);
        $num_rows=mysqli_num_rows($query1);
        if($num_rows==1)
        {
            ?>
  			<html>
  			<head>
  			<script>
			function func()
			{
				window.location.href="adminnextpage.php";
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
    background:url("bus.jpg");
    background-size:cover;
    font-family:sans-serif;
}
.login-box
{
    width:320px;
    height:200px;
    background:rgba(0,0,0,0.7);
    color:#fff;
    top:58%;
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
a
{
color:blue;
font-size:40px;
line-height:40px;
}
a:hover
{
background:#FF9900;
width:100%;
}
.button
{
border:none;
outline:none;
height:40px;
color:#fff;
font-size:16px;
background:#FFCC00;
cursor:pointer;
border-radius:20px;
width:100%;
}
.button:hover
{
background:#FF9900;
color:#fff;
}
</style>
<body>
<div class="login-box">
<h2>Thankyou for logging in</h2>
<button onclick="func()" class="button">Next-Page</button>
</div>
</body>
</html>          
<?php
        }
    }
}
?>