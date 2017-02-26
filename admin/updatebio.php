<?php

$db = "permohonan";
$link = mysqli_connect("localhost","root","opom2317");

if (! $link) die (mysqli_error());
mysqli_select_db($link,'permohonan') or die("Select Error:" . mysqli_error());

$target_dir = "../profile/";
$target_file = $target_dir . basename($_FILES["profile"]["name"]);
$uploadOk = 1;

$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["profile"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
echo "<fieldset>";

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, the image was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["profile"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["profile"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading the image.";
    }
}

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
$profile = $target_dir . $_FILES["profile"]["name"];

$superdir = "<img src=" . $profile .  " alt=HTML5 Icon style=width:auto;height:150px>";

$tables = array("manager","supervisor","staff");
foreach($tables as $table){
$result = mysqli_query ($link,"UPDATE $table SET name='$name',ic='$ic',address='$address',mobileno='$mobileno',position='$position',department='$department',gender='$gender',citizenstatus='$citizenstatus',race='$race',religion='$religion',maritalstatus='$maritalstatus',email='$email',profile='$superdir' WHERE no='$no'")
or die ("Insert Error:" . mysqli_error($link));
}
echo"<script>"
		."alert('User data has been updated!');"
		."</script>"
		."<meta http-equiv=Refresh content=\"0; URL=user_manage.php\">";

mysqli_close($link);
?>
