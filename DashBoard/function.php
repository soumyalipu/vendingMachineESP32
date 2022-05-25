<?php
	function headContent($fileName)
	{
		?>
		  <meta charset="utf-8">
		  <meta name="viewport" content="width=device-width, initial-scale=1">
		  <title><?php echo $fileName; ?></title>

		  <!-- Google Font: Source Sans Pro -->
		  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
		  <!-- Font Awesome -->
		  <link rel="stylesheet" href="adminLib/plugins/fontawesome-free/css/all.min.css">
		  <!-- Ionicons -->
		  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
		  <!-- Tempusdominus Bootstrap 4 -->
		  <link rel="stylesheet" href="adminLib/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
		  <!-- iCheck -->
		  <link rel="stylesheet" href="adminLib/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
		  <!-- JQVMap -->
		  <link rel="stylesheet" href="adminLib/plugins/jqvmap/jqvmap.min.css">
		  <!-- Theme style -->
		  <link rel="stylesheet" href="adminLib/dist/css/adminlte.min.css">
		  <!-- overlayScrollbars -->
		  <link rel="stylesheet" href="adminLib/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
		  <!-- Daterange picker -->
		  <link rel="stylesheet" href="adminLib/plugins/daterangepicker/daterangepicker.css">
		  <!-- summernote -->
		  <link rel="stylesheet" href="adminLib/plugins/summernote/summernote-bs4.min.css">
          <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
		<?php
	}
	
	function navBar()
	{
		?>
		<nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <ul class="navbar-nav">
				  <li class="nav-item">
					<a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
				  </li>
				  <li class="nav-item d-none d-sm-inline-block">
					<a href="index.php" class="nav-link">Home</a>
				  </li>
				  <li class="nav-item d-none d-sm-inline-block">
					<a href="#" class="nav-link">Contact</a>
				  </li>
			</ul>
		  </nav>
		<?php
	}
	
	function sideBar()
	{
		?>
		<aside class="main-sidebar sidebar-dark-primary elevation-4">
		<!-- Brand Logo -->
		<a href="index.php" class="brand-link">
		  <img src="adminLib/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
		  <span class="brand-text font-weight-light">Admin</span>
		</a>

		<!-- Sidebar -->
		<div class="sidebar">

		  <!-- Sidebar Menu -->
		  <nav class="mt-2">
			<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
			  <!-- Add icons to the links using the .nav-icon class
				   with font-awesome or any other icon font library -->
				   
				<li class="nav-item"><a href="EntityMachinedetailsList.php" class="nav-link"><p>Machine Details</p></a></li>
				<li class="nav-item"><a href="EntityOrder_detailsList.php" class="nav-link"><p>Order Details</p></a></li>
				<li class="nav-item"><a href="EntityUser_detailsList.php" class="nav-link"><p>User Details</p></a></li>
				<li class="nav-item"><a href="credit.php" class="nav-link"><p>Credit</p></a></li>
                <li class="nav-item"><a href="logout.php" class="nav-link"><p>Logout</p></a></li>
			  
			  
			</ul>
		  </nav>
		  <!-- /.sidebar-menu -->
		</div>
		<!-- /.sidebar -->
	  </aside>
		<?php
	}
	
	function scriptTags()
	{
		?>
		<!-- jQuery -->
		<script src="adminLib/plugins/jquery/jquery.min.js"></script>
		<!-- jQuery UI 1.11.4 -->
		<script src="adminLib/plugins/jquery-ui/jquery-ui.min.js"></script>
		<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
		<script>
		  $.widget.bridge('uibutton', $.ui.button)
		</script>
		<!-- Bootstrap 4 -->
		<script src="adminLib/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
		<!-- ChartJS -->
		<script src="adminLib/plugins/chart.js/Chart.min.js"></script>
		<!-- Sparkline -->
		<script src="adminLib/plugins/sparklines/sparkline.js"></script>
		<!-- JQVMap -->
		<script src="adminLib/plugins/jqvmap/jquery.vmap.min.js"></script>
		<script src="adminLib/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
		<!-- jQuery Knob Chart -->
		<script src="adminLib/plugins/jquery-knob/jquery.knob.min.js"></script>
		<!-- daterangepicker -->
		<script src="adminLib/plugins/moment/moment.min.js"></script>
		<script src="adminLib/plugins/daterangepicker/daterangepicker.js"></script>
		<!-- Tempusdominus Bootstrap 4 -->
		<script src="adminLib/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
		<!-- Summernote -->
		<script src="adminLib/plugins/summernote/summernote-bs4.min.js"></script>
		<!-- overlayScrollbars -->
		<script src="adminLib/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
		<!-- AdminLTE App -->
		<script src="adminLib/dist/js/adminlte.js"></script>
		<!-- AdminLTE for demo purposes -->
		<script src="adminLib/dist/js/demo.js"></script>
		<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
		<script src="adminLib/dist/js/pages/dashboard.js"></script>
		<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
		<?php
	}
	
	function uploadFile($file){
        $target_dir = "../uploads/";
        $dbName = uniqid(). basename($file["name"]);
        $target_file = $target_dir . $dbName;
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        // Check if image file is a actual image or fake image
        
        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($file["tmp_name"], $target_file)) {
               return $dbName;
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
   }
?>