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
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" media="screen" href="http://tarruda.github.com/bootstrap-datetimepicker/assets/css/bootstrap-datetimepicker.min.css">

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script type="text/javascript" src="http://demo.itsolutionstuff.com/plugin/clockface.js"></script>
    <link rel="stylesheet" href="http://demo.itsolutionstuff.com/plugin/clockface.css">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

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
            <a class="navbar-brand" href="staffhome.html">Staff Page</a>
        </div>
        <!-- Top Menu Items -->
        <ul class="nav navbar-right top-nav">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> <b class="caret"></b></a>
                <ul class="dropdown-menu message-dropdown">
                    <li class="message-preview">
                        <a href="#">
                            <div class="media">
                                <span class="pull-left">
                                    <img class="media-object" src="http://placehold.it/50x50" alt="">
                                </span>
                                <div class="media-body">
                                    <h5 class="media-heading"><strong>ariff</strong>
                                    </h5>
                                    <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="message-preview">
                        <a href="#">
                            <div class="media">
                                <span class="pull-left">
                                    <img class="media-object" src="http://placehold.it/50x50" alt="">
                                </span>
                                <div class="media-body">
                                    <h5 class="media-heading"><strong>Ariff</strong>
                                    </h5>
                                    <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="message-preview">
                        <a href="#">
                            <div class="media">
                                <span class="pull-left">
                                    <img class="media-object" src="http://placehold.it/50x50" alt="">
                                </span>
                                <div class="media-body">
                                    <h5 class="media-heading"><strong>Ariff</strong>
                                    </h5>
                                    <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="message-footer">
                        <a href="#">Read All New Messages</a>
                    </li>
                </ul>
            </li>
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
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-fw fa-user"></i>  <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="displaybiodatastaff.php"><i class="fa fa-fw fa-user"></i> Profile</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="index.php"><i class=fa fa-sign-out fa-fw"></i> Log Out</a>
                    </li>
                </ul>
            </li>
        </ul>
        <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav side-nav">
                <li class="active">
                    <a href="staffhome.html"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                </li>
                 <li>
                    <a href="javascript:;" data-toggle="collapse" data-target="#demo1"><i class="fa fa-fw fa-edit"></i> Office Leave <i class="fa fa-fw fa-caret-down"></i></a>
                    <ul id="demo1" class="collapse">

                        <li>
                            <a href="staffforms.php"></i> Office Leave Form</a>
                        </li>

                        <li>
                            <a href="statusofficeleave.php"></i> Status</a>
                        </li>

                        <li>
                            <a href="officeleaverecords.html">View Record</a>
                        </li>
                    </ul>
                </li>

                  <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-edit"></i> Leave <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">



                            <li>
                                <a href="staffleaveform.php">Leave Form</a>
                            </li>

                            <li>
                                <a href="statusleave.php"></i> Status</a>
                            </li>

                            <li>
                                <a href="leaverecords.html"></i> View Record</a>
                            </li>

                        </ul>
                    </li>

              <!--  <li>
                    <a href="charts.html"><i class="fa fa-fw fa-bar-chart-o"></i> Charts</a>
                </li>-->

              <!--  <li>
                    <<a href="bootstrap-elements.html"><i class="fa fa-fw fa-desktop"></i> Bootstrap Elements</a>
                </li>
                <li>
                    <a href="bootstrap-grid.html"><i class="fa fa-fw fa-wrench"></i> Bootstrap Grid</a>
                </li>
                <li>
                    <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Form <i class="fa fa-fw fa-caret-down"></i></a>
                    <ul id="demo" class="collapse">
                        <li>
                            <a href="#">Office Leave</a>
                        </li>
                        <li>
                            <a href="#">Leave</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="blank-page.html"><i class="fa fa-fw fa-file"></i> Blank Page</a>
                </li>
                <li>
                    <a href="index-rtl.html"><i class="fa fa-fw fa-dashboard"></i> RTL Dashboard</a>
                </li>
            </ul>
        </div>
        < /.navbar-collapse -->
    </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Forms
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-edit"></i> Office Leave
                            </li>
                        </ol>
                    </div>
                </div>

                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-6">

                        <form role="form" method="post" action="officeleaveform.php">

                          <input class="input-lg" type="hidden" id="no" name="no" maxlength="100" required>
                          <div class="form-group">
                        <label>Name </Label>
                      <input class="form-control" name="name" value="<?php echo $row['name']; ?> " readonly>
                          </div>

                        <div class="form-group">
                                <label>Department</label>
                              <input class="form-control" name="department" value="<?php echo $row['department']; ?> " readonly>
                            </div>

                            <div class="form-group">
                                <label>Shift</label>
                                <div class="checkbox" name="shift" >
                                    <label>
                                        <input type="checkbox" name="chkbox[]" value="Normal">Normal
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="chkbox[]" value="Morning">Morning
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="chkbox[]" value="Afternoon">Afternoon
                                    </label>
                                </div>
                                 <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="chkbox[]" value="Evening">Evening
                                    </label>
                                </div>
                            </div>

                           <div class="form-group">
                                <label>Date</label>
                                <br>
                            <input class="form-group" id="date" name="date" type="date" required>
                            </div>

                             <div class="form-group">
                                <label>Purpose</label>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="purpose" id="optionsRadios1" value="Medical Checkup" checked> Medical Checkup
                                    </label>
                                </div>

                                <div class="radio">
                                    <label>
                                        <input type="radio" name="purpose" id="optionsRadios2" value="Others">Others, state your reason below
                                    </label>
                                    <br><br>
                                    <textarea class="form-control" rows="3" name="reason"></textarea>
                                </div>
                            </div>

                          <!-- <div class="form-group">
                                <label>Reason</label>
                                <textarea class="form-control" rows="3" name="reason"></textarea>
                            </div> -->

                            <div class="form-group">
                            <div> <label>Select Time Out:</label>
                                <input data-format="hh:mm A" class="form-control sel-time-am" type="text" name="timeout">
                            </div>

                            <script type="text/javascript">
                                $('.sel-time').clockface({format: 'HH:mm'});
                                $('.sel-time-am').clockface();
                            </script>
                            </div>

                             <div class="form-group">
                            <div> <label>Select Time In:</label>
                                <input data-format="hh:mm A" class="form-control sel-time-am" type="text" name="timein">
                            </div>

                            <script type="text/javascript">
                                $('.sel-time').clockface({format: 'HH:mm'});
                                $('.sel-time-am').clockface();
                            </script>
                          </div>
                            <input class="input-lg" type="hidden" id="status" name="status" maxlength="100" required>

                        <!--     <div class="form-group">
                                <label>Document</label>
                                <input type="file">
                            </div> -->

                            <button type="submit" class="btn btn-default">Submit Button</button>
                            <button type="reset" class="btn btn-default">Reset Button</button>
                        </form>
                    </div>
                </div>
                <?php
                        }
                        ?>
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
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
