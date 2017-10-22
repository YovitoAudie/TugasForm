<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Insta</title>
<link rel="stylesheet" type="text/css" href="resources/css/style.css">
</head>
<link rel="stylesheet" type="text/css" href="resources/css/style.css">
<body>
<?php
	$host = "localhost";
	$user = "root";
	$password = "";
	$nama= $_POST['nama'];
	$username= $_POST['username'];
	$email = $_POST['email'];
	$passw = $_POST['password'];
if ($nama){
		$conn=mysqli_connect($host,$user,$password);
		mysqli_select_db($conn,"instagram_db");
		$sql="insert into insta_table values ('$nama', '$username', '$email', '$passw')";
		$hasil= mysqli_query($conn,$sql);
		echo "Data berhasil disimpan";
	}
	else{
		echo "Data Gagal disimpan";
	}
$koneksi = mysql_connect('localhost', 'root', '') or die ("Gagal connect ke server");
mysql_select_db("instagram_db") or die ("gagal membuka database");
?>
<table align="center" class="tableview">
	<tr>
		<td><img src="logo.png" />
		</td>
	</tr>
<?php
$sql="select * from insta_table";
$hasil= mysql_query($sql, $koneksi) or die("gagal melakukan query");
while ($row=mysql_fetch_array($hasil)) {
	# cod
}
?>
	<tr>
		<td>Nama</td>
		<td>:</td>
		<td><?php
			 echo $_POST["nama"];
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
			$passw = $_POST["password"];
			$passw = str_repeat("*", strlen($passw));
			echo "$passw";
			?>
			</td> 
	</tr>
	
	<tr>
		<td><a href="index.php"><button class="daftar">BACK</button></a></td>
		<?php
	
	mysql_close($koneksi);
		?>
	</tr>
</table>
</body>
</html>
