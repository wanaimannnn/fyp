<?php
session_start();

$link=mysqli_connect("localhost","root","opom2317") or die ("Unable to connect".

mysqli_error($link));

$q=mysqli_select_db($link,"permohonan");

$mgr = $_SESSION['id_user'];
$query="SELECT * FROM manager WHERE mgr_username='$mgr'";
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

    <style>
    @media print
    {
      .no-print
      {
          display: none !important;
          height: 0;
      }


      .no-print, .no-print *{
          display: none !important;
          height: 0;
      }
    }
    </style>
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
              <a class="navbar-brand" href="mgrhome.php">Manager Page</a>
          </div>
          <!-- Top Menu Items -->
          <ul class="nav navbar-right top-nav">
				<li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-fw fa-user"></i> <?php echo $row['name']; ?> <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                      <li>
                          <a href="displaybiodatamgr.php"><i class="fa fa-fw fa-user"></i> Profile</a>
                      </li>

                      <li>
                          <a href="mgrchgpass.php"><i class="fa fa-fw fa-gear"></i> Settings</a>
                      </li>
                      <li class="divider"></li>
                      <li>
                          <a href="../logout.php"><i class=fa fa-sign-out fa-fw"></i> Log Out</a>
                      </li>
                  </ul>
              </li>

<div class="collapse navbar-collapse navbar-ex1-collapse">
              <ul class="nav navbar-nav side-nav">
                  <li class="active">
                      <a href="mgrhome.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                  </li>


                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo1"><i class="fa fa-fw fa-file"></i> Staff Application <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo1" class="collapse">
                            <li>
                                <a href="applicationstaffstatusofficeleave.php">Office Leave  </a>
                            </li>
                            <li>
                                <a href="applicationstaffstatusleave.php">Leave </a>
                        </ul>
                    </li>

                     <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo2"><i class="fa fa-fw fa-file"></i> Supervisor Application <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo2" class="collapse">
                            <li>
                                <a href="applicationsvstatusofficeleave.php">Office Leave  </a>
                            </li>
                            <li>
                                <a href="applicationsvstatusleave.php">Leave </a>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-edit"></i> View Records <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="mgrofficeleaverecords.php">Office Leave Records </a>
                            </li>
                            <li>
                                <a href="mgrleaverecords.php">Leave Records</a>
                        </ul>
                    </li>
                    <li>
                        <a href="calendarmgr.php"><i class="fa fa-fw fa-table"></i> Calendar</a>
                    </li>
              </ul>
              <?php
            }
            ?>
          </div>

    </nav>
      <?php
      $link=mysqli_connect("localhost","root","opom2317") or die ("Unable to connect".

      mysqli_error($link));

      $q=mysqli_select_db($link,"permohonan");
      $no=$_GET['no'];
      $name = $_SESSION['id_user'];
      $query="SELECT * FROM leavereq WHERE no='$no'";
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
                            Leave
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="mgrhome.php">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-edit"></i> Leave Form
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row" id="form">
                    <div class="col-sm-6 col-sm-offset-3">

                      <form role="form" method="post" action="#.php">
                                     <input class="input-lg" type="hidden" id="no" name="no" value="<?php echo $row['no']; ?>" maxlength="100" required>

									 <center>
                <img src="../css/img/mayangsari-logo.png" width="150" height="150">
                </center>
				<br>

				<h4><center>Leave Form</center></h4>
                      <div class="table-responsive">
                         <table class="table table-user-information">
                       <div class="form-group">
                       <tr>
                       <td>
                                <label>Name</label></td>
                               <td><input class="form-control" name="name" value="<?php echo $row['name']; ?>" readonly>
                                <p class="help-block">.</p></td></tr>
                            </div>
                            <tr>
                            <td>
                            <div class="form-group">
                                <label>Department</label></td>
                                  <td><input class="form-control" name="department" value="<?php echo $row['department']; ?> " readonly></td></tr>
                            </div>
                            <tr>
                            <td>
							              <div class="form-group">
                                <label>Type of Leave</label></td>
                                <div class="checkbox" name="leavetype">
                                <td><input class="form-control" name="chkbox[]" value="<?php echo $row['leavetype'];?>"  readonly></td></tr>
                								</div>
                            </div>
                            <tr>
                            <td>
      							      <div class="form-group">
      									<label>Leave Requested Date</label></td>
      									    <div id="datetimepicker" class="input-append date">
      									               <td><input class="form-group" name="start_date" type="date" value="<?php echo $row['start_date'];?>" style="text-align:center;" readonly></input><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Until&nbsp;<br><br><input class="form-group" name="end_date" type="date" value="<?php echo $row['end_date']; ?>" style="text-align:center;" readonly></input></td></tr>
      							        </div>
                          </div>

      					           <tr>
                           <td>

							              <div class="form-group">
                                <label>Reasons</label></td>
                                <td><textarea class="form-control" rows="3" name="reason" readonly><?php echo $row['reason']; ?> </textarea></td></tr>
                            </div>
                            <input class="input-lg" type="hidden" id="status" name="status" maxlength="100" required>

															 <tr>
								 <td>
                                 <div class="form-group">
                                   <label> Supported By</label></td>
                                <td>   <input class="form-control" name="supported_by" value="<?php echo $row['name']; ?> " readonly>
                                 </td>
								 </tr>
								 </div>
								 <tr>
								 <td>
                                 <div class="form-group">
                                   <label> Validated By</label></td>
                               <td>    <input class="form-control" name="validated_by" readonly>
                                 </td>
								 </tr>
								 </div>

<script language="javascript">
function printdiv(printpage)
{
var headstr = "<html><head><title></title></head><body>";
var footstr = "</body>";
var newstr = document.all.item(printpage).innerHTML;
var oldstr = document.body.innerHTML;
document.body.innerHTML = headstr+newstr+footstr;
window.print();
document.body.innerHTML = oldstr;
return false;
}
</script>


                             <tr>
                             <td colspan="2">
                               <div class="no-print">
                           <input name="b_print" type="button" class="ipt"   onClick="printdiv('form');" value=" Print "></td></tr>
                         </div>
                        </form>
                    </div>

                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->
        <?php
                }
                ?>
    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>

</body>

</html>
