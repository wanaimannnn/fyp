<?php
 session_start();
 session_destroy();
 echo"<script>"
 		."alert('You are succesfully logged out!');"
 		."</script>"
 		."<meta http-equiv=Refresh content=\"0; URL=index.php\">";
?>
