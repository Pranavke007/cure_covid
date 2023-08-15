<!doctype html>
<html>
<head>
<style>
body{
    background: url(giphy.gif);
    background-size: 100% 115%;
	
    background-position: center;
	background-repeat: no-repeat;
    height: 500px;
	
	}
	table {
		width: 80%;
	}
	table, th, td
	{
		border: 1px solid black;
		border-collapse: collapse;
		opacity: 0.85;
		width: 1150px;
		height: 30px;
		margin: 120px;
		padding: 60px;

	}
	th, td
	{
		padding: 10px;
		text-align: center;
	}
	th
	{
		background-color: #a70000;
		color: white;
	}
	tr:nth-child(even)
	{
		background-color: #D3D3D3;
	
	}
	tr:nth-child(odd)
	{
		background-color: #ffffff;
	}
	td{
		background-color: #;
	}
	</style>
</head> 
<body>
<table style="border=:1px solid black;margin-left:auto;margin-right:auto">
<tr>
<th>Hospital Id</th>
<th>Name</th>
<th>Vacant Beds </th>
<th>Recovery</th>
<th>ppe</th>
<th>problems</th>
</tr>


<?php
$host= "localhost";
$username = "root";
$password = "";
$db="hospitals";
// Create connection
$conn = new mysqli($host,$username, $password,$db);
// Check connection
if ($conn->connect_error)
{
  die("Connection failed: " . $conn->connect_error);
}

if(!empty($_POST['submit']))
{
$pincode=$_POST['pincode'];
$que="select pincode from hospital where pincode='$pincode'";
$res=mysqli_query($conn,$que);
$cou=mysqli_num_rows($res);
if($cou>0)
{
$query="select id,vacant,name,recovery,ppe,problems from hospital where pincode='$pincode' ";
$result=mysqli_query($conn,$query);
$count=mysqli_num_rows($result);
while($count= $result->fetch_assoc()) 
{
	echo ("<tr><td>".$count["id"]."</td><td>".$count["name"]."</td><td>".$count["vacant"]."</td><td>".$count["recovery"]."</td><td>".$count["ppe"]."</td><td>".$count["problems"]."</tr></td>");
}
}
else
{
	echo "wrong pincode";
}
}
?>
</table>
</body>
</html>
