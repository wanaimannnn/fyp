<?php

$db = "permohonan";
$link = mysqli_connect("localhost","root","opom2317");

if (! $link) die (mysqli_error());
mysqli_select_db($link,'permohonan') or die("Select Error:" . mysqli_error());


$name = $_POST['name'];
$department = $_POST['department'];
foreach($_POST['chkbox'] as $index => $val);
$date = date('Y-m-d',strtotime($_POST['date']));
$radio= $_POST['purpose'];
$reason=mysqli_real_escape_string($link, $_POST['reason']);
$timeout= $_POST['timeout'];
$timein= $_POST['timein'];
$status=$_POST['status'];
// $end_date= date('Y-m-d',strtotime($_POST['end_date']));
// $verification = $_POST['verification'];

$result = mysqli_query ($link,"INSERT INTO request (name,department,shift,datee,purpose,reason,timeout,timein) VALUES ('$name','$department','$val','$date','$radio','$reason','$timeout','$timein')")
or die ("Insert Error:" . mysqli_error($link));

echo"<script>"
		."alert('Your form has been submitted');"
		."</script>"
		."<meta http-equiv=Refresh content=\"0; URL=svleaveoffice.html\">";
mysqli_close($link);
?>
