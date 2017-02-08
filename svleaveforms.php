<?php
session_start();

$link=mysqli_connect("localhost","root","opom2317") or die ("Unable to connect".

mysqli_error($link));

$q=mysqli_select_db($link,"permohonan");

$sv = $_SESSION['id_user'];
$query="SELECT * FROM supervisor WHERE sv_username='$sv'";
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

    <title>OFFICCE MANAGEMENT SYSTEM</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" media="screen"
     href="http://tarruda.github.com/bootstrap-datetimepicker/assets/css/bootstrap-datetimepicker.min.css">
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
              <a class="navbar-brand" href="svhome.php">Supervisor Page</a>
          </div>
          <!-- Top Menu Items -->
          <ul class="nav navbar-right top-nav">
             <!-- <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> <b class="caret"></b></a>
                  <ul class="dropdown-menu message-dropdown">
                      <li class="message-preview">
                          <a href="#">
                              <div class="media">
                                  <span class="pull-left">
                                      <img class="media-object" src="http://placehold.it/50x50" alt="">
                                  </span>
                                  <div class="media-body">
                                      <h5 class="media-heading"><strong>John Smith</strong>
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
                                      <h5 class="media-heading"><strong>John Smith</strong>
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
                                      <h5 class="media-heading"><strong>John Smith</strong>
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
              </li>-->
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
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa- fa-user"></i> <?php echo $row['name']; ?> <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                      <li>
                          <a href="displaybiodatasv.php"><i class="fa fa-fw fa-user"></i> Profile</a>
                      </li>
                      <li>
                          <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                      </li>
                      <li>
                          <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                      </li>
                      <li class="divider"></li>
                      <li>
                          <a href="logout.php"><i class=fa fa-sign-out fa-fw"></i> Log Out</a>
                      </li>
                  </ul>
              </li>
          </ul>
          <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
          <div class="collapse navbar-collapse navbar-ex1-collapse">
              <ul class="nav navbar-nav side-nav">
                  <li class="active">
                      <a href=svhome.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                  </li>

                                  <li>
                    <a href="javascript:;" data-toggle="collapse" data-target="#demo1"><i class="fa fa-fw fa-edit"></i> Office Leave <i class="fa fa-fw fa-caret-down"></i></a>
                    <ul id="demo1" class="collapse">

                        <li>
                            <a href="svleaveoffive.php"></i> Office Leave Form</a>
                        </li>

                        <li>
                            <a href="svstatusofficeleave.php"></i> Status</a>
                        </li>

                        <li>
                            <a href="svofficeleaverecords.php">View Record</a>
                        </li>
                    </ul>
                </li>

                <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-edit"></i> Leave <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">



                            <li>
                                <a href="svleaveforms.php">Leave Form</a>
                            </li>

                            <li>
                                <a href="svstatusleave.php"></i> Status</a>
                            </li>

                            <li>
                                <a href="svleaverecords.php"></i> View Record</a>
                            </li>

                        </ul>
                    </li>
					<li>
							<a href="calendarsv.php"><i class="fa fa-fw fa-calendar"></i> Calendar</a>
					</li>
      </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Leave
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="svhome.php">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-edit"></i> Leave Form
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-6">

                      <form role="form" method="post" action="svleaveform.php">
                              <input class="input-lg" type="hidden" id="no" name="no" maxlength="100" required>
                            <div class="form-group">
                                <label>Name</label>
                                <input class="form-control" name="name" value="<?php echo $row['name']; ?>" readonly>
                                <p class="help-block">.</p>
                            </div>

                            <div class="form-group">
                                <label>Department</label>
                                <select class="form-control" name="department" required>
                                    <option></option>
                                    <option value="Admin">Admin</option>
                                    <option value="Human Resource">Human Resources</option>
                                    <option value="Kitchen">Kitchen</option>
                                    <option value="Front Office">Front Service Office</option>
                                    <option value="Account">Account</option>
                                    <option value="Housekeeping">House Keeping</option>
                                    <option value="Landscape/Maintenance">Landscape/Maintenance</option>
                                </select>
                            </div>

							              <div class="form-group">
                                <label>Type of Leave</label>
                                <div class="checkbox" name="leavetype">
                                    <label>
                                        <input type="checkbox" name="chkbox[]" value="Annual Leave">Annual Leave
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="chkbox[]" value="Unpaid Leave">Unpaid Leave
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="chkbox[]" value="Maternity Leave">Maternity Leave
                                    </label>
                                </div>
                								<div class="checkbox">
                									<label>
                										<input type="checkbox" name="chkbox[]" value="Compassionate Leave">Compassionate Leave
                									</label>
                								</div>
                								<div class="checkbox">
                									<label>
                										<input type="checkbox" name="chkbox[]" value="Emergency Leave">Emergency Leave
                									</label>
                								</div>
                								<div class="checkbox">
                									<label>
                										<input type="checkbox" name="chkbox[]" value="Hospital Leave">Hospital Leave
                									</label>
                								</div>
                            </div>

      							      <div class="form-group">
      									<label>Leave Requested to Commence On</label>
      									    <div id="datetimepicker" class="input-append date">
      									               <input class="form-group" name="start_date" type="date"></input>&nbsp;Until&nbsp;<input class="form-group" name="end_date" type="date"></input>
      							        </div>
                          </div>

      							<div class="form-group">
      							<label> Will Resume Duty On:</label>
      							</div>

							              <div class="form-group">
                                <label>Reasons</label>
                                <textarea class="form-control" rows="3" name="reason"></textarea>
                            </div>
                            <input class="input-lg" type="hidden" id="status" name="status" maxlength="100" required>

					              <!--<div class="form-group">
                                <label>File input</label>
                                <input type="file">
                            </div> -->

                            <button type="submit" class="btn btn-default">Submit Button</button>
                            <button type="reset" class="btn btn-default">Reset Button</button>

                        </form>
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
