 <html>
        <head>
            <!-- Latest compiled and minified CSS -->
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
            <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
            <!-- Optional theme -->
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">
            
            <!-- FontAwsome -->
            <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
            <!-- Latest compiled and minified JavaScript -->
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
        
        </head>
        <body>


   <?php
    if(isset($_GET['id'])){
    
	 require_once("EntityUser_details.php");
	 require_once("ModelUser_details.php");
	 require_once("connection.php");
	 global $dbc;
	 $id=$_GET['id'];
	 $user_details= new EntityUser_details();
	 $user_detailsModel= new ModelUser_details($dbc);
	 $user_details= $user_detailsModel->GetUser_detailsById($id)[0];

   ?>
   <div class="container">
    <h3 class="w3-padding w3-card-2 w3-blue">Edit User_details</h3>
    <div class="w3-card-2 w3-padding " style='margin-top:-12px' >
	<form method="POST" enctype="multipart/form-data" >
    	<div class="row">
    	
 	<div class='form-group col-md-12 '>
		<label> <i class=' fa fa-square ' ></i> Id </label>
 
 		<input type='number' class='form-control' name='id' id='id'  value='<?php echo $user_details->id;?>'  required    title='' /> 
	</div>

 	<div class='form-group col-md-12 '>
		<label> <i class=' fa fa-square ' ></i> Rfid </label>
 
 		<input type='text' class='form-control' name='rfid' id='rfid'  value='<?php echo $user_details->rfid;?>'  required    title='' /> 
	</div>

 	<div class='form-group col-md-12 '>
		<label> <i class=' fa fa-square ' ></i> Balance </label>
 
 		<input type='number' class='form-control' name='balance' id='balance'  value='<?php echo $user_details->balance;?>'  required    title='' /> 
	</div>

 	<div class='form-group col-md-12 '>
		<label> <i class=' fa fa-square ' ></i> Name </label>
 
 		<input type='text' class='form-control' name='name' id='name'  value='<?php echo $user_details->name;?>'  required    title='' /> 
	</div>

 	<div class='form-group col-md-12 '>
		<label> <i class=' fa fa-square ' ></i> Mobile </label>
 
 		<input type='text' class='form-control' name='mobile' id='mobile'  value='<?php echo $user_details->mobile;?>'  required    title='' /> 
	</div>

 	<div class='form-group col-md-12 '>
		<label> <i class=' fa fa-square ' ></i> Email </label>
 
 		<input type='text' class='form-control' name='email' id='email'  value='<?php echo $user_details->email;?>'  required    title='' /> 
	</div>

 	<div class='form-group col-md-12 '>
		<label> <i class=' fa fa-square ' ></i> Password </label>
 
 		<input type='text' class='form-control' name='password' id='password'  value='<?php echo $user_details->password;?>'  required    title='' /> 
	</div>

    	<div class="col-md-12">
        	<div class="form-group">
        	    <button class="w3-btn w3-small w3-round w3-blue" name="submitForm" >Submit</button>
        	    <a href="EntityUser_detailsList.php" class="w3-btn w3-small w3-round w3-red" >Back</a>
        	</div>
    	</div>
    	</div>
    </form>
    </div>
   </div>
   <?php
     if(isset($_POST['submitForm'])){
     
	 $user_details->id=$_POST['id'];
	 $user_details->rfid=$_POST['rfid'];
	 $user_details->balance=$_POST['balance'];
	 $user_details->name=$_POST['name'];
	 $user_details->mobile=$_POST['mobile'];
	 $user_details->email=$_POST['email'];
	 $user_details->password=$_POST['password'];
	 if($user_detailsModel->UpdateUser_details($user_details)){
	     echo '<script>alert("user_details Update Successfully...");window.location=window.location.href;</script>';
	 }else{
	     echo '<script>alert("user_details Unable to Update...");window.location=window.location.href;</script>';
	 }
     }
     }
   ?>
 
    </body>
    </html>