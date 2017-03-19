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

    <!-- Custom Fonts -->
    <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
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
                <a class="navbar-brand" href="svhome.php">Supervisor Page</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-fw fa-user"></i> <?php echo $row['name']; ?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="svdisplaybiodata.php"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li>
                            <a href="svchgpass.php"><i class="fa fa-fw fa-gear"></i> Settings</a>
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
                      <a href="svhome.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                  </li>

                 <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-edit"></i> Office Leave <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="svofficeleave.php">Office Leave Form</a>
                            </li>
                            <li>
                                <a href="svstatusofficeleave.php">Status </a>
                            </li>
							<li>
								<a href="svofficeleaverecords.php">View Records</a>
						</ul>
					</li>
					<li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo1"><i class="fa fa-fw fa-edit"></i> Leave <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo1" class="collapse">
                            <li>
                                <a href="svleave.php">Leave</a>
                            </li>
                            <li>
                                <a href="svstatusleave.php">Status </a>
                            </li>
							<li>
								<a href="svleaverecords.php">View Records</a>
						</ul>
					</li>
						<li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo2"><i class="fa fa-fw fa-edit"></i> Application <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo2" class="collapse">
                            <li>
                                <a href="svappofficeleave.php">Validate Office Leave Form</a>
                            </li>
                            <li>
                                <a href="svappleave.php">Validate Leave Form </a>
                            </li>
						</ul>
					</li>

                          <li>
                                <a href="svcalendar.php"><i class="fa fa-fw fa-calendar"></i> Calendar</a>
                            </li>

                    </li>
              </ul>


    </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Office Leave
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="svhome.php">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-edit"></i> Office Leave Form
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
    $query="SELECT * FROM request WHERE no='$no'";
    $result = mysqli_query($link,$query) or die('Query failed. ' . mysqli_error($link));
    $q=mysqli_query($link,$query);
    while( $row = mysqli_fetch_assoc($result) )
    {

  ?>
                <div class="row">
                    <div class="col-lg-6 col-sm-offset-3">

                        <form role="form" method="post" action="svofficeleaveupdate.php">

                          <input class="input-lg" type="hidden" id="no" name="no" value="<?php echo $row['no']; ?>" maxlength="100" required>
                                                 <div class="table-responsive">
                         <table class="table table-user-information">
						 <tr>
						 <td>
						  <div class="form-group">
                        <label>Name </Label></td>
                      <td><input class="form-control" name="name" value="<?php echo $row['name']; ?>" readonly>
                        </td>
						</tr>
						 </div>
						 <tr>
						 <td>
                          <div class="form-group">
                                  <label>Department</label></td>
                                <td><input class="form-control" name="department" value="<?php echo $row['department']; ?> " readonly>
                        </td>
						</tr>
							 </div>
						 <tr>
						 <td>
                            <div class="form-group">
                                <label>Shift</label></td>
                                <div class="checkbox" name="shift" >
                                  <td>  <input class="form-control" name="chkbox[]" value="<?php echo $row['shift'];?>"  readonly>
                                </div>
						</td>
						</tr>
                            </div>
						 <tr>
						 <td>
                           <div class="form-group">
                                <label>Date</label></td>
                                <br>
                            <td>    <input class="form-group" id="date" name="date" value="<?php echo $row['datee']; ?> " style="text-align:center;"readonly>
                        </td>
						</tr>
                            </div>
						 <tr>
						 <td>
                             <div class="form-group">
                                <label>Purpose</label></td>
                               <td> <div class="radio">
                                    <label>
                                        <input type="radio" name="purpose" id="optionsRadios1" value="Medical Checkup" checked> Medical Checkup
                                    </label>

                                </div>

                                <div class="radio">
                                    <label>
                                        <input type="radio" name="purpose" id="optionsRadios2" value="Others">Others, state your reason below
                                    </label>
                                    <br><br>
                                    <textarea class="form-control" rows="3" name="reason"><?php echo $row['reason'];?></textarea>
                                </div>
							 </td>
						</tr>
                            </div>

                          <!-- <div class="form-group">
                                <label>Reason</label>
                                <textarea class="form-control" rows="3" name="reason"></textarea>
                            </div> -->
						 <tr>
						 <td>
                            <div class="form-group">
                            <div> <label>Select Time Out:</label></td>
                               <td> <input data-format="hh:mm A" class="form-control sel-time-am" type="text" name="timeout" value="<?php echo $row['timeout']; ?> ">
							</td>
							</tr>
                            </div>

                            <script type="text/javascript">
                                $('.sel-time').clockface({format: 'HH:mm'});
                                $('.sel-time-am').clockface();
                            </script>
                            </div>
						 <tr>
						 <td>
                             <div class="form-group">
                            <div> <label>Select Time In:</label></td>
                            <td>    <input data-format="hh:mm A" class="form-control sel-time-am" type="text" name="timein" value="<?php echo $row['timein']; ?> ">
                            </div>
                        </td>
						</tr>
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
						 <tr>
						 	<td colspan="2">
                            <button type="submit" class="btn btn-default">Update</button>
                            <button type="reset" class="btn btn-default">Reset</button>
                        </tr>
						</td>
						</form>
                    </div>
                </div>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
            <?php
                    }
                    ?>
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
