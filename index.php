<?php
session_start();
include "koneksi.php"
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="css/tampilan.css">
	</head>
	<body>
		<p>Diam tak berarti, Bergerak bermain teka teki</p>
			<br>silakan masukan passwordnya untuk melanjutkan permainan</br>
			<break>cluenya adalah makan gak enak tidur tak nyenyak apakah itu ?</break>
			<form action=" " method="post">
				<table>
					<ul>
						<li>Password : </li>
						<li><input name="password" type="password" id="password"></li>
					</ul>
					<ul>
						<li><button type="submit" name="submit"> login</li>
					</ul>
				</table>
			</form>
	</body>
</html>

<?php
	 if (isset($_POST['submit']))
{
	$sql = mysqli_query ($koneksi, "SELECT * FROM pass WHERE  password = '$_POST[password]' "); 
		
		$cek = mysqli_num_rows($sql); 
			if ($cek > 0){
        				$_SESSION['password'] = $_POST['password'];
        					header("Location: selamat.php");
				}else{
					echo "<script>alert('salah password blok!!!')</script>";
					echo "<script>alert('udah salah gak donate semoga bapakmu jadi pemuda pancasila')</script>";
				}
}
?>