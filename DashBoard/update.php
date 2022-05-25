<?php
    //http://localhost/test/update.php?id=1&type=Check
    if(isset($_GET['id']) && $_GET['type'] == 'Check')
	{
	 require_once("connection.php");
	 require_once("EntityUser_details.php");
	 require_once("ModelUser_details.php");
	 global $dbc;
	 $id=$_GET['id'];
	 $user_details= new EntityUser_details();
	 $user_detailsModel= new ModelUser_details($dbc);
	 if($user_details= $user_detailsModel->GetUser_detailsByRfid($id)[0])
	    echo $user_details->balance;
	 else 
	    echo "Wrong Card";
	}
    //http://localhost/test/update.php?id=1&type=Update&machineId=machineId&amt=amt
    if(isset($_GET['id']) && $_GET['type'] == 'Update')
	{
	 require_once("connection.php");
	 require_once("EntityUser_details.php");
	 require_once("ModelUser_details.php");
	 global $dbc;
	 $id=$_GET['id'];
	 $user_details= new EntityUser_details();
	 $user_detailsModel= new ModelUser_details($dbc);
	 $user_details= $user_detailsModel->GetUser_detailsByRfid($id)[0];
	 date_default_timezone_set("Asia/Kolkata");
	 if($user_details->balance > 0)
	 {
		 $user_details->balance = $user_details->balance - $_GET['amt'];
		 $user_detailsModel->UpdateUser_details($user_details);
		 require_once("EntityOrder_details.php");
		 require_once("ModelOrder_details.php");
		 require_once("connection.php");
		 global $dbc;
		 $order_details= new EntityOrder_details();
		 $order_detailsModel= new ModelOrder_details($dbc);
		 $order_details->rfid=$id;
		 $order_details->item=$_GET['amt'];
		 $order_details->date=date("Y/m/d");
		 $order_details->time=date("h:i:sa");
		 $order_details->mechineDetails = $_GET['machineId'];
		 $order_detailsModel->InsertOrder_details($order_details);
	 }
	 echo $user_details->balance;
	}
    
	//http://localhost/test/update.php?id=1&type=Recharge&amt=100
	if(isset($_GET['type']) && $_GET['type'] == 'Recharge')
	{
	 require_once("connection.php");
	 require_once("EntityUser_details.php");
	 require_once("ModelUser_details.php");
	 global $dbc;
	 $id=$_GET['id'];
	 $user_details= new EntityUser_details();
	 $user_detailsModel= new ModelUser_details($dbc);
	 $user_details= $user_detailsModel->GetUser_detailsByRfid($id)[0];
	 date_default_timezone_set("Asia/Kolkata");
	 
	 if($user_details->balance > 0)
	 {
		 //print_r($user_details);
		 $user_details->balance = $user_details->balance + $_GET['amt'];
		 
		 $user_detailsModel->UpdateUser_details($user_details);
		 
		 require_once("EntityOrder_details.php");
		 require_once("ModelOrder_details.php");
		 require_once("connection.php");
		 
		 global $dbc;
		 $order_details= new EntityOrder_details();
		 $order_detailsModel= new ModelOrder_details($dbc);
		 
		 $order_details->rfid=$id;
		 $order_details->item="Recharge ".$_GET['amt'];
		 $order_details->date=date("Y/m/d");
		 $order_details->time=date("h:i:sa");
		 $order_detailsModel->InsertOrder_details($order_details);
	 }
	 
	 echo $user_details->balance;
	}
?>