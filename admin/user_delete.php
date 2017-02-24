<?php
$no=$_GET['no'];

$link=mysqli_connect("localhost","root","opom2317")or die("failed to connect" .mysql_error($link));

$db=mysqli_select_db($link,"permohonan");

$tables = array("manager","supervisor","staff");
foreach($tables as $table) {
  $query = mysqli_query($link, "DELETE FROM $table WHERE no='$no'");
}
		echo"<script>"
		."alert('User has been deleted');"
		."</script>"
		."<meta http-equiv=Refresh content=\"0; URL=user_manage.php\">";
mysqli_close($link);
?>
