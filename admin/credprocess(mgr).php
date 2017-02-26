<?php
$db = "permohonan";
$link = mysqli_connect("localhost","root","opom2317");

if (! $link) die (mysqli_error());
mysqli_select_db($link,'permohonan') or die("Select Error:" . mysqli_error());

$no = $_POST['no'];
$name = $_POST['name'];
$dept = $_POST['department'];
$user = $_POST['mgr_username'];
$pwd = $_POST['mgr_pwd'];

$result = mysqli_query ($link,"UPDATE manager SET name='$name',department='$dept',mgr_username='$user',mgr_pwd='$pwd' WHERE no='$no'")
or die ("Insert Error:" . mysqli_error($link));

echo"<script>"
		."alert('User data has been updated!');"
		."</script>"
		."<meta http-equiv=Refresh content=\"0; URL=user_credential(mgr).php\">";

mysqli_close($link);
?>
