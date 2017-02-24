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
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> <b class="caret"></b></a>
                  <ul class="dropdown-menu alert-dropdown">
                      <li>
                          <a href="#">Alert Name <span class="label label-default">Alert Badge</span></a>
                      </li>
                      <li>
                          <a href="#">Alert Name <span class="label label-primary">Alert Badge</span></a>
                      </li>
                      <li>
                          <a href="#">Alert Name <span class="label label-success">Alert Badge</span></a>
                      </li>
                      <li>
                          <a href="#">Alert Name <span class="label label-info">Alert Badge</span></a>
                      </li>
                      <li>
                          <a href="#">Alert Name <span class="label label-warning">Alert Badge</span></a>
                      </li>
                      <li>
                          <a href="#">Alert Name <span class="label label-danger">Alert Badge</span></a>
                      </li>
                      <li class="divider"></li>
                      <li>
                          <a href="#">View All</a>
                      </li>
                  </ul>
              </li>
              <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-fw fa-user"></i> <?php echo $row['name']; ?> <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                      <li>
                          <a href="displaybiodata.php"><i class="fa fa-fw fa-user"></i> Profile</a>
                      </li>
                      <li>
                          <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
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
                <!--  <li>
                      <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-users"></i> Managements <i class="fa fa-fw fa-caret-down"></i></a>
                      <ul id="demo" class="collapse">
                          <li>
                              <a href="#">Manager Management</a>
                          </li>
                          <li>
                              <a href="#">Supervisor Management</a>
                          </li>
                          <li>
                              <a href="#">Staff Management</a>
                          </li>
                      </ul>
                  </li> -->
                  <li>
                      <a href="javascript:;" data-toggle="collapse" data-target="#demo1"><i class="fa fa-fw fa-user"></i> User Registration <i class="fa fa-fw fa-caret-down"></i></a>
                      <ul id="demo1" class="collapse">

                          <li>
                              <a href="#"> Manager Registration</a>
                          </li>

                          <li>
                              <a href="svsignup.php"> Supervisor Registration</a>
                          </li>

                          <li>
                              <a href="staffsignup.php"> Staff Registration</a>
                          </li>
                      </ul>
                  </li>
              <!--    <li>
                      <a href="signupform.html"><i class="fa fa-fw fa-user"></i> User Registration</a>
                    </li> -->
                  <li>
                      <a href="#"><i class="fa fa-fw fa-edit"></i> Manager Management</a>
                  </li>
                  <li>
                      <a href="#"><i class="fa fa-fw fa-edit"></i> Supervisor Management</a>
                  </li>
                  <li>
                      <a href="#"><i class="fa fa-fw fa-edit"></i> Staff Management</a>
                  </li>
                  <li>
                      <a href="calendaradmin.php"><i class="fa fa-fw fa-calendar"></i> Calendar</a>
                  </li>
                <!--    <li>
                      <a href="bootstrap-grid.html"><i class="fa fa-fw fa-wrench"></i> Bootstrap Grid</a>
                  </li>

                  <li>
                      <a href="blank-page.html"><i class="fa fa-fw fa-file"></i> Blank Page</a>
                  </li>
                  <li>
                      <a href="index-rtl.html"><i class="fa fa-fw fa-dashboard"></i> RTL Dashboard</a>
                  </li> -->
              </ul>
          </div>
          <!-- /.navbar-collapse -->
      </nav>
      <?php
         $link=mysqli_connect("localhost","root","opom2317") or die ("Unable to connect".
         mysqli_error($link));
         $q=mysqli_select_db($link,"permohonan");
         $no=$_GET['no'];
         $name = $_SESSION['id_user'];
         $query="SELECT *
                 FROM manager WHERE no='$no'
                 UNION ALL
                 SELECT *
                 FROM supervisor WHERE no='$no'
                 UNION ALL
                 SELECT *
                 FROM staff WHERE no='$no'";
         $result = mysqli_query($link,$query) or die('Query failed. ' . mysqli_error($link));
         $q=mysqli_query($link,$query);
         while( $row = mysqli_fetch_assoc($result) )
         {
       ?>
      <div id="page-wrapper">

         <div class="container-fluid">

             <!-- Page Heading -->
             <div class="row">
                 <div class="col-lg-12">
                     <h1 class="page-header">
                         Update Biodata
                     </h1>
                     <ol class="breadcrumb">
                         <li>
                             <i class="fa fa-dashboard"></i>  <a href="adminhome.php">Dashboard</a>
                         </li>
                         <li class="active">
                             <i class="fa fa-edit"></i> Update Biodata
                         </li>
                     </ol>
                 </div>
             </div>

             <!-- /.row -->

             <div class="row">
                 <div class="col-sm-6 col-sm-offset-3">

                     <form role="form" method="post" action="updatebio.php">
                       <br>
                      <input class="input-lg" type="hidden" id="no" name="no" value="<?php echo $row['no']; ?>" maxlength="100" required>

                       <h2 align="center">User Biodata</h2>
                       <div class="table-responsive">
                         <table class="table table-user-information">
                       <div class="form-group">
                           <tr>
                             <td>
                     <label> Name </Label></td>
                     <td><input class="form-control" name="name" value="<?php echo $row['name']; ?>" readonly></td>
                   </tr>
                   </div>
                   <tr>
                     <td>
                         <div class="form-group">
                             <label> Number IC </Label></td>
                             <td><input class="form-control" name="ic" value="<?php echo $row['ic']; ?>" readonly></td>
                           </tr>

                         </div>

                    <tr>
                      <td>
                          <div class="form-group">
                             <label>Address</label></td>
                          <td>   <textarea class="form-control" rows="3" name="address"><?php echo $row['address']; ?></textarea></td>
                         </div>
                       </tr>
                       <tr>
                         <td>
                         <div class="form-group">
                             <label> Phone Number </Label></td>
                          <td>   <input class="form-control" name="mobileno" value="<?php echo $row['mobileno']; ?>"></td>

                         </div>
                       </tr>
                       <tr>
                         <td>
                         <div class="form-group">
                             <label> Position </Label></td>
                            <td> <input class="form-control" name="position" value="<?php echo $row['position']; ?>"> </td>

                         </div>
                       </tr>
                       <tr>
                         <td>
                     <div class="form-group">
                             <label>Department</label></td>
                            <td> <select class="form-control" name="department" >
                               <option>--Please Choose One--</option>
                               <option value="Admin">Admin</option>
                               <option value="Human Resource">Human Resources</option>
                               <option value="Kitchen">Kitchen</option>
                               <option value="Front Office">Front Service Office</option>
                               <option value="Account">Account</option>
                               <option value="Housekeeping">House Keeping</option>
                               <option value="Landscape/Maintenance">Landscape/Maintenance</option>
                             </select></td>
                         </div>
                       </tr>
                       <tr>
                         <td>
                           <div class="form-group">
                                <label>Gender</label><br></td>
                              <td> <input class="form-control" name="gender" value="<?php echo $row['gender']; ?>" readonly> </td>
                            </div>
                          </tr>
                          <tr>
                            <td>
                               <div class="form-group">
                                <label>Citizen Status</label><br></td>
                                 <td><input class="form-control" name="citizenstatus" value="<?php echo $row['citizenstatus']; ?>"></td>
                            </div>
                          </tr>
                          <tr>
                            <td>
                            <div class="form-group">
                                <label>Race</label><br></td>
                             <td><input class="form-control" name="race" value="<?php echo $row['race']; ?>"></td>
                            </div>
                          </tr>
                            <tr>
                              <td>
                            <div class="form-group">
                            <label> Email </Label></td>
                            <td><input class="form-control" name="email"  <input class="form-control" name="position" value="<?php echo $row['email']; ?>"></td>
                            </div>
                          </tr>


                            <tr>
                              <td>
                            <div class="form-group">
                                <label>Religion</label><br></td>
                                <td><label class="radio-inline">
                                    <input type="radio" name="religion" id="optionsRadiosInline1" value="Islam" checked>Islam
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="religion" id="optionsRadiosInline2" value="Christian">Christian
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="religion" id="optionsRadiosInline3" value="Hindu">Hindu
                                </label>
                                 <label class="radio-inline">
                                    <input type="radio" name="religion" id="optionsRadiosInline3" value="Others">Others
                                </label></td>

                            </div>
                          </tr>
                          <tr>
                            <td>
                             <div class="form-group">
                                <label>Marital Status</label><br> </td>
                                <td><label class="radio-inline">
                                    <input type="radio" name="maritalstatus" id="optionsRadiosInline1" value="Married" checked>Married
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="maritalstatus" id="optionsRadiosInline2" value="Single">Single
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="maritalstatus" id="optionsRadiosInline2" value="Divorced">Divorced
                                </label></td>
                            </div>
                          </tr>
                            <?php
                            }
                            ?>
                            <tr>
                              <td>
                         <button type="submit" class="btn btn-default">Update</button> &nbsp;&nbsp;
                         <button type="reset" class="btn btn-default">Reset</button>
                       </label><td></tr>
                     </form>
                   </table>
                 </div>
                     <br>

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
