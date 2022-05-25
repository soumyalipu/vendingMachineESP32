<?php
    include("connection.php");
	include("function.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <?php headContent("EntityOrder_detailsEdit");?>
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

	require_once("EntityOrder_details.php");
	require_once("ModelOrder_details.php");
	require_once("connection.php");
	global $dbc;
	$order_details = new EntityOrder_details();
	$order_detailsModel = new ModelOrder_details($dbc);

	$order_details = $order_detailsModel -> GetOrder_detailsById($_GET["id"])[0];
?>
<!-- End: Retrive Data-->

<!-- Start: Edit Form HTML-->
<div class="container">
	<h3 class="w3-padding w3-card-2 w3-blue">Edit Order_details</h3>
	<div class="w3-card-2 w3-padding " style="margin-top:-12px;overflow-x:scroll" >
		<form method="POST" enctype="multipart/form-data" >

			<!-- Start: Input Field For id-->
			<div class="form-group col-md-12">
				<label><i class="null"></i> Id</label>
				<input type="number" placeholder="Please enter id ..." class="w3-input form-control" name="id" id="id"  value="<?php echo $order_details->id; ?>" />
			</div>
			<!-- End: Input Field For id-->


			<!-- Start: Input Field For rfid-->
			<div class="form-group col-md-12">
				<label><i class="null"></i> Rfid</label>
				<input type="text" placeholder="Please enter rfid ..." class="w3-input form-control" name="rfid" id="rfid"  value="<?php echo $order_details->rfid; ?>" />
			</div>
			<!-- End: Input Field For rfid-->


			<!-- Start: Input Field For mechineDetails-->
			<div class="form-group col-md-12">
				<label><i class="null"></i> Mechinedetails</label>
				<input type="text" placeholder="Please enter mechineDetails ..." class="w3-input form-control" name="mechineDetails" id="mechineDetails"  value="<?php echo $order_details->mechineDetails; ?>" />
			</div>
			<!-- End: Input Field For mechineDetails-->


			<!-- Start: Input Field For item-->
			<div class="form-group col-md-12">
				<label><i class="null"></i> Item</label>
				<input type="text" placeholder="Please enter item ..." class="w3-input form-control" name="item" id="item"  value="<?php echo $order_details->item; ?>" />
			</div>
			<!-- End: Input Field For item-->


			<!-- Start: Input Field For date-->
			<div class="form-group col-md-12">
				<label><i class="null"></i> Date</label>
				<input type="date" placeholder="Please enter date ..." class="w3-input form-control" name="date" id="date"  value="<?php echo $order_details->date; ?>" />
			</div>
			<!-- End: Input Field For date-->


			<!-- Start: Input Field For time-->
			<div class="form-group col-md-12">
				<label><i class="null"></i> Time</label>
				<input type="text" placeholder="Please enter time ..." class="w3-input form-control" name="time" id="time"  value="<?php echo $order_details->time; ?>" />
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
<!-- End: Edit Form HTML-->

<!-- Start: Edit Form PHP-->
<?php
	if(isset($_POST["submitForm"]))
	{

		$order_details->id = $_POST["id"];
		$order_details->rfid = $_POST["rfid"];
		$order_details->mechineDetails = $_POST["mechineDetails"];
		$order_details->item = $_POST["item"];
		$order_details->date = $_POST["date"];
		$order_details->time = $_POST["time"];

		if($order_detailsModel -> UpdateOrder_details($order_details))
		{
			 echo '<script>alert("Order_details updated successfully...");window.location=window.location.href;</script>';
		}
		else
		{
			 echo '<script>alert("Unable to updated Order_details ...");window.location=window.location.href;</script>';
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
