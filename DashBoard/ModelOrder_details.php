<?php
	class ModelOrder_details{
	/********************** [Start : Cunstructer, Auto Generated Code Mon Dec 27 2021] ****************************/
	/******************************************************************************************************************/
	function __construct($dbc)
	{
		$this -> conn = $dbc;
	}
	/********************** [End : Cunstructer, Auto Generated Code Mon Dec 27 2021] ****************************/
	/****************************************************************************************************************/

	/********************** [Start : Insert Order_details, Auto Generated Code Mon Dec 27 2021] ****************************/
	/***************************************************************************************************************************/
	function InsertOrder_details($order_details)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("INSERT INTO order_details (id,rfid,mechineDetails,item,date,time) VALUES (?,?,?,?,?,?)");
		$stmt->bind_param("isssss",$order_details->id,$order_details->rfid,$order_details->mechineDetails,$order_details->item,$order_details->date,$order_details->time);
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
	/********************** [End : Insert Order_details, Auto Generated Code Mon Dec 27 2021] ****************************/
	/*************************************************************************************************************************/

	/********************** [Start : GetAllOrder_details, Auto Generated Code Mon Dec 27 2021] ****************************/
	/**************************************************************************************************************************/
	function GetAllOrder_details()
	{
		$conn = $this -> conn;
		$order_detailsArrayList = array();
		$stmt = $conn->prepare("select * from order_details ");
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityOrder_details();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($order_detailsArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $order_detailsArrayList;
	}
	/********************** [End : GetOrder_detailsByOrder_details, Auto Generated Code Mon Dec 27 2021] ****************************/
	/************************************************************************************************************************************/

	/********************** [Start : GetOrder_detailsById, Auto Generated Code Mon Dec 27 2021] ****************************/
	/***************************************************************************************************************************/
	function GetOrder_detailsById($id)
	{
		$conn = $this -> conn;
		$order_detailsArrayList = array();
		$stmt = $conn->prepare("select * from order_details where `id` = ? ");
		$stmt->bind_param("i",$id);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityOrder_details();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($order_detailsArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $order_detailsArrayList;
	}
	/********************** [End : GetOrder_detailsById, Auto Generated Code Mon Dec 27 2021] ****************************/
	/*************************************************************************************************************************/

	/********************** [Start : GetOrder_detailsByRfid, Auto Generated Code Mon Dec 27 2021] ****************************/
	/*****************************************************************************************************************************/
	function GetOrder_detailsByRfid($rfid)
	{
		$conn = $this -> conn;
		$order_detailsArrayList = array();
		$stmt = $conn->prepare("select * from order_details where `rfid` = ? ");
		$stmt->bind_param("s",$rfid);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityOrder_details();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($order_detailsArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $order_detailsArrayList;
	}
	/********************** [End : GetOrder_detailsByRfid, Auto Generated Code Mon Dec 27 2021] ****************************/
	/***************************************************************************************************************************/

	/********************** [Start : GetOrder_detailsByMechinedetails, Auto Generated Code Mon Dec 27 2021] ****************************/
	/***************************************************************************************************************************************/
	function GetOrder_detailsByMechinedetails($mechineDetails)
	{
		$conn = $this -> conn;
		$order_detailsArrayList = array();
		$stmt = $conn->prepare("select * from order_details where `mechineDetails` = ? ");
		$stmt->bind_param("s",$mechineDetails);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityOrder_details();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($order_detailsArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $order_detailsArrayList;
	}
	/********************** [End : GetOrder_detailsByMechinedetails, Auto Generated Code Mon Dec 27 2021] ****************************/
	/*************************************************************************************************************************************/

	/********************** [Start : GetOrder_detailsByItem, Auto Generated Code Mon Dec 27 2021] ****************************/
	/*****************************************************************************************************************************/
	function GetOrder_detailsByItem($item)
	{
		$conn = $this -> conn;
		$order_detailsArrayList = array();
		$stmt = $conn->prepare("select * from order_details where `item` = ? ");
		$stmt->bind_param("s",$item);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityOrder_details();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($order_detailsArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $order_detailsArrayList;
	}
	/********************** [End : GetOrder_detailsByItem, Auto Generated Code Mon Dec 27 2021] ****************************/
	/***************************************************************************************************************************/

	/********************** [Start : GetOrder_detailsByDate, Auto Generated Code Mon Dec 27 2021] ****************************/
	/*****************************************************************************************************************************/
	function GetOrder_detailsByDate($date)
	{
		$conn = $this -> conn;
		$order_detailsArrayList = array();
		$stmt = $conn->prepare("select * from order_details where `date` = ? ");
		$stmt->bind_param("s",$date);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityOrder_details();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($order_detailsArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $order_detailsArrayList;
	}
	/********************** [End : GetOrder_detailsByDate, Auto Generated Code Mon Dec 27 2021] ****************************/
	/***************************************************************************************************************************/

	/********************** [Start : GetOrder_detailsByTime, Auto Generated Code Mon Dec 27 2021] ****************************/
	/*****************************************************************************************************************************/
	function GetOrder_detailsByTime($time)
	{
		$conn = $this -> conn;
		$order_detailsArrayList = array();
		$stmt = $conn->prepare("select * from order_details where `time` = ? ");
		$stmt->bind_param("s",$time);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityOrder_details();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($order_detailsArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $order_detailsArrayList;
	}
	/********************** [End : GetOrder_detailsByTime, Auto Generated Code Mon Dec 27 2021] ****************************/
	/***************************************************************************************************************************/


	/********************** [Start : SearchOrder_detailsById, Auto Generated Code Mon Dec 27 2021] ****************************/
	/******************************************************************************************************************************/
	function SearchOrder_detailsById($id)
	{
		$conn = $this -> conn;
		$order_detailsArrayList = array();
		$stmt = $conn->prepare("select * from order_details where `id` like ? ");
		$stmt->bind_param("i",$id);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityOrder_details();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($order_detailsArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $order_detailsArrayList;
	}
	/********************** [End : SearchOrder_detailsById, Auto Generated Code Mon Dec 27 2021] ****************************/
	/****************************************************************************************************************************/

	/********************** [Start : SearchOrder_detailsByRfid, Auto Generated Code Mon Dec 27 2021] ****************************/
	/********************************************************************************************************************************/
	function SearchOrder_detailsByRfid($rfid)
	{
		$conn = $this -> conn;
		$order_detailsArrayList = array();
		$stmt = $conn->prepare("select * from order_details where `rfid` like ? ");
		$stmt->bind_param("s",$rfid);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityOrder_details();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($order_detailsArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $order_detailsArrayList;
	}
	/********************** [End : SearchOrder_detailsByRfid, Auto Generated Code Mon Dec 27 2021] ****************************/
	/******************************************************************************************************************************/

	/********************** [Start : SearchOrder_detailsByMechinedetails, Auto Generated Code Mon Dec 27 2021] ****************************/
	/******************************************************************************************************************************************/
	function SearchOrder_detailsByMechinedetails($mechineDetails)
	{
		$conn = $this -> conn;
		$order_detailsArrayList = array();
		$stmt = $conn->prepare("select * from order_details where `mechineDetails` like ? ");
		$stmt->bind_param("s",$mechineDetails);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityOrder_details();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($order_detailsArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $order_detailsArrayList;
	}
	/********************** [End : SearchOrder_detailsByMechinedetails, Auto Generated Code Mon Dec 27 2021] ****************************/
	/****************************************************************************************************************************************/

	/********************** [Start : SearchOrder_detailsByItem, Auto Generated Code Mon Dec 27 2021] ****************************/
	/********************************************************************************************************************************/
	function SearchOrder_detailsByItem($item)
	{
		$conn = $this -> conn;
		$order_detailsArrayList = array();
		$stmt = $conn->prepare("select * from order_details where `item` like ? ");
		$stmt->bind_param("s",$item);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityOrder_details();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($order_detailsArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $order_detailsArrayList;
	}
	/********************** [End : SearchOrder_detailsByItem, Auto Generated Code Mon Dec 27 2021] ****************************/
	/******************************************************************************************************************************/

	/********************** [Start : SearchOrder_detailsByDate, Auto Generated Code Mon Dec 27 2021] ****************************/
	/********************************************************************************************************************************/
	function SearchOrder_detailsByDate($date)
	{
		$conn = $this -> conn;
		$order_detailsArrayList = array();
		$stmt = $conn->prepare("select * from order_details where `date` like ? ");
		$stmt->bind_param("s",$date);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityOrder_details();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($order_detailsArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $order_detailsArrayList;
	}
	/********************** [End : SearchOrder_detailsByDate, Auto Generated Code Mon Dec 27 2021] ****************************/
	/******************************************************************************************************************************/

	/********************** [Start : SearchOrder_detailsByTime, Auto Generated Code Mon Dec 27 2021] ****************************/
	/********************************************************************************************************************************/
	function SearchOrder_detailsByTime($time)
	{
		$conn = $this -> conn;
		$order_detailsArrayList = array();
		$stmt = $conn->prepare("select * from order_details where `time` like ? ");
		$stmt->bind_param("s",$time);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityOrder_details();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($order_detailsArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $order_detailsArrayList;
	}
	/********************** [End : SearchOrder_detailsByTime, Auto Generated Code Mon Dec 27 2021] ****************************/
	/******************************************************************************************************************************/


	/********************** [Start : DeleteOrder_detailsById, Auto Generated Code Mon Dec 27 2021] ****************************/
	/******************************************************************************************************************************/
	function DeleteOrder_detailsById($id)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from order_details where `id` = ? ");
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
	/********************** [End : DeleteOrder_detailsById, Auto Generated Code Mon Dec 27 2021] ****************************/
	/****************************************************************************************************************************/

	/********************** [Start : DeleteOrder_detailsByRfid, Auto Generated Code Mon Dec 27 2021] ****************************/
	/********************************************************************************************************************************/
	function DeleteOrder_detailsByRfid($rfid)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from order_details where `rfid` = ? ");
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
	/********************** [End : DeleteOrder_detailsByRfid, Auto Generated Code Mon Dec 27 2021] ****************************/
	/******************************************************************************************************************************/

	/********************** [Start : DeleteOrder_detailsByMechinedetails, Auto Generated Code Mon Dec 27 2021] ****************************/
	/******************************************************************************************************************************************/
	function DeleteOrder_detailsByMechinedetails($mechineDetails)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from order_details where `mechineDetails` = ? ");
		$stmt->bind_param("s",$mechineDetails);
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
	/********************** [End : DeleteOrder_detailsByMechinedetails, Auto Generated Code Mon Dec 27 2021] ****************************/
	/****************************************************************************************************************************************/

	/********************** [Start : DeleteOrder_detailsByItem, Auto Generated Code Mon Dec 27 2021] ****************************/
	/********************************************************************************************************************************/
	function DeleteOrder_detailsByItem($item)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from order_details where `item` = ? ");
		$stmt->bind_param("s",$item);
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
	/********************** [End : DeleteOrder_detailsByItem, Auto Generated Code Mon Dec 27 2021] ****************************/
	/******************************************************************************************************************************/

	/********************** [Start : DeleteOrder_detailsByDate, Auto Generated Code Mon Dec 27 2021] ****************************/
	/********************************************************************************************************************************/
	function DeleteOrder_detailsByDate($date)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from order_details where `date` = ? ");
		$stmt->bind_param("s",$date);
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
	/********************** [End : DeleteOrder_detailsByDate, Auto Generated Code Mon Dec 27 2021] ****************************/
	/******************************************************************************************************************************/

	/********************** [Start : DeleteOrder_detailsByTime, Auto Generated Code Mon Dec 27 2021] ****************************/
	/********************************************************************************************************************************/
	function DeleteOrder_detailsByTime($time)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from order_details where `time` = ? ");
		$stmt->bind_param("s",$time);
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
	/********************** [End : DeleteOrder_detailsByTime, Auto Generated Code Mon Dec 27 2021] ****************************/
	/******************************************************************************************************************************/

	/********************** [Start : Update Order_details, Auto Generated Code Mon Dec 27 2021] ****************************/
	/***************************************************************************************************************************/
	function UpdateOrder_details($order_details)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("update order_details set id = ? ,rfid = ? ,mechineDetails = ? ,item = ? ,date = ? ,time = ? where id = ? ");
		$stmt->bind_param("isssssi",$order_details->id,$order_details->rfid,$order_details->mechineDetails,$order_details->item,$order_details->date,$order_details->time,$order_details->id);
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
	/********************** [End : Update Order_details, Auto Generated Code Mon Dec 27 2021] ****************************/
	/*************************************************************************************************************************/

}
?>