<?php 
	session_start();
	if(!isset($_SESSION['email']))
	{
		header('location:./login.php?msg=Please Log In First');
	}
?>


<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
	<div class="sidebar-brand-icon rotate-n-15">
		<i class="fas fa-laugh-wink"></i>
	</div>
	<div class="sidebar-brand-text mx-3">Admin</div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item active">
	<a class="nav-link" href="index.php">
		<i class="fas fa-fw fa-tachometer-alt"></i>
		<span>Dashboard</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
	Adding Zone
</div>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
	<a class="nav-link" href="addstudent.php">
		<i class="fas fa-fw fa-tachometer-alt"></i>
		<span>Add Student</span>
	</a>
	<a class="nav-link" href="addteacher.php">
		<i class="fas fa-fw fa-tachometer-alt"></i>
		<span>Add Teacher</span>
	</a>
	<a class="nav-link" href="addcourse.php">
		<i class="fas fa-fw fa-tachometer-alt"></i>
		<span>Add Course</span>
	</a>
</li>
  
<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
	List Zone
</div>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
	<a class="nav-link" href="studentlist.php">
		<i class="fas fa-fw fa-tachometer-alt"></i>
		<span>Student List</span>
	</a>
	<a class="nav-link" href="teacherlist.php">
		<i class="fas fa-fw fa-tachometer-alt"></i>
		<span>Teacher List</span>
	</a>
	<a class="nav-link" href="courselist.php">
		<i class="fas fa-fw fa-tachometer-alt"></i>
		<span>Course List</span>
	</a>
</li>
 

<!-- Divider -->
<hr class="sidebar-divider">
 
<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
	<button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>