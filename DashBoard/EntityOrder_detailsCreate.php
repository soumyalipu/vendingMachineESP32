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
  <?php headContent("EntityOrder_detailsCreate");?>
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
	<h3 class="w3-padding w3-card-2 w3-blue">Create Order_details</h3>
	<div class="w3-card-2 w3-padding " style="margin-top:-12px;overflow-x:scroll" >
		<form method="POST" enctype="multipart/form-data" >

			<!-- Start: Input Field For id-->
			<div class="form-group col-md-12">
				<label><i class="null"></i> Id</label>
				<input type="number" placeholder="Please enter id ..." class="w3-input form-control" name="id" id="id"  />
			</div>
			<!-- End: Input Field For id-->


			<!-- Start: Input Field For rfid-->
			<div class="form-group col-md-12">
				<label><i class="null"></i> Rfid</label>
				<input type="text" placeholder="Please enter rfid ..." class="w3-input form-control" name="rfid" id="rfid"  />
			</div>
			<!-- End: Input Field For rfid-->


			<!-- Start: Input Field For mechineDetails-->
			<div class="form-group col-md-12">
				<label><i class="null"></i> Machine Details</label>
				<input type="text" placeholder="Please enter Machine Details ..." class="w3-input form-control" name="mechineDetails" id="mechineDetails"  />
			</div>
			<!-- End: Input Field For mechineDetails-->


			<!-- Start: Input Field For item-->
			<div class="form-group col-md-12">
				<label><i class="null"></i> Item</label>
				<input type="text" placeholder="Please enter item ..." class="w3-input form-control" name="item" id="item"  />
			</div>
			<!-- End: Input Field For item-->


			<!-- Start: Input Field For date-->
			<div class="form-group col-md-12">
				<label><i class="null"></i> Date</label>
				<input type="date" placeholder="Please enter date ..." class="w3-input form-control" name="date" id="date"  />
			</div>
			<!-- End: Input Field For date-->


			<!-- Start: Input Field For time-->
			<div class="form-group col-md-12">
				<label><i class="null"></i> Time</label>
				<input type="text" placeholder="Please enter time ..." class="w3-input form-control" name="time" id="time"  />
			</div>
			<!-- End: Input Field For time-->


			<!-- Start: Submit Button-->
			<div class="col-md-12">
				<div class="form-group">
					<button class="w3-btn w3-small w3-round w3-blue" name="submitForm" >Submit</button>
					<a href="EntityOrder_detailsList.php" class="w3-btn w3-small w3-round w3-red" >Back</a>
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

		require_once("EntityOrder_details.php");
		require_once("ModelOrder_details.php");
		require_once("connection.php");
		global $dbc;
		$order_details = new EntityOrder_details();
		$order_detailsModel = new ModelOrder_details($dbc);

		$order_details->id = $_POST["id"];
		$order_details->rfid = $_POST["rfid"];
		$order_details->mechineDetails = $_POST["mechineDetails"];
		$order_details->item = $_POST["item"];
		$order_details->date = $_POST["date"];
		$order_details->time = $_POST["time"];

		if($order_detailsModel -> InsertOrder_details($order_details))
		{
			 echo '<script>alert("Order_details created successfully...");window.location=window.location.href;</script>';
		}
		else
		{
			 echo '<script>alert("Unable to create Order_details ...");window.location=window.location.href;</script>';
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
