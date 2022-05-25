<?php
    class ModelUser_details{
	/********************** [Start : Cunstructer, Auto Generated Code Mon Dec 27 2021] ****************************/
	/******************************************************************************************************************/
	function __construct($dbc)
	{
		$this -> conn = $dbc;
	}
	/********************** [End : Cunstructer, Auto Generated Code Mon Dec 27 2021] ****************************/
	/****************************************************************************************************************/

	/********************** [Start : Insert User_details, Auto Generated Code Mon Dec 27 2021] ****************************/
	/**************************************************************************************************************************/
	function InsertUser_details($user_details)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("INSERT INTO user_details (id,rfid,balance,name,mobile,email,password) VALUES (?,?,?,?,?,?,?)");
		$stmt->bind_param("isdssss",$user_details->id,$user_details->rfid,$user_details->balance,$user_details->name,$user_details->mobile,$user_details->email,$user_details->password);
		if($stmt->execute())
		{
			$stmt ->close();
			return true;
		}
		else
		{
			die($stmt->error);
			$stmt ->close();
			return false;
		}
	}
	/********************** [End : Insert User_details, Auto Generated Code Mon Dec 27 2021] ****************************/
	/************************************************************************************************************************/

	/********************** [Start : GetAllUser_details, Auto Generated Code Mon Dec 27 2021] ****************************/
	/*************************************************************************************************************************/
	function GetAllUser_details()
	{
		$conn = $this -> conn;
		$user_detailsArrayList = array();
		$stmt = $conn->prepare("select * from user_details ");
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityUser_details();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($user_detailsArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $user_detailsArrayList;
	}
	/********************** [End : GetUser_detailsByUser_details, Auto Generated Code Mon Dec 27 2021] ****************************/
	/**********************************************************************************************************************************/

	/********************** [Start : GetUser_detailsById, Auto Generated Code Mon Dec 27 2021] ****************************/
	/**************************************************************************************************************************/
	function GetUser_detailsById($id)
	{
		$conn = $this -> conn;
		$user_detailsArrayList = array();
		$stmt = $conn->prepare("select * from user_details where `id` = ? ");
		$stmt->bind_param("i",$id);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityUser_details();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($user_detailsArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $user_detailsArrayList;
	}
	/********************** [End : GetUser_detailsById, Auto Generated Code Mon Dec 27 2021] ****************************/
	/************************************************************************************************************************/

	/********************** [Start : GetUser_detailsByRfid, Auto Generated Code Mon Dec 27 2021] ****************************/
	/****************************************************************************************************************************/
	function GetUser_detailsByRfid($rfid)
	{
		$conn = $this -> conn;
		$user_detailsArrayList = array();
		$stmt = $conn->prepare("select * from user_details where `rfid` = ? ");
		$stmt->bind_param("s",$rfid);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityUser_details();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($user_detailsArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $user_detailsArrayList;
	}
	/********************** [End : GetUser_detailsByRfid, Auto Generated Code Mon Dec 27 2021] ****************************/
	/**************************************************************************************************************************/

	/********************** [Start : GetUser_detailsByBalance, Auto Generated Code Mon Dec 27 2021] ****************************/
	/*******************************************************************************************************************************/
	function GetUser_detailsByBalance($balance)
	{
		$conn = $this -> conn;
		$user_detailsArrayList = array();
		$stmt = $conn->prepare("select * from user_details where `balance` = ? ");
		$stmt->bind_param("d",$balance);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityUser_details();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($user_detailsArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $user_detailsArrayList;
	}
	/********************** [End : GetUser_detailsByBalance, Auto Generated Code Mon Dec 27 2021] ****************************/
	/*****************************************************************************************************************************/

	/********************** [Start : GetUser_detailsByName, Auto Generated Code Mon Dec 27 2021] ****************************/
	/****************************************************************************************************************************/
	function GetUser_detailsByName($name)
	{
		$conn = $this -> conn;
		$user_detailsArrayList = array();
		$stmt = $conn->prepare("select * from user_details where `name` = ? ");
		$stmt->bind_param("s",$name);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityUser_details();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($user_detailsArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $user_detailsArrayList;
	}
	/********************** [End : GetUser_detailsByName, Auto Generated Code Mon Dec 27 2021] ****************************/
	/**************************************************************************************************************************/

	/********************** [Start : GetUser_detailsByMobile, Auto Generated Code Mon Dec 27 2021] ****************************/
	/******************************************************************************************************************************/
	function GetUser_detailsByMobile($mobile)
	{
		$conn = $this -> conn;
		$user_detailsArrayList = array();
		$stmt = $conn->prepare("select * from user_details where `mobile` = ? ");
		$stmt->bind_param("s",$mobile);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityUser_details();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($user_detailsArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $user_detailsArrayList;
	}
	/********************** [End : GetUser_detailsByMobile, Auto Generated Code Mon Dec 27 2021] ****************************/
	/****************************************************************************************************************************/

	/********************** [Start : GetUser_detailsByEmail, Auto Generated Code Mon Dec 27 2021] ****************************/
	/*****************************************************************************************************************************/
	function GetUser_detailsByEmail($email)
	{
		$conn = $this -> conn;
		$user_detailsArrayList = array();
		$stmt = $conn->prepare("select * from user_details where `email` = ? ");
		$stmt->bind_param("s",$email);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityUser_details();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($user_detailsArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $user_detailsArrayList;
	}
	/********************** [End : GetUser_detailsByEmail, Auto Generated Code Mon Dec 27 2021] ****************************/
	/***************************************************************************************************************************/

	/********************** [Start : GetUser_detailsByPassword, Auto Generated Code Mon Dec 27 2021] ****************************/
	/********************************************************************************************************************************/
	function GetUser_detailsByPassword($password)
	{
		$conn = $this -> conn;
		$user_detailsArrayList = array();
		$stmt = $conn->prepare("select * from user_details where `password` = ? ");
		$stmt->bind_param("s",$password);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityUser_details();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($user_detailsArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $user_detailsArrayList;
	}
	/********************** [End : GetUser_detailsByPassword, Auto Generated Code Mon Dec 27 2021] ****************************/
	/******************************************************************************************************************************/


	/********************** [Start : SearchUser_detailsById, Auto Generated Code Mon Dec 27 2021] ****************************/
	/*****************************************************************************************************************************/
	function SearchUser_detailsById($id)
	{
		$conn = $this -> conn;
		$user_detailsArrayList = array();
		$stmt = $conn->prepare("select * from user_details where `id` like ? ");
		$stmt->bind_param("i",$id);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityUser_details();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($user_detailsArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $user_detailsArrayList;
	}
	/********************** [End : SearchUser_detailsById, Auto Generated Code Mon Dec 27 2021] ****************************/
	/***************************************************************************************************************************/

	/********************** [Start : SearchUser_detailsByRfid, Auto Generated Code Mon Dec 27 2021] ****************************/
	/*******************************************************************************************************************************/
	function SearchUser_detailsByRfid($rfid)
	{
		$conn = $this -> conn;
		$user_detailsArrayList = array();
		$stmt = $conn->prepare("select * from user_details where `rfid` like ? ");
		$stmt->bind_param("s",$rfid);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityUser_details();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($user_detailsArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $user_detailsArrayList;
	}
	/********************** [End : SearchUser_detailsByRfid, Auto Generated Code Mon Dec 27 2021] ****************************/
	/*****************************************************************************************************************************/

	/********************** [Start : SearchUser_detailsByBalance, Auto Generated Code Mon Dec 27 2021] ****************************/
	/**********************************************************************************************************************************/
	function SearchUser_detailsByBalance($balance)
	{
		$conn = $this -> conn;
		$user_detailsArrayList = array();
		$stmt = $conn->prepare("select * from user_details where `balance` like ? ");
		$stmt->bind_param("i",$balance);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityUser_details();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($user_detailsArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $user_detailsArrayList;
	}
	/********************** [End : SearchUser_detailsByBalance, Auto Generated Code Mon Dec 27 2021] ****************************/
	/********************************************************************************************************************************/

	/********************** [Start : SearchUser_detailsByName, Auto Generated Code Mon Dec 27 2021] ****************************/
	/*******************************************************************************************************************************/
	function SearchUser_detailsByName($name)
	{
		$conn = $this -> conn;
		$user_detailsArrayList = array();
		$stmt = $conn->prepare("select * from user_details where `name` like ? ");
		$stmt->bind_param("s",$name);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityUser_details();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($user_detailsArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $user_detailsArrayList;
	}
	/********************** [End : SearchUser_detailsByName, Auto Generated Code Mon Dec 27 2021] ****************************/
	/*****************************************************************************************************************************/

	/********************** [Start : SearchUser_detailsByMobile, Auto Generated Code Mon Dec 27 2021] ****************************/
	/*********************************************************************************************************************************/
	function SearchUser_detailsByMobile($mobile)
	{
		$conn = $this -> conn;
		$user_detailsArrayList = array();
		$stmt = $conn->prepare("select * from user_details where `mobile` like ? ");
		$stmt->bind_param("s",$mobile);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityUser_details();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($user_detailsArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $user_detailsArrayList;
	}
	/********************** [End : SearchUser_detailsByMobile, Auto Generated Code Mon Dec 27 2021] ****************************/
	/*******************************************************************************************************************************/

	/********************** [Start : SearchUser_detailsByEmail, Auto Generated Code Mon Dec 27 2021] ****************************/
	/********************************************************************************************************************************/
	function SearchUser_detailsByEmail($email)
	{
		$conn = $this -> conn;
		$user_detailsArrayList = array();
		$stmt = $conn->prepare("select * from user_details where `email` like ? ");
		$stmt->bind_param("s",$email);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityUser_details();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($user_detailsArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $user_detailsArrayList;
	}
	/********************** [End : SearchUser_detailsByEmail, Auto Generated Code Mon Dec 27 2021] ****************************/
	/******************************************************************************************************************************/

	/********************** [Start : SearchUser_detailsByPassword, Auto Generated Code Mon Dec 27 2021] ****************************/
	/***********************************************************************************************************************************/
	function SearchUser_detailsByPassword($password)
	{
		$conn = $this -> conn;
		$user_detailsArrayList = array();
		$stmt = $conn->prepare("select * from user_details where `password` like ? ");
		$stmt->bind_param("s",$password);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityUser_details();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($user_detailsArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $user_detailsArrayList;
	}
	/********************** [End : SearchUser_detailsByPassword, Auto Generated Code Mon Dec 27 2021] ****************************/
	/*********************************************************************************************************************************/


	/********************** [Start : DeleteUser_detailsById, Auto Generated Code Mon Dec 27 2021] ****************************/
	/*****************************************************************************************************************************/
	function DeleteUser_detailsById($id)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from user_details where `id` = ? ");
		$stmt->bind_param("i",$id);
		if($stmt->execute())
		{
			$stmt ->close();
			return true;
		}
		else
		{
			$stmt ->close();
			return false;
		}
	}
	/********************** [End : DeleteUser_detailsById, Auto Generated Code Mon Dec 27 2021] ****************************/
	/***************************************************************************************************************************/

	/********************** [Start : DeleteUser_detailsByRfid, Auto Generated Code Mon Dec 27 2021] ****************************/
	/*******************************************************************************************************************************/
	function DeleteUser_detailsByRfid($rfid)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from user_details where `rfid` = ? ");
		$stmt->bind_param("s",$rfid);
		if($stmt->execute())
		{
			$stmt ->close();
			return true;
		}
		else
		{
			$stmt ->close();
			return false;
		}
	}
	/********************** [End : DeleteUser_detailsByRfid, Auto Generated Code Mon Dec 27 2021] ****************************/
	/*****************************************************************************************************************************/

	/********************** [Start : DeleteUser_detailsByBalance, Auto Generated Code Mon Dec 27 2021] ****************************/
	/**********************************************************************************************************************************/
	function DeleteUser_detailsByBalance($balance)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from user_details where `balance` = ? ");
		$stmt->bind_param("i",$balance);
		if($stmt->execute())
		{
			$stmt ->close();
			return true;
		}
		else
		{
			$stmt ->close();
			return false;
		}
	}
	/********************** [End : DeleteUser_detailsByBalance, Auto Generated Code Mon Dec 27 2021] ****************************/
	/********************************************************************************************************************************/

	/********************** [Start : DeleteUser_detailsByName, Auto Generated Code Mon Dec 27 2021] ****************************/
	/*******************************************************************************************************************************/
	function DeleteUser_detailsByName($name)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from user_details where `name` = ? ");
		$stmt->bind_param("s",$name);
		if($stmt->execute())
		{
			$stmt ->close();
			return true;
		}
		else
		{
			$stmt ->close();
			return false;
		}
	}
	/********************** [End : DeleteUser_detailsByName, Auto Generated Code Mon Dec 27 2021] ****************************/
	/*****************************************************************************************************************************/

	/********************** [Start : DeleteUser_detailsByMobile, Auto Generated Code Mon Dec 27 2021] ****************************/
	/*********************************************************************************************************************************/
	function DeleteUser_detailsByMobile($mobile)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from user_details where `mobile` = ? ");
		$stmt->bind_param("s",$mobile);
		if($stmt->execute())
		{
			$stmt ->close();
			return true;
		}
		else
		{
			$stmt ->close();
			return false;
		}
	}
	/********************** [End : DeleteUser_detailsByMobile, Auto Generated Code Mon Dec 27 2021] ****************************/
	/*******************************************************************************************************************************/

	/********************** [Start : DeleteUser_detailsByEmail, Auto Generated Code Mon Dec 27 2021] ****************************/
	/********************************************************************************************************************************/
	function DeleteUser_detailsByEmail($email)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from user_details where `email` = ? ");
		$stmt->bind_param("s",$email);
		if($stmt->execute())
		{
			$stmt ->close();
			return true;
		}
		else
		{
			$stmt ->close();
			return false;
		}
	}
	/********************** [End : DeleteUser_detailsByEmail, Auto Generated Code Mon Dec 27 2021] ****************************/
	/******************************************************************************************************************************/

	/********************** [Start : DeleteUser_detailsByPassword, Auto Generated Code Mon Dec 27 2021] ****************************/
	/***********************************************************************************************************************************/
	function DeleteUser_detailsByPassword($password)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from user_details where `password` = ? ");
		$stmt->bind_param("s",$password);
		if($stmt->execute())
		{
			$stmt ->close();
			return true;
		}
		else
		{
			$stmt ->close();
			return false;
		}
	}
	/********************** [End : DeleteUser_detailsByPassword, Auto Generated Code Mon Dec 27 2021] ****************************/
	/*********************************************************************************************************************************/

	/********************** [Start : Update User_details, Auto Generated Code Mon Dec 27 2021] ****************************/
	/**************************************************************************************************************************/
	function UpdateUser_details($user_details)
	{
	    //echo $user_details->balance;
		$conn = $this -> conn;
		$stmt = $conn->prepare("update user_details set id = ? ,rfid = ? ,balance = ? ,name = ? ,mobile = ? ,email = ? ,password = ? where id = ? ");
		$stmt->bind_param("isdssssi",$user_details->id,$user_details->rfid,$user_details->balance,$user_details->name,$user_details->mobile,$user_details->email,$user_details->password,$user_details->id);
		if($stmt->execute())
		{
			$stmt ->close();
			return true;
		}
		else
		{
			$stmt ->close();
			return false;
		}
	}
	/********************** [End : Update User_details, Auto Generated Code Mon Dec 27 2021] ****************************/
	/************************************************************************************************************************/
	
		function UpdateUser_details_ById($user_details)
	{
	    //echo $user_details->balance;
		$conn = $this -> conn;
		$stmt = $conn->prepare("update user_details balance = ? where rfid = ? ");
		$stmt->bind_param("di",$$user_details->balance,$user_details->rfid);
		if($stmt->execute())
		{
			$stmt ->close();
			return true;
		}
		else
		{
			$stmt ->close();
			return false;
		}
	}

}

?>