<?php

$db = "permohonan";
$link = mysqli_connect("localhost","root","opom2317");

if (! $link) die (mysqli_error());
mysqli_select_db($link,'permohonan') or die("Select Error:" . mysqli_error());


$name = $_POST['name'];
$department = $_POST['department'];
foreach($_POST['chkbox'] as $index => $val);
$start_date = date('Y-m-d',strtotime($_POST['start_date']));
$end_date= date('Y-m-d',strtotime($_POST['end_date']));
$reason=mysqli_real_escape_string($link, $_POST['reason']);
$status = $_POST['status'];
// $verification = $_POST['verification']

$result = mysqli_query ($link,"INSERT INTO leavereq (name,department,leavetype,start_date,end_date,reason) VALUES ('$name','$department','$val','$start_date','$end_date','$reason')")
or die ("Insert Error:" . mysqli_error($link));

echo"<script>"
		."alert('Your form has been submitted');"
		."</script>"
		."<meta http-equiv=Refresh content=\"0; URL=staffleaveform.html\">";
mysqli_close($link);
?>
