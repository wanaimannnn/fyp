<!DOCTYPE html>
<?php
session_start();

$link=mysqli_connect("localhost","root","opom2317") or die ("Unable to connect".

mysqli_error($link));

$q=mysqli_select_db($link,"permohonan");

$staff = $_SESSION['id_user'];
$query="SELECT * FROM staff WHERE staff_username='$staff'";
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
                  <a class="navbar-brand" href="staffhome.php">Staff Page</a>
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
                              <a href="displaybiodatastaff.php"><i class="fa fa-fw fa-user"></i> Profile</a>
                          </li>
                          <li>
                              <a href="staffchgpass.php"><i class="fa fa-fw fa-gear"></i> Settings</a>
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
                        <a href="staffhome.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>

                                   <li>
                      <a href="javascript:;" data-toggle="collapse" data-target="#demo1"><i class="fa fa-fw fa-edit"></i> Office Leave <i class="fa fa-fw fa-caret-down"></i></a>
                      <ul id="demo1" class="collapse">

                          <li>
                              <a href="staffofficeleave.php"></i> Office Leave Form</a>
                          </li>

                          <li>
                              <a href="statusofficeleave.php"></i> Status</a>
                          </li>

                          <li>
                              <a href="officeleaverecords.php">View Record</a>
                          </li>
                      </ul>
                  </li>

                   <li>
                          <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-edit"></i> Leave <i class="fa fa-fw fa-caret-down"></i></a>
                          <ul id="demo" class="collapse">



                              <li>
                                  <a href="staffleave.php">Leave Form</a>
                              </li>

                              <li>
                                  <a href="statusleave.php"></i> Status</a>
                              </li>

                              <li>
                                  <a href="leaverecords.php"></i> View Record</a>
                              </li>

                          </ul>

                            <li>
                                  <a href="calendarstaff.php"><i class="fa fa-fw fa-calendar"></i> Calendar</a>
                              </li>

                      </li>


                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>
      <?php

      $link=mysqli_connect("localhost","root","opom2317") or die ("Unable to connect".

      mysqli_error($link));

      $q=mysqli_select_db($link,"permohonan");
      $staff = $_SESSION['id_user'];
      $name = $_SESSION['user_name'];
      $query="SELECT * FROM leavereq WHERE name = '$name' AND status = true";
      $result = mysqli_query($link,$query) or die('Query failed. ' . mysqli_error($link));
      $q=mysqli_query($link,$query);
      $num_rows= mysqli_num_rows($q);

      ?>
      <div id="page-wrapper">

          <div class="container-fluid">

              <!-- Page Heading -->
              <div class="row">
                  <div class="col-lg-12">
                      <h1 class="page-header">
                          View Records
                      </h1>
                      <ol class="breadcrumb">
                          <li>
                              <i class="fa fa-dashboard"></i>  <a href="staffhome.php">Dashboard</a>
                          </li>
                          <li class="active">
                              <i class="fa fa-table"></i> Leave Records
                          </li>
                      </ol>
                  </div>
              </div>
              <!-- /.row -->

               <div class="row">
                  <!--<div class="col-lg-6">-->

                      <div class="table-responsive">
                          <table class="table table-bordered table-hover">
                              <thead>
                                  <tr>
                                      <th><center>Name</center></th>
                                      <th><center>Department</center></th>
                                      <th><center>Type of Leave</center></th>
                                      <th><center>Reason</center></th>
                                      <th><center>Start Date</center></th>
                                      <th><center>End Date</center></th>
                                      <th><center>Status</center></th>
                                      <th><center>Supported By</center></th>
                                      <th><center>Validated By</center></th>
                                      <th><center>Created Date</center></th>

                                  </tr>
                                </thead>
                                <tbody>
                                  <?php

                                  while($row=mysqli_fetch_array($result))
                                  {
                                  ?>
                                  <tr align="center">
                                      <td><?php echo $row['name'];?></td>
                                      <td><?php echo $row['department']?></td>
                                      <td><?php echo $row['leavetype'];?></td>
                                      <td><?php echo $row['reason'];?></td>
                                      <td><?php echo $row['start_date'];?></td>
                                      <td><?php echo $row['end_date'];?></td>
                                      <td><?php echo $row['status'];?></td>
                                      <td><?php echo $row['supported_by'];?></td>
                                      <td><?php echo $row['validated_by'];?></td>
                                      <td><?php echo $row['created'];?></td>
                                  </tr>
                                  <?php
                                  }
                                  mysqli_close($link);
                                  ?>
                                </tbody>
                          </table>
                      </div>

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

</body>

</html>
