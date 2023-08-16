<?php
$connect=mysqli_connect("localhost","root","","project")or die("connection failed");
if(!empty($_POST['submit']))
{
$username=$_POST['username'];
//$phone=$_POST['phone'];
//$email=$_POST['email'];
$password=$_POST['password'];
$query="select*from login where username='$username' and password='$password'";
$result=mysqli_query($connect,$query);
$count=mysqli_num_rows($result);
if($count>0)
{
	header ("Location:userdashboard.html");
}
else
{
	header("Location:incorrect.html");
}
}
?>
