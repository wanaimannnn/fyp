<?php
$no=$_GET['no'];

$link=mysqli_connect("localhost","root","opom2317")or die("failed to connect" .mysql_error($link));

$db=mysqli_select_db($link,"permohonan");

$query="DELETE FROM request WHERE no='".$no."'";

//$result=mysql_query($query)

if(mysqli_query($link,$query))
	{
		echo"<script>"
		."alert('Form has been deleted');"
		."</script>"
		."<meta http-equiv=Refresh content=\"0; URL=statusofficeleave.php\">";
	}
	else
	{
		echo "ERROR";
	}

mysqli_close($link);
?>
