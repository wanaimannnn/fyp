<?php

$db = "permohonan";
$link = mysqli_connect("localhost","root","opom2317");

if (! $link) die (mysqli_error());
mysqli_select_db($link,'permohonan') or die("Select Error:" . mysqli_error());

$no = $_POST['no'];
$name = $_POST['name'];
$ic = $_POST['ic'];
$address = mysqli_real_escape_string($link, $_POST['address']);
$mobileno = $_POST['mobileno'];
$position = $_POST['position'];
$department = $_POST['department'];
$gender = $_POST['gender'];
$citizenstatus = $_POST['citizenstatus'];
$race = $_POST['race'];
$religion = $_POST['religion'];
$maritalstatus = $_POST['maritalstatus'];
$email = $_POST['email'];

$tables = array("manager","supervisor","staff");
foreach($tables as $table){
$result = mysqli_query ($link,"UPDATE $table SET name='$name',ic='$ic',address='$address',mobileno='$mobileno',position='$position',department='$department',gender='$gender',citizenstatus='$citizenstatus',race='$race',religion='$religion',maritalstatus='$maritalstatus',email='$email' WHERE no='$no'")
or die ("Insert Error:" . mysqli_error($link));
}
echo"<script>"
		."alert('User data has been updated!');"
		."</script>"
		."<meta http-equiv=Refresh content=\"0; URL=user_manage.php\">";
  
mysqli_close($link);
?>
