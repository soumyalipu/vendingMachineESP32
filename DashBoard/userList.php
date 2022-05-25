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


   <div class="w3-container">
       
	 <?php
		 require_once("EntityUser_details.php");
		 require_once("ModelUser_details.php");
		 require_once("connection.php");
		 global $dbc;
		 $user_details= new EntityUser_details();
		 $user_detailsModel= new ModelUser_details($dbc);
		 $user_detailsArrayList= $user_detailsModel->GetAllUser_details();

	 ?>
	 <h3 class='w3-padding w3-blue'>User_details List<a href='EntityUser_detailsCreate.php'><button class='w3-btn w3-green w3-right w3-small'>NEW</button></a></h3>
	 <div class='w3-container w3-padding w3-card-2' style='margin-top:-12px;overflow-x:scroll'>
	 <table class='w3-table-all display' id='example'>
		 <thead><tr>
			<th>id</th>
			<th>rfid</th>
			<th>balance</th>
			<th>name</th>
			<th>mobile</th>
			<th>email</th>
			<th>password</th>
			<th>Opp</th>
		 </tr></thead>
		 <tbody><?php
			 foreach($user_detailsArrayList as $row){
			 ?><tr>
			 
				<td><?php echo $row->id;?></td>
				<td><?php echo $row->rfid;?></td>
				<td><?php echo $row->balance;?></td>
				<td><?php echo $row->name;?></td>
				<td><?php echo $row->mobile;?></td>
				<td><?php echo $row->email;?></td>
				<td><?php echo $row->password;?></td>
			 <td><a href='EntityUser_detailsEdit.php?id=<?php echo $row->id; ?>' class='w3-btn w3-small w3-round w3-green'>Edit</a>
<a href='EntityUser_detailsDelete.php?id=<?php echo $row->id; ?>'  class='w3-btn w3-small w3-round w3-red' >Delete</a></td>
			 </tr><?php
			 }
		 ?></tbody>
	 </table>
	 </div>
   </div>
 
    </body>
    </html>