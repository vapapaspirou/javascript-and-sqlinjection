<?php 

if(isset($_POST['submit']))
{
$conn = mysqli_connect("localhost","root","","sql_injection");
	$name =  $_POST['user'];
	$pwd  =  $_POST['password'];
	#$name = mysqli_real_escape_string($conn, $_POST[‘user’]);
 	#$pass = mysqli_real_escape_string($conn, $_POST[‘password’]);
	echo $sql = "select * from admin_login where username = '$name' and password = '$pwd' ";
	echo "<br/>";
	$res = mysqli_query( $conn,$sql); 
	if (mysqli_num_rows($res) >0 ) {
		echo "Login ok";
		
	}
	else
	{
		echo "Login failed";
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	
	<title></title>
	<link rel="stylesheet" href="">
</head>
	<style type="text/css">
		.box input[type="text"]{
			border: none;
			border-radius: 3px;
			outline:none;
			padding: 3px;
		}
	</style>
<body>
	<div class="box">
		<center><form method="post">
			<table>
				<h1>SQL INJECTION</h1>
				<tr>
					<td>Name:-</td>
					<td><input type="text" name="user" value="" style="border: 0.5px solid #111111">	
					</td>
				</tr>
				<tr>

				<td>Password:-</td><br>
				<td><input type="text" name="password" value="" style="border: 0.5px solid #111"></td>
			</tr>
			<tr>
				<td><input type="submit" name="submit" value="Login"></td>
			</tr>
			</table>
		</form></center>
		</div>


</body>
</html>


