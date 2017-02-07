<?php
 require 'database-config.php';
 session_start();
 $username = "";
 $password = "";
 if(isset($_POST['username'])){
  $username = $_POST['username'];
 }
 if (isset($_POST['password'])) {
  $password = $_POST['password'];
 }
 if ($username != '' && $password != '')
 {
 $q =  "SELECT mgr_username,name,mgr_pwd,role
         FROM manager
         WHERE mgr_username = '$username' AND mgr_pwd = '$password'
         UNION
         SELECT sv_username,name,sv_pwd,role
         FROM supervisor
         WHERE sv_username = '$username' AND sv_pwd = '$password'
         UNION
         SELECT staff_username,name,staff_pwd,role
         FROM staff
         WHERE staff_username = '$username' AND staff_pwd = '$password'";

 $query = $dbh->prepare($q);
 $query->execute(array(':username' => $username, ':password' => $password));
 if($query->rowCount() == 0){
  header('Location: index.php?err=1');
 }else{
  $row = $query->fetch(PDO::FETCH_ASSOC);
  session_regenerate_id();
  $_SESSION['id_user'] = $row['mgr_username'];
  $_SESSION['user_name'] = $row['name'];
  $_SESSION['role']= $row['role'];

  if($_SESSION['role']=='admin')
  {
    echo("<SCRIPT language='javascript'>window.alert('Login Success, Welcome Admin!!');window.location='adminhome.html'; </SCRIPT>");
  }
  elseif($_SESSION['role']=='manager')
  {
    echo("<SCRIPT language='javascript'> window.alert('Login Success, Welcome Manager!!');window.location='mgrhome.html'; </SCRIPT>");
  }
  elseif($_SESSION['role']=='supervisor')
  {
    echo("<SCRIPT language='javascript'> window.alert('Login Success, Welcome Supervisor!!');window.location='svhome.html'; </SCRIPT>");
  }
  elseif($_SESSION['role']=='staff')
  {
    echo("<SCRIPT language='javascript'> window.alert('Login Success, Welcome Staff!!');window.location='staffhome.html'; </SCRIPT>");
  }
else
{

  $error = 'Username or Password not match!';
}
}
}

?>
