<?php
$db = "permohonan";
$link = mysqli_connect("localhost","root","opom2317");

if (! $link) die (mysqli_error());
mysqli_select_db($link,'permohonan') or die("Select Error:" . mysqli_error());

$no = $_POST['no'];
$name = $_POST['name'];
$dept = $_POST['department'];
$user = $_POST['staff_username'];
$pwd = $_POST['staff_pwd'];

$result = mysqli_query ($link,"UPDATE staff SET name='$name',department='$dept',staff_username='$user',staff_pwd='$pwd' WHERE no='$no'")
or die ("Insert Error:" . mysqli_error($link));

echo"<script>"
		."alert('User data has been updated!');"
		."</script>"
		."<meta http-equiv=Refresh content=\"0; URL=user_credential(staff).php\">";

mysqli_close($link);
?>
