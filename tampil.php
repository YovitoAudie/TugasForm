<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
$host="localhost";
$user="root";
$password="";
$conn=mysql_connect($host,$user,$password);
mysql_select_db("instagram_db");
$sql = "select * from insta_table";
$hasil = mysql_query($sql,$conn);
$row=mysql_fetch_row($hasil);
	if ($row) {
		do{
			list($nama,$username,$email,$password)=$row;
			echo "	$nama <br>
					$username<br>
					$email<br>
					$password<br>";
			}
		while ($row=mysql_fetch_row($hasil)); {
			# code...
		}
		}

?>
</body>
</html>