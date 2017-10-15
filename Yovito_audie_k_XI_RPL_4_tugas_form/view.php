<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Insta</title>
<link rel="stylesheet" type="text/css" href="resources/css/style.css">
</head>
<link rel="stylesheet" type="text/css" href="resources/css/style.css">
<body>
<table align="center" class="tableview">
	<tr>
		<td><img src="logo.png" />
		</td>
	</tr>
	<tr>
		<td>Nama</td>
		<td>:</td>
		<td><?php
			 echo $_POST ["nama"];
			 ?>
		</td>
	</tr>

	<tr>
		<td>Username</td>
		<td>:</td>
		<td><?php 
			echo $_POST["username"];
			?>
		</td>
	</tr>
	
	<tr>
		<td>Email</td>
		<td>:</td>
		<td><?php
			echo $_POST["email"];
			?>
		</td>
	</tr>
	
	<tr>
		<td>Password</td>
		<td>:</td>
		<td><?php
			$password = $_POST["password"];
			$password = str_repeat("*", strlen($password));
			echo "$password";
			?>
			</td> 
	</tr>
	
	<tr>
		<td><a href="index.php"><button class="daftar">BACK</button></a></td>
	</tr>
</table>
</body>
</html>
