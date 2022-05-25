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
  <?php headContent("VMS Machine Details");?>
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

	require_once("EntityMachinedetails.php");
	require_once("ModelMachinedetails.php");
	require_once("connection.php");
	global $dbc;
	$machineDetails = new EntityMachinedetails();
	$machineDetailsModel = new ModelMachinedetails($dbc);

	$machineDetailsArrayList = $machineDetailsModel -> GetAllMachinedetails();
?>
<!-- End: Retrive Data-->

<!-- Start: List HTML-->
<div class="container">

	<h3 class="w3-padding w3-blue">Machinedetails List<a href="EntityMachinedetailsCreate.php"><button class="w3-btn w3-green w3-right w3-small">NEW</button></a></h3>
	<div class="w3-container w3-padding w3-card-2" style="margin-top:-12px;overflow-x:scroll">
		<table class="w3-table-all display" id="example">
			<!-- Start: Table Head Details -->
			<thead>
				<tr>
					<th>Id</th>
					<th>Machine Name</th>
					<th>Machine Details</th>
					<th>OPP</th>
				<tr>
			</thead>
			<!-- End: Table Head Details -->

			<!-- Start: Table Body Details -->
			<tbody>
				<?php
				foreach($machineDetailsArrayList as $row)
				{
					?>
					<tr>
							<td><?php echo $row->id;?></td>
							<td><?php echo $row->MachineName;?></td>
							<td><?php echo $row->MachineDetails;?></td>
							<td>
								<a href="EntityMachinedetailsDelete.php?id=<?php echo $row->id;?>" class="w3-btn w3-red w3-small w3-round">Delete</a>
								<a href="EntityMachinedetailsEdit.php?id=<?php echo $row->id;?>" class="w3-btn w3-green w3-small w3-round">Edit</a>
							</td>
					</tr>
					<?php
				}
				?>
			</tbody>
			<!-- End: Table body Details -->
		</table>
	</div>

</div>
<!-- End: List HTML-->


	   
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
