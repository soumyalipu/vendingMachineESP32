<?php
    include("connection.php");
	include("function.php");
	
	if(!isset($_SESSION['user']))
	{
	    header("Location:login.php");
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <?php headContent("EntityMechinedetailsCreate");?>
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
	  
	   
<!-- Start: Edit Form HTML-->
<div class="container">
	<h3 class="w3-padding w3-card-2 w3-blue">Create new Machine</h3>
	<div class="w3-card-2 w3-padding " style="margin-top:-12px;overflow-x:scroll" >
		<form method="POST" enctype="multipart/form-data" >

			<!-- Start: Input Field For id-->
			<div class="form-group col-md-12">
				<label><i class="null"></i> Id</label>
				<input type="number" placeholder="Please enter id ..." class="w3-input form-control" name="id" id="id"  />
			</div>
			<!-- End: Input Field For id-->


			<!-- Start: Input Field For mechineName-->
			<div class="form-group col-md-12">
				<label><i class="null"></i> Machine Name</label>
				<input type="text" placeholder="Please enter Machine Name ..." class="w3-input form-control" name="mechineName" id="mechineName"  />
			</div>
			<!-- End: Input Field For mechineName-->


			<!-- Start: Input Field For mecineDetails-->
			<div class="form-group col-md-12">
				<label><i class="null"></i>Machine Details</label>
				<input type="text" placeholder="Please enter Machine Details ..." class="w3-input form-control" name="mecineDetails" id="mecineDetails"  />
			</div>
			<!-- End: Input Field For mecineDetails-->


			<!-- Start: Submit Button-->
			<div class="col-md-12">
				<div class="form-group">
					<button class="w3-btn w3-small w3-round w3-blue" name="submitForm" >Submit</button>
					<a href="EntityMachinedetailsList.php" class="w3-btn w3-small w3-round w3-red" >Back</a>
				</div>
			</div>
			<!-- End: Submit Button-->

		</form>
	</div>
</div>
<!-- End: Create Form HTML-->

<!-- Start: Create Form PHP-->
<?php
	if(isset($_POST["submitForm"]))
	{
	     //echo '<script>alert("Unable to create Machinedetails ...");window.location=window.location.href;</script>';

		require_once("EntityMachinedetails.php");
		require_once("ModelMachinedetails.php");
		require_once("connection.php");
		global $dbc;
		$mechineDetails = new EntityMachinedetails();
		$mechineDetailsModel = new ModelMachinedetails($dbc);

		$mechineDetails->id = $_POST["id"];
		$mechineDetails->MachineName = $_POST["mechineName"];
		$mechineDetails->MachineDetails = $_POST["mecineDetails"];

		if($mechineDetailsModel -> InsertMachinedetails($mechineDetails))
		{
			 echo '<script>alert("Machinedetails created successfully...");window.location=window.location.href;</script>';
		}
		else
		{
			 echo '<script>alert("Unable to create Machinedetails ...");window.location=window.location.href;</script>';
		}
	}
?>
<!-- End: Create Form PHP-->

	   
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
