<?php
$conn = mysqli_connect("localhost","root","","demo");
$Name = $_POST['name'];
$Email = $_POST['email'];
$sql = "INSERT INTO person (name,email) VALUES ('$Name','$Email')";
if(!mysqli_query($conn,$sql))
{
	echo "No";
}
else
{
	echo "Yes";
}
header("url=insert1.php");