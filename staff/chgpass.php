<?php
session_start();
$db = "permohonan";
$link = mysqli_connect("localhost","root","opom2317");

if (! $link) die (mysqli_error());
mysqli_select_db($link,'permohonan') or die("Select Error:" . mysqli_error());

$user = $_SESSION['id_user'];
$pass = $_POST['password'];


$result = mysqli_query ($link,"UPDATE staff SET staff_pwd='$pass' WHERE staff_username='$user'")
or die ("Insert Error:" . mysqli_error($link));

echo"<script>"
		."alert('Your password has changed!');"
		."</script>"
		."<meta http-equiv=Refresh content=\"0; URL=staffchgpass.php\">";

mysqli_close($link);
?>
