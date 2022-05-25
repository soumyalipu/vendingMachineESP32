<?php
    include("connection.php");
	include("function.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <?php headContent("EntityOrder_detailsList");?>
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

	$order_detailsArrayList = $order_detailsModel -> GetAllOrder_details();
?>
<!-- End: Retrive Data-->

<!-- Start: List HTML-->
<div class="container">

	<h3 class="w3-padding w3-blue">Order_details List<a href="EntityOrder_detailsCreate.php"><button class="w3-btn w3-green w3-right w3-small">NEW</button></a></h3>
	<div class="w3-container w3-padding w3-card-2" style="margin-top:-12px;overflow-x:scroll">
		<table class="w3-table-all display" id="example">
			<!-- Start: Table Head Details -->
			<thead>
				<tr>
					<th>Id</th>
					<th>Rfid</th>
					<th>Mechinedetails</th>
					<th>Item</th>
					<th>Date</th>
					<th>Time</th>
					<th>OPP</th>
				<tr>
			</thead>
			<!-- End: Table Head Details -->

			<!-- Start: Table Body Details -->
			<tbody>
				<?php
				foreach($order_detailsArrayList as $row)
				{
					?>
					<tr>
							<td><?php echo $row->id;?></td>
							<td><?php echo $row->rfid;?></td>
							<td><?php echo $row->mechineDetails;?></td>
							<td><?php echo $row->item;?></td>
							<td><?php echo $row->date;?></td>
							<td><?php echo $row->time;?></td>
							<td>
								<a href="EntityOrder_detailsDelete.php?id=<?php echo $row->id;?>" class="w3-btn w3-red w3-small w3-round">Delete</a>
								<a href="EntityOrder_detailsEdit.php?id=<?php echo $row->id;?>" class="w3-btn w3-green w3-small w3-round">Edit</a>
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
