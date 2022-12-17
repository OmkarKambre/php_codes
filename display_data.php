<?php
$conn = mysqli_connect("localhost","root","","demo");
$query="SELECT * FROM person";
$result= $conn->query($query);
if ($result->num_rows>0)
{
	while($row = $result->fetch_assoc())
	{
		echo "Name: ".
			$row["Name"]. "Email: " .
			$row["Email"] . "<br>";
	}
}
else 
{
	echo "0 results";
}
$conn->close();
?>

