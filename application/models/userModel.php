<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class UserModel extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		// $this->load->library('session');
	}


	public function getCustomerList()
	{
		$this->db->select('*');
		$this->db->from('customers');

		$query = $this->db->get();
		return $query;
	}

	public function getContactList()
	{
		$this->db->select('t.*,c.*');
		$this->db->from('contacts t, customers c');

		$this->db->where('t.CompanyID = c.CompanyID');

		$query = $this->db->get();
		return $query;
	}

	public function getSalesPersonList()
	{
		$this->db->select('*');
		$this->db->from('salesperson');

		$query = $this->db->get();
		return $query;
	}

	public function getActivityList()
	{
		$this->db->select('a.*,s.*,c.*');
		$this->db->from('activities a, salesperson s, customers c');

		$this->db->where('a.SalesPerson = s.SalesPersonID');
		$this->db->where('a.CompanyID = c.CompanyID');

		$query = $this->db->get();
		return $query;

	}
}