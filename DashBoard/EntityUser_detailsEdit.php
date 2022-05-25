<?php
    include("connection.php");
	include("function.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <?php headContent("EntityUser_detailsEdit");?>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
	<?php navBar(); ?>
  <!-- /.navbar -->

  <!-- Start: Main Sidebar Container -->
	<?php sideBar(); ?>
  <!-- End: Main Sidebar Container -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
	  
	   
<!-- Start: Retrive Data -->
<?php

	require_once("EntityUser_details.php");
	require_once("ModelUser_details.php");
	require_once("connection.php");
	global $dbc;
	$user_details = new EntityUser_details();
	$user_detailsModel = new ModelUser_details($dbc);

	$user_details = $user_detailsModel -> GetUser_detailsById($_GET["id"])[0];
?>
<!-- End: Retrive Data-->

<!-- Start: Edit Form HTML-->
<div class="container">
	<h3 class="w3-padding w3-card-2 w3-blue">Edit User_details</h3>
	<div class="w3-card-2 w3-padding " style="margin-top:-12px;overflow-x:scroll" >
		<form method="POST" enctype="multipart/form-data" >

			<!-- Start: Input Field For id-->
			<div class="form-group col-md-12">
				<label><i class="null"></i> Id</label>
				<input type="number" placeholder="Please enter id ..." class="w3-input form-control" name="id" id="id"  value="<?php echo $user_details->id; ?>" />
			</div>
			<!-- End: Input Field For id-->


			<!-- Start: Input Field For rfid-->
			<div class="form-group col-md-12">
				<label><i class="null"></i> Rfid</label>
				<input type="text" placeholder="Please enter rfid ..." class="w3-input form-control" name="rfid" id="rfid"  value="<?php echo $user_details->rfid; ?>" />
			</div>
			<!-- End: Input Field For rfid-->


			<!-- Start: Input Field For balance-->
			<div class="form-group col-md-12">
				<label><i class="null"></i> Balance</label>
				<input type="text" placeholder="Please enter balance ..." class="w3-input form-control" name="balance" id="balance"  value="<?php echo $user_details->balance; ?>" />
			</div>
			<!-- End: Input Field For balance-->


			<!-- Start: Input Field For name-->
			<div class="form-group col-md-12">
				<label><i class="null"></i> Name</label>
				<input type="text" placeholder="Please enter name ..." class="w3-input form-control" name="name" id="name"  value="<?php echo $user_details->name; ?>" />
			</div>
			<!-- End: Input Field For name-->


			<!-- Start: Input Field For mobile-->
			<div class="form-group col-md-12">
				<label><i class="null"></i> Mobile</label>
				<input type="text" placeholder="Please enter mobile ..." class="w3-input form-control" name="mobile" id="mobile"  value="<?php echo $user_details->mobile; ?>" />
			</div>
			<!-- End: Input Field For mobile-->


			<!-- Start: Input Field For email-->
			<div class="form-group col-md-12">
				<label><i class="null"></i> Email</label>
				<input type="text" placeholder="Please enter email ..." class="w3-input form-control" name="email" id="email"  value="<?php echo $user_details->email; ?>" />
			</div>
			<!-- End: Input Field For email-->


			<!-- Start: Input Field For password-->
			<div class="form-group col-md-12">
				<label><i class="null"></i> Password</label>
				<input type="text" placeholder="Please enter password ..." class="w3-input form-control" name="password" id="password"  value="<?php echo $user_details->password; ?>" />
			</div>
			<!-- End: Input Field For password-->


			<!-- Start: Submit Button-->
			<div class="col-md-12">
				<div class="form-group">
					<button class="w3-btn w3-small w3-round w3-blue" name="submitForm" >Submit</button>
					<a href="EntityUser_detailsList.php" class="w3-btn w3-small w3-round w3-red" >Back</a>
				</div>
			</div>
			<!-- End: Submit Button-->

		</form>
	</div>
</div>
<!-- End: Edit Form HTML-->

<!-- Start: Edit Form PHP-->
<?php
	if(isset($_POST["submitForm"]))
	{

		$user_details->id = $_POST["id"];
		$user_details->rfid = $_POST["rfid"];
		$user_details->balance = $_POST["balance"];
		$user_details->name = $_POST["name"];
		$user_details->mobile = $_POST["mobile"];
		$user_details->email = $_POST["email"];
		$user_details->password = $_POST["password"];

		if($user_detailsModel -> UpdateUser_details($user_details))
		{
			 echo '<script>alert("User_details updated successfully...");window.location=window.location.href;</script>';
		}
		else
		{
			 echo '<script>alert("Unable to updated User_details ...");window.location=window.location.href;</script>';
		}
	}
?>
<!-- End: Edit Form PHP-->

	   
	  </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
  <footer class="main-footer">
    <strong>Copyright &copy; 2021 SSSTech</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.1.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

</div>
<!-- ./wrapper -->

   <?php scriptTags() ?>
</body>
</html>
