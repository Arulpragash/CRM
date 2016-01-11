<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class updateinfomodel extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->library('session');
	}

	public function updateCompanyData($updateCompany)
	{
		$data = array(
			'Name'		=>	$updateCompany['companyName'],
			'Address'		=>	$updateCompany['address'],
			'BRegNo'		=>	$updateCompany['regNo'],
			'Website'	=>	$updateCompany['website']
		);

		$this->db->where('CompanyID', $updateCompany['companyid']);

		if($this->db->update('customers', $data)) 
		{
			$update_id = $updateCompany['companyid'];
			$this->db->trans_complete();

			$arr = array('status' => 'Update Company Success', 'update_id' => $update_id);
	   	 	echo json_encode($arr);

	    	return true;
		}
		else
		{
			return false;
		}
	}

	public function updateContactData($updateContact)
	{
		$data = array(
			'CompanyID'     =>  $updateContact['companyID'],
			'EMail'			=>	$updateContact['email'],
			'ContactName'	=>	$updateContact['cName'],
			'ContactNumber'	=>	$updateContact['contactNo']
		);

		$this->db->where('ContactID', $updateContact['contactID']);

		if($this->db->update('contacts', $data)) 
		{
			$update_id = $updateContact['companyID'];
			$this->db->trans_complete();

			$arr = array('status' => 'Update Contact Success', 'update_id' => $update_id);
	   	 	echo json_encode($arr);

	    	return true;
		}
		else
		{
			return false;
		}
	}

	public function updateActivityData($updateActivity)
	{
		$data = array(
			'CompanyID'     =>  $updateActivity['companyID'],
			'Date'			=>	$updateActivity['date'],
			'Type'			=>	$updateActivity['type'],
			'Outcome'		=>	$updateActivity['outcome'],
			'SalesPerson'	=>	$updateActivity['sPerson']
		);

		$this->db->where('ActivityID', $updateActivity['activityID']);

		if($this->db->update('activities', $data)) 
		{
			$update_id = $updateActivity['companyID'];
			$this->db->trans_complete();

			$arr = array('status' => 'Update Activity Success', 'update_id' => $update_id);
	   	 	echo json_encode($arr);

	    	return true;
		}
		else
		{
			return false;
		}
	}

}