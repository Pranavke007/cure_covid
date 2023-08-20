<?php
session_start();

$vacant= filter_input(INPUT_POST, 'vacant');
$recovery = filter_input(INPUT_POST, 'recovery');
$ppe = filter_input(INPUT_POST, 'ppe');
$problems= filter_input(INPUT_POST, 'problems');

$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "hospitals";
$biu=$_SESSION['id'];
// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
//$que="select*from hospital";
$sql = "UPDATE hospital SET vacant=$vacant,recovery=$recovery,ppe=$ppe,problems='".$problems."' WHERE id='$biu' ";
if ($conn->query($sql)){
	//echo $_SESSION['id'];
	header('Location:submit.html');
//echo "New record is inserted sucessfully";
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
session_destroy();
?>
