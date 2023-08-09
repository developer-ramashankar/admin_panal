<?php

if(isset($_POST['submit']))
{
	$id=$_POST['id'];
	$fullname=$_POST['fullname'];
	$father=$_POST['father'];
	$email=$_POST['email'];
	$mobile=$_POST['mobile'];
	$gender=$_POST['gender'];
	$subject=$_POST['subject'];
	$address=$_POST['address'];
	
	
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "myschool2";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	  die("Connection failed: " . $conn->connect_error);
	}

	$sql = "update teacher set fullname='$fullname',father='$father',email='$email',mobile='$mobile',gender='$gender',subject='$subject',address='$address' where id='$id'";

	if ($conn->query($sql) === TRUE) {
	  header('location:./teacherlist.php');
	} else {
	  echo "Error updating record: " . $conn->error;
	}
				

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Edit Teacher</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
		<?php include('./menu.php')?>
            

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                 
                    <ul class="navbar-nav ml-auto">
                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Guest</span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Edit Teacher</h1>
                    </div>
                </div>
                <!-- /.container-fluid -->
				<?php 
				if(isset($_GET['msg'])){?>
				<div class="alert alert-warning alert-dismissible fade show" role="alert">
				  <strong>Hey Admin !</strong> You Have Successfully Uploaded Student's Details.
				  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>
				<?php } ?>
				<?php
					
					$servername = "localhost";
					$username = "root";
					$password = "";
					$dbname = "myschool2";

					$id=$_GET['id'];

					// Create connection
					$conn = new mysqli($servername, $username, $password, $dbname);
					// Check connection
					if ($conn->connect_error) {
					  die("Connection failed: " . $conn->connect_error);
					}

					$sql = "SELECT * from teacher where id='$id'";
					$result = $conn->query($sql);

					if ($result->num_rows > 0) {
					  // output data of each row
					  while($row = $result->fetch_assoc()) {
					?>
			
				<form class="user" method="post" action="./editteacher.php" enctype="multipart/form-data">
					<div class="form-group row">
						<div class="col-sm-6  ">
							<input type="hidden" name="id" value="<?php echo $row['id'];?>">
							<input type="text" class="form-control form-control-user" name="fullname" value="<?php echo $row['fullname'];?>" placeholder="Full Name">
						</div>
						<div class="col-sm-6">
							<input type="text" class="form-control form-control-user" name="father" value="<?php echo $row['father'];?>" placeholder="Father Name">
						</div>
					</div>
					<div class="form-group">
						<input type="email" class="form-control form-control-user" name="email" value="<?php echo $row['email'];?>"    placeholder="Email Address">
					</div>
					<div class="form-group">
						<input type="tel" class="form-control form-control-user" name="mobile" value="<?php echo $row['mobile'];?>"
							placeholder="Mobile Number">
					</div>
					<div class="form-group">
						<input type="tel" class="form-control form-control-user" name="address" value="<?php echo $row['address'];?>"
							placeholder="Address">
					</div>
					<div class="form-group row">
						<div class="col-sm-6 mb-3 mb-sm-0">
							<select class="form-control" name="gender">
							<option><?php echo $row['gender'];?></option>
							<option>Choose Your Gender</option>
							<option>Male</option>
							<option>Female</option>
							<option>Other</option>
							</select>
						</div>
						 <div class="col-sm-6 mb-3 mb-sm-0">
							<select class="form-control" name="subject">
							<option><?php echo $row['subject'];?></option>
							<option>Choose Your Course</option>
							<option>C, C++</option>
							<option>Java</option>
							<option>Python</option>
							<option>Graphic</option>
							<option>Tally</option>
							</select>
						</div>
						
					</div>
					<button name="submit" class="btn btn-primary btn-block" type="submit">Save</button>
				</form>
						<?php
					  }
					} else {
					  echo "0 results";
					}
					$conn->close();
				?>
				
            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <?php include('./footer.php')?>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>