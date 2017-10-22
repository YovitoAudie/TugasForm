<!DOCTYPE html PUBLIC "-//W3C DTD XHTML 1.0 Transitional //EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
		<head>
			<meta http-equiv="Content-Type" content="text/html; charset=iso=8859-1"/>
			<title>Insta</title>
			<link rel="stylesheet" type="text/css" href="resources/css/style.css">
		</head>
		<body>
			<form action="view.php" method="post">
			<div id="background">
				<div id="logo"><img src="logo.png"></img></div>
				<table>
					<tr>
						<td><input type="text" name="nama" placeholder="Name" class="textbox" required></input></td>
					</tr>
					<tr>
						<td><input type="text" name="username" placeholder="Username" class="textbox" required></input></td>
					</tr>
					<tr>
						<td><input type="email" name="email" placeholder="Email" class="textbox" pattern="[^ @]*@[^ @]*" required></input></td>
					<tr>
						<td><input type="password" name="password" placeholder="Password" class="textbox" required></input></td>
					</tr>
					<tr>
						<td><input class="daftar" type="submit" value="Sign up"></td>
					</tr>

				</table>
				</div>
			</form>
			<div class ="alhv">Already have an account? <a href="#"><span>Log in</span></a></div>
			<br>
			<br>
			<br>
			<br>
			<br>
			<a href="tampil.php">Debugger tool</a>
		</body>