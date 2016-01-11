<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class addinfomodel extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->library('session');
	}
 
	public function index()
	{	
		
	}

	public function addCompany($saveCompany)
	{
		$data = array(
			'Name'		=> 	$saveCompany['companyName'],
		   	'Address' 	=> 	$saveCompany['address'],
		   	'BRegNo'	=>  $saveCompany['regNo'],
		   	'Website' 	=> 	$saveCompany['website']
		);

	    if($this->db->insert('customers', $data))
	    {
	    	$insert_id = $this->db->insert_id();
	     	$this->db->trans_complete();

		 	$arr = array('insert_id' => $insert_id , 'status' => 'Company Added Successfully!');
	   	 	echo json_encode($arr);

	    	return true;
	    }
	    else
	    {
	   		return false;
	    }
	}

	public function addContact($saveContact)
	{
		$data = array(
			'companyID'			=> 	$saveContact['companyID'],
		   	'EMail' 			=> 	$saveContact['email'],
		   	'ContactName'		=>  $saveContact['cName'],
		   	'ContactNumber' 	=> 	$saveContact['contactNo']
		);

	    if($this->db->insert('contacts', $data))
	    {
	    	$insert_id = $this->db->insert_id();
	     	$this->db->trans_complete();

		 	$arr = array('insert_id' => $insert_id , 'status' => 'Contact Added Successfully!');
	   	 	echo json_encode($arr);

	    	return true;
	    }
	    else
	    {
	   		return false;
	    }
	}

	public function addActivity($saveActivity)
	{
		$data = array(
			'companyID'		=> 	$saveActivity['companyID'],
		   	'Date' 			=> 	$saveActivity['date'],
		   	'Type'			=>  $saveActivity['type'],
		   	'Outcome' 		=> 	$saveActivity['outcome'],
		   	'SalesPerson' 	=> 	$saveActivity['sPerson']
		);

	    if($this->db->insert('activities', $data))
	    {
	    	$insert_id = $this->db->insert_id();
	     	$this->db->trans_complete();

		 	$arr = array('insert_id' => $insert_id , 'status' => 'Activity Added Successfully!');
	   	 	echo json_encode($arr);

	    	return true;
	    }
	    else
	    {
	   		return false;
	    }
	}

}