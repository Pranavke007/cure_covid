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
$query="select id,vacant,name from hospital where pincode='$pincode' ";
$result=mysqli_query($conn,$query);
$count=mysqli_num_rows($result);
while($count= $result->fetch_assoc()) 
{
	echo nl2br("\n");
	echo ("<tr><td>" . $count["id"]. "</td><td>\n".$count["vacant"]."</td><td>\n\r".$count["name"]."</tr></td>");
	echo("\r\n");
}
}
else
{
	echo "wrong pincode";
}
}


?>
