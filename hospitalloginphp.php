<?php
session_start();
$connect=mysqli_connect("localhost","root","","hospitals")or die("connection failed");
if(!empty($_POST['submit']))
{
$id=$_POST['id'];
//$phone=$_POST['phone'];
//$email=$_POST['email'];
$password=$_POST['password'];
$query="select*from hospital where id='$id' and password='$password'";
$result=mysqli_query($connect,$query);
$count=mysqli_num_rows($result);
if($count>0)
{
	$_SESSION['id'] = $id;
	header ("Location:hospitalupdate.html");
	
}
else
{
	header("Location:incorrect.html");
}
}
?>
