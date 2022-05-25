<?php
    include("connection.php");
	include("function.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <?php headContent("VMS Login");?>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
	   <div class="row">
	       <div class="col-md-4"></div>
	       <div class="col-md-4">
	           <div class="card" style="margin-top:200px">
	               <div class="card-header">
	                   <h4>VMS Login</h4>
	               </div>
	               <div class="card-body">
	                    <form method="POST">
        	               <div class="form-group">
        	                   <lable>User Id</lable>
        	                   <input type="text" name="id" class="form-control" />
        	               </div>
        	               <div class="form-group">
        	                   <lable>Password</lable>
        	                   <input type="password" name="password" class="form-control" />
        	               </div>
        	               <div class="form-group">
        	                   <button class="w3-btn w3-green w3-round" name="stn">Submit</button>
        	               </div>
        	           </form>
        	           <?php
        	            if(isset($_POST['stn']))
        	            {
        	                if($_POST['id']=='Admin' && $_POST['password']=='Admin')
        	                {
        	                    $_SESSION["user"] = $_POST['id'];
        	                    echo '<script>alert("logged in successfully...");window.location="redirector.php";</script>';
        	                }
        	                else
        	                {
        	                    echo '<script>alert("LogIn failed Please enter again");window.location=window.location.href;</script>';
        	                }
        	            }
        	           ?>
	               </div>
	           </div>
	       </div>
	   </div>
	  </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
</div>
<!-- ./wrapper -->

   <?php scriptTags() ?>
</body>
</html>
