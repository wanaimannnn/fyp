<?php
$db = "permohonan";
$link = mysqli_connect("localhost","root","opom2317");

if (! $link) die (mysqli_error());
mysqli_select_db($link,'permohonan') or die("Select Error:" . mysqli_error());

$no = $_POST['no'];
$name = $_POST['name'];
$department = $_POST['department'];
foreach($_POST['chkbox'] as $index => $val);
$start_date = date('Y-m-d',strtotime($_POST['start_date']));
$end_date= date('Y-m-d',strtotime($_POST['end_date']));
$reason=mysqli_real_escape_string($link, $_POST['reason']);
$status = $_POST['status'];
$support = $_POST['supported_by'];
$validate = $_POST['validated_by'];


if ($status == 1) {
$sql = "UPDATE supervisor SET limitcuti = limitcuti - 1 WHERE name='$name';";
$sql .= "UPDATE leavereq SET name='$name',department='$department',leavetype='$val',start_date='$start_date',end_date='$end_date',reason='$reason',status='$status',supported_by='$support',validated_by='$validate' WHERE no='$no'";

$result = mysqli_multi_query($link, $sql);

if ($result) {
    do {
        // grab the result of the next query
        if (($result = mysqli_store_result($link)) === false && mysqli_error($link) != '') {
            echo "Query failed: " . mysqli_error($mysqli);
        }
    } while (mysqli_more_results($link) && mysqli_next_result($link)); // while there are more results
}
}elseif ($status == 2) {
	 $result = mysqli_query($link,"UPDATE leavereq SET name='$name',department='$department',leavetype='$val',start_date='$start_date',end_date='$end_date',reason='$reason',status='$status',supported_by='$support',validated_by='$validate' WHERE no='$no'")
	 or die ("Insert Error:" . mysqli_error($link));
}
else {
    echo "First query failed..." . mysqli_error($link);
}

echo"<script>"
		."alert('The form has been validated');"
		."</script>"
		."<meta http-equiv=Refresh content=\"0; URL=applicationsvstatusleave.php\">";
mysqli_close($link);
