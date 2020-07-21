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
table
{
margin-left:auto;
margin-right:auto;
margin-top:30px;
}
</style>
<body>
<table>
<tr>
<th>Recieptnumber</th>
<th>Stopname</th>
</tr>
<?php 
$db=mysqli_connect("localhost","root","","test");
if($db)
{
    $stmt1="select Recieptnumber,stopname from studentdetails where stopname IS NOT NULL and alloted='NO'";
    $query1=mysqli_query($db,$stmt1);
    if(mysqli_num_rows($query1)>0)
    {
        while($row=mysqli_fetch_assoc($query1))
        {
            echo "<tr><td>".$row['Recieptnumber']."</td><td>".$row['stopname']."</td>";
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