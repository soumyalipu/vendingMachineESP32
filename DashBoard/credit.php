<?php
    include("connection.php");
	include("function.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <?php headContent("Credit");?>
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
	$user_detailsArrayList = $user_detailsModel -> GetAllUser_details();
?>
<!-- End: Retrive Data-->

<!-- Start: Edit Form HTML-->
<div class="container">
	<h3 class="w3-padding w3-card-2 w3-blue">Credit</h3>
	<div class="w3-card-2 w3-padding " style="margin-top:-12px;overflow-x:scroll" >
		<form method="POST" enctype="multipart/form-data" >

		    <!-- Start: Input Field For name-->
			<div class="form-group col-md-12">
				<label><i class="null"></i> Name</label>
				<select type="text" placeholder="Please enter name ..." class="w3-input form-control" name="userId" id="userId" >
				    <option></option>
				    <?php
        				foreach($user_detailsArrayList as $row)
        				{
        					?>
        				    <option value="<?php echo $row->id;?>" ><?php echo $row->name;?> [<?php echo $row->rfid;?>]</option>
        					<?php
        				}
    				?>
				</select>
			</div>
			<!-- End: Input Field For name-->

			<!-- Start: Input Field For balance-->
			<div class="form-group col-md-12">
				<label><i class="null"></i> Balance</label>
				<input type="text" placeholder="Please enter balance ..." class="w3-input form-control" name="balance" id="balance"  value="<?php echo $user_details->balance; ?>" />
			</div>
			<!-- End: Input Field For balance-->


			


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
        $balance = $_POST['balance'];
		date_default_timezone_set("Asia/Kolkata");
    	$user_details = $user_detailsModel -> GetUser_detailsById($_POST["userId"])[0];
    	$user_details->balance = $user_details->balance + $balance;
    		 
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
