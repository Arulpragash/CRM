<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class getrowinfomodel extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->library('session');
	}
 
	public function index()
	{	
		
	}

	function getCustomerData($customerid)
	{
  		$this->db->select('*');
	    $this->db->from('customers');
	   	$this->db->where('CompanyID',$customerid);
	
		$query = $this->db->get();
		return $query->row();
	}

	function getContactData($contactid)
	{
		$this->db->select('c.*, n.*');
		$this->db->from('customers c, contacts n');
		$this->db->where('n.ContactID', $contactid);
		$this->db->where('n.CompanyID = c.CompanyID');
		
		$query = $this->db->get();
		return $query->row();
	}

	function getActivityData($activityid)
	{
		$this->db->select('c.*, a.*, s.*');
		$this->db->from('customers c, activities a, salesperson s');
		$this->db->where('a.ActivityID', $activityid);
		$this->db->where('a.CompanyID = c.CompanyID');
		$this->db->where('a.SalesPerson = s.SalesPersonID');

		$query = $this->db->get();
		return $query->row();
	}
}