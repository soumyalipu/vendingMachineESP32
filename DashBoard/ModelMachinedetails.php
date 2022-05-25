
<?php
	class ModelMachinedetails{
	/********************** [Start : Cunstructer, Auto Generated Code Mon Dec 27 2021] ****************************/
	/******************************************************************************************************************/
	function __construct($dbc)
	{
		$this -> conn = $dbc;
	}
	/********************** [End : Cunstructer, Auto Generated Code Mon Dec 27 2021] ****************************/
	/****************************************************************************************************************/

	/********************** [Start : Insert Mechinedetails, Auto Generated Code Mon Dec 27 2021] ****************************/
	/****************************************************************************************************************************/
	function InsertMachinedetails($mechineDetails)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("INSERT INTO mechineDetails (id,MachineName,MachineDetails) VALUES (?,?,?)");
		$stmt->bind_param("iss",$mechineDetails->id,$mechineDetails->MachineName,$mechineDetails->MachineDetails);
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
	/********************** [End : Insert Mechinedetails, Auto Generated Code Mon Dec 27 2021] ****************************/
	/**************************************************************************************************************************/

	/********************** [Start : GetAllMechinedetails, Auto Generated Code Mon Dec 27 2021] ****************************/
	/***************************************************************************************************************************/
	function GetAllMachinedetails()
	{
		$conn = $this -> conn;
		$machineDetailsArrayList = array();
		$stmt = $conn->prepare("select * from mechineDetails ");
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityMachinedetails();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($machineDetailsArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $machineDetailsArrayList;
	}
	/********************** [End : GetMechinedetailsByMechinedetails, Auto Generated Code Mon Dec 27 2021] ****************************/
	/**************************************************************************************************************************************/

	/********************** [Start : GetMechinedetailsById, Auto Generated Code Mon Dec 27 2021] ****************************/
	/****************************************************************************************************************************/
	function GetMachinedetailsById($id)
	{
		$conn = $this -> conn;
		$machineDetailsArrayList = array();
		$stmt = $conn->prepare("select * from mechineDetails where `id` = ? ");
		$stmt->bind_param("i",$id);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityMachinedetails();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($machineDetailsArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $machineDetailsArrayList;
	}
	/********************** [End : GetMechinedetailsById, Auto Generated Code Mon Dec 27 2021] ****************************/
	/**************************************************************************************************************************/

	/********************** [Start : GetMechinedetailsByMechinename, Auto Generated Code Mon Dec 27 2021] ****************************/
	/*************************************************************************************************************************************/
	function GetMachinedetailsByMachinename($machineName)
	{
		$conn = $this -> conn;
		$machineDetailsArrayList = array();
		$stmt = $conn->prepare("select * from mechineDetails where `MachineName` = ? ");
		$stmt->bind_param("s",$machineName);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityMachinedetails();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($machineDetailsArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $machineDetailsArrayList;
	}
	/********************** [End : GetMechinedetailsByMechinename, Auto Generated Code Mon Dec 27 2021] ****************************/
	/***********************************************************************************************************************************/

	/********************** [Start : GetMechinedetailsByMecinedetails, Auto Generated Code Mon Dec 27 2021] ****************************/
	/***************************************************************************************************************************************/
	function GetMachinedetailsByMachinedetails($machineDetails)
	{
		$conn = $this -> conn;
		$machineDetailsArrayList = array();
		$stmt = $conn->prepare("select * from mechineDetails where `MachineDetails` = ? ");
		$stmt->bind_param("s",$machineDetails);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityMachinedetails();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($machineDetailsArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $machineDetailsArrayList;
	}
	/********************** [End : GetMechinedetailsByMecinedetails, Auto Generated Code Mon Dec 27 2021] ****************************/
	/*************************************************************************************************************************************/


	/********************** [Start : SearchMechinedetailsById, Auto Generated Code Mon Dec 27 2021] ****************************/
	/*******************************************************************************************************************************/
	function SearchMachinedetailsById($id)
	{
		$conn = $this -> conn;
		$machineDetailsArrayList = array();
		$stmt = $conn->prepare("select * from mechineDetails where `id` like ? ");
		$stmt->bind_param("i",$id);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityMachinedetails();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($MachineDetailsArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $machineDetailsArrayList;
	}
	/********************** [End : SearchMechinedetailsById, Auto Generated Code Mon Dec 27 2021] ****************************/
	/*****************************************************************************************************************************/

	/********************** [Start : SearchMechinedetailsByMechinename, Auto Generated Code Mon Dec 27 2021] ****************************/
	/****************************************************************************************************************************************/
	function SearchMachinedetailsByMachinename($machineName)
	{
		$conn = $this -> conn;
		$machineDetailsArrayList = array();
		$stmt = $conn->prepare("select * from mechineDetails where `MachineName` like ? ");
		$stmt->bind_param("s",$machineName);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityMachinedetails();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($MachineDetailsArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $machineDetailsArrayList;
	}
	/********************** [End : SearchMechinedetailsByMechinename, Auto Generated Code Mon Dec 27 2021] ****************************/
	/**************************************************************************************************************************************/

	/********************** [Start : SearchMechinedetailsByMecinedetails, Auto Generated Code Mon Dec 27 2021] ****************************/
	/******************************************************************************************************************************************/
	function SearchMachinedetailsByMachinedetails($macineDetails)
	{
		$conn = $this -> conn;
		$machineDetailsArrayList = array();
		$stmt = $conn->prepare("select * from mechineDetails where `MachineDetails` like ? ");
		$stmt->bind_param("s",$macineDetails);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityMachinedetails();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($machineDetailsArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $machineDetailsArrayList;
	}
	/********************** [End : SearchMechinedetailsByMecinedetails, Auto Generated Code Mon Dec 27 2021] ****************************/
	/****************************************************************************************************************************************/


	/********************** [Start : DeleteMechinedetailsById, Auto Generated Code Mon Dec 27 2021] ****************************/
	/*******************************************************************************************************************************/
	function DeleteMachinedetailsById($id)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from mechineDetails where `id` = ? ");
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
	/********************** [End : DeleteMechinedetailsById, Auto Generated Code Mon Dec 27 2021] ****************************/
	/*****************************************************************************************************************************/

	/********************** [Start : DeleteMechinedetailsByMechinename, Auto Generated Code Mon Dec 27 2021] ****************************/
	/****************************************************************************************************************************************/
	function DeleteMachinedetailsByMachinename($machineName)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from mechineDetails where `MachineName` = ? ");
		$stmt->bind_param("s",$machineName);
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
	/********************** [End : DeleteMechinedetailsByMechinename, Auto Generated Code Mon Dec 27 2021] ****************************/
	/**************************************************************************************************************************************/

	/********************** [Start : DeleteMechinedetailsByMecinedetails, Auto Generated Code Mon Dec 27 2021] ****************************/
	/******************************************************************************************************************************************/
	function DeleteMachinedetailsByMachinedetails($macineDetails)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from mechineDetails where `MachineDetails` = ? ");
		$stmt->bind_param("s",$macineDetails);
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
	/********************** [End : DeleteMechinedetailsByMecinedetails, Auto Generated Code Mon Dec 27 2021] ****************************/
	/****************************************************************************************************************************************/

	/********************** [Start : Update Mechinedetails, Auto Generated Code Mon Dec 27 2021] ****************************/
	/****************************************************************************************************************************/
	function UpdateMachinedetails($mechineDetails)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("update mechineDetails set id = ? ,MachineName = ? ,MachineDetails = ? where id = ? ");
		$stmt->bind_param("issi",$mechineDetails->id,$mechineDetails->MachineName,$mechineDetails->MachineDetails,$mechineDetails->id);
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
	/********************** [End : Update Mechinedetails, Auto Generated Code Mon Dec 27 2021] ****************************/
	/**************************************************************************************************************************/

}
?>
