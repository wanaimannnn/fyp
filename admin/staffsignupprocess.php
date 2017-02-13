<?php

$db = "permohonan";
$link = mysqli_connect("localhost","root","opom2317");

if (! $link) die (mysqli_error());
mysqli_select_db($link,'permohonan') or die("Select Error:" . mysqli_error());


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
$username = $_POST['staff_username'];
$password = $_POST['staff_pwd'];
$role = $_POST['role'];
// foreach($_POST['chkbox'] as $index => $val);
//$start_date = date('Y-m-d',strtotime($_POST['start_date']));
//$end_date= date('Y-m-d',strtotime($_POST['end_date']));
//$reason=mysqli_real_escape_string($link, $_POST['reason']);
// $verification = $_POST['verification']

$result = mysqli_query ($link,"INSERT INTO staff (name,ic,address,mobileno,position,department,gender,citizenstatus,race,religion,maritalstatus,email,staff_username,staff_pwd,role) VALUES ('$name','$ic','$address','$mobileno','$position','$department','$gender','$citizenstatus','$race','$religion','$maritalstatus','$email','$username','$password','$role')")
or die ("Insert Error:" . mysqli_error($link));

echo"<script>"
		."alert('Your form has been submitted');"
		."</script>"
		."<meta http-equiv=Refresh content=\"0; URL=staffsignup.php\">";
mysqli_close($link);
?>
