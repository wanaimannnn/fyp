<?php
session_start();

$link=mysqli_connect("localhost","root","opom2317") or die ("Unable to connect".

mysqli_error($link));

$q=mysqli_select_db($link,"permohonan");

$admin = $_SESSION['id_user'];
$query="SELECT * FROM manager WHERE mgr_username='$admin'";
$result = mysqli_query($link,$query) or die('Query failed. ' . mysqli_error($link));
$q=mysqli_query($link,$query);
while( $row = mysqli_fetch_assoc($result) )
{

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>OFFICE MANAGEMENT SYSTEM</title>

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

  <div id="wrapper">

   <!-- Navigation -->
   <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
       <!-- Brand and toggle get grouped for better mobile display -->
       <div class="navbar-header">
           <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
               <span class="sr-only">Toggle navigation</span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
           </button>
           <a class="navbar-brand" href="adminhome.php">Admin Page</a>
       </div>
       <!-- Top Menu Items -->
       <ul class="nav navbar-right top-nav">
           <li class="dropdown">
               <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-fw fa-user"></i> <?php echo $row['name']; ?> <b class="caret"></b></a>
               <ul class="dropdown-menu">
                   <li>
                       <a href="displaybiodata.php"><i class="fa fa-fw fa-user"></i> Profile</a>
                   </li>
                   <li class="divider"></li>
                   <li>
                       <a href="../logout.php"><i class=fa fa-sign-out fa-fw"></i> Log Out</a>
                   </li>
               </ul>
           </li>
       </ul>
          <?php
          }
          ?>
          <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
          <div class="collapse navbar-collapse navbar-ex1-collapse">
              <ul class="nav navbar-nav side-nav">
                  <li class="active">
                      <a href="adminhome.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                  </li>
                  <li>
                      <a href="javascript:;" data-toggle="collapse" data-target="#demo1"><i class="fa fa-fw fa-user"></i> User Registration <i class="fa fa-fw fa-caret-down"></i></a>
                      <ul id="demo1" class="collapse">

                          <li>
                              <a href="mgrsignup.php"></i> Manager Registration</a>
                          </li>

                          <li>
                              <a href="svsignup.php"></i> Supervisor Registration</a>
                          </li>

                          <li>
                              <a href="staffsignup.php"> Staff Registration</a>
                          </li>
                      </ul>
                  </li>
              <!--    <li>
                      <a href="signupform.html"><i class="fa fa-fw fa-user"></i> Login Credential</a>
                    </li> -->
                  <li>
                      <a href="user_manage.php"><i class="fa fa-fw fa-edit"></i> User Management</a>
                  </li>
                  <li>
                      <a href="javascript:;" data-toggle="collapse" data-target="#demo2"><i class="fa fa-fw fa-user"></i> Login Credential <i class="fa fa-fw fa-caret-down"></i></a>
                      <ul id="demo2" class="collapse">

                          <li>
                              <a href="user_credential(mgr).php"></i> Manager </a>
                          </li>

                          <li>
                              <a href="user_credential(sv).php"></i> Supervisor </a>
                          </li>

                          <li>
                              <a href="user_credential(staff).php"> Staff </a>
                          </li>
                      </ul>
                  </li>
                  <li>
                      <a href="calendaradmin.php"><i class="fa fa-fw fa-calendar"></i> Calendar</a>
                  </li>
              </ul>
          </div>
          <!-- /.navbar-collapse -->
      </nav>

      <div id="page-wrapper">

         <div class="container-fluid">

             <!-- Page Heading -->
             <div class="row">
                 <div class="col-lg-12">
                     <h1 class="page-header">
                         Login Credential
                     </h1>
                     <ol class="breadcrumb">
                         <li>
                             <i class="fa fa-dashboard"></i>  <a href="adminhome.php">Dashboard</a>
                         </li>
                         <li class="active">
                             <i class="fa fa-edit"></i> Manager
                         </li>
                     </ol>
                 </div>
             </div>

             <!-- /.row -->
             <?php
                $link=mysqli_connect("localhost","root","opom2317") or die ("Unable to connect".
                mysqli_error($link));
                $q=mysqli_select_db($link,"permohonan");
                $no=$_GET['no'];
                $name = $_SESSION['id_user'];
                $query="SELECT * FROM manager WHERE no='$no'";
                $result = mysqli_query($link,$query) or die('Query failed. ' . mysqli_error($link));
                $q=mysqli_query($link,$query);
                while( $row = mysqli_fetch_assoc($result) )
                {
              ?>
             <div class="row">
                 <div class="col-sm-6 col-sm-offset-3">

                     <form role="form" method="post" action="credprocess(mgr).php">
                      <input class="input-lg" type="hidden" id="no" name="no" value="<?php echo $row['no']; ?>" maxlength="100" required>
                      <br>
                      <br>
                      <div class="table-responsive">
                        <table class="table table-user-information">
                               <th colspan="2"><center>Login Credential</center></td>
                          <tr>
                            <td>
                       <div class="form-group">
                     <label> Name </Label></td>
                  <td>   <input class="form-control" name="name" value="<?php echo $row['name']; ?>" readonly> </td>
                    </tr>
                   </div>
                       <tr>
                         <td>
                         <div class="form-group">
                             <label> Phone Number </Label></td>
                             <td><input class="form-control" name="department" value="<?php echo $row['department']; ?>" readonly></td>

                         </div>
                       </tr>


                             <form role="form">
                               <tr>
                                 <td>
                              <div class="form-group">
                                  <label> Username </label></td>
                                 <td> <input class="form-control" name="mgr_username" value="<?php echo $row['mgr_username']; ?>"></td>
                              </div>
                            </tr>
                            <tr>
                              <td>
                              <div class="form-group">
                                  <label> Password </label></td>
                                 <td> <input type="text" class="form-control" name="mgr_pwd" value="<?php echo $row['mgr_pwd']; ?>"></td>

                              </div>
                            </tr>
                       <?php
                        }
                        ?>
                                 <tr>
                                   <td>
                              <button type="submit" class="btn btn-default">Submit</button> &nbsp;&nbsp;
                              <button type="reset" class="btn btn-default">Reset</button>
                            </label><td></tr>
                          </form>
                        </table>
                      </div>
                          <br>
                          <br>
                      </div>
                    </div>
                  </div>
             <!-- /.row -->

         </div>
         <!-- /.container-fluid -->

     </div>
     <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../js/plugins/morris/raphael.min.js"></script>
    <script src="../js/plugins/morris/morris.min.js"></script>
    <script src="../js/plugins/morris/morris-data.js"></script>

    <!-- Flot Charts JavaScript -->
    <!--[if lte IE 8]><script src="js/excanvas.min.js"></script><![endif]-->
    <script src="../js/plugins/flot/jquery.flot.js"></script>
    <script src="../js/plugins/flot/jquery.flot.tooltip.min.js"></script>
    <script src="../js/plugins/flot/jquery.flot.resize.js"></script>
    <script src="../js/plugins/flot/jquery.flot.pie.js"></script>
    <script src="../js/plugins/flot/flot-data.js"></script>

</body>

</html>
