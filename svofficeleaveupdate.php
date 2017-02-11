<?php
$db = "permohonan";
$link = mysqli_connect("localhost","root","opom2317");

if (! $link) die (mysqli_error());
mysqli_select_db($link,'permohonan') or die("Select Error:" . mysqli_error());

$no = $_POST['no'];
$name = $_POST['name'];
$department = $_POST['department'];
foreach($_POST['chkbox'] as $index => $val);
$date = date('Y-m-d',strtotime($_POST['date']));
$purpose= $_POST['purpose'];
$reason=mysqli_real_escape_string($link, $_POST['reason']);
$timeout= $_POST['timeout'];
$timein= $_POST['timein'];
$status=$_POST['status'];


$result = mysqli_query ($link,"UPDATE request SET name='$name',department='$department',shift='$val', datee='$date',purpose='$purpose',reason='$reason',timeout='$timeout',timein='$timein',status='$status' WHERE no='$no'")
or die ("Insert Error:" . mysqli_error($link));

echo"<script>"
		."alert('The form has been updated');"
		."</script>"
		."<meta http-equiv=Refresh content=\"0; URL=svstatusofficeleave.php\">";
mysqli_close($link);
?>
