<?php
$con = mysqli_connect('localhost','root','','galaxy apartment');

function showData()
{
	global $con;
	$query = "SELECT * FROM 'tenants";
	$run = mysqli_query($con,$query);
	if($run==True)
	{
		$data=mysqli_fetch_assoc($run);
		printr($data);
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Show data</title>
</head>
<body>
 
</body>
</html>