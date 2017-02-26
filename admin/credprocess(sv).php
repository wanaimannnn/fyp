<?php
$db = "permohonan";
$link = mysqli_connect("localhost","root","opom2317");

if (! $link) die (mysqli_error());
mysqli_select_db($link,'permohonan') or die("Select Error:" . mysqli_error());

$no = $_POST['no'];
$name = $_POST['name'];
$dept = $_POST['department'];
$user = $_POST['sv_username'];
$pwd = $_POST['sv_pwd'];

$result = mysqli_query ($link,"UPDATE supervisor SET name='$name',department='$dept',sv_username='$user',sv_pwd='$pwd' WHERE no='$no'")
or die ("Insert Error:" . mysqli_error($link));

echo"<script>"
		."alert('User data has been updated!');"
		."</script>"
		."<meta http-equiv=Refresh content=\"0; URL=user_credential(sv).php\">";

mysqli_close($link);
?>
