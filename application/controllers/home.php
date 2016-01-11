<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	
	public function __construct()
    {
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->model('userModel');
		$this->load->model('getrowinfomodel');
		$this->load->helper('form');
	} 

	public function index()
	{
		$this->load->view('home');
	}
	
	public function AddNewCustomer()
	{
		$this->load->view('addNewCustomer');
	}

	public function editCustomer($customerid)
	{
		$data['custData'] = $this->getrowinfomodel->getCustomerData($customerid);

		$this->load->view('EditCustomer', $data);
	}

	public function CustomerList()
	{
		$data['custList'] = $this->userModel->getCustomerList();

		$this->load->view('customerList', $data);
	}

	public function AddNewContact()
	{
		$data['cust'] = $this->userModel->getCustomerList();

		$this->load->view('addNewContact', $data);
	}

	public function editContact($contactid)
	{
		$data['cust'] = $this->userModel->getCustomerList();
		$data['conData'] = $this->getrowinfomodel->getContactData($contactid);
		
		$this->load->view('EditContact', $data);
	}

	public function ContactList()
	{
		$data['conList'] = $this->userModel->getContactList();

		$this->load->view('contactList', $data);
	}

	public function AddNewActivity()
	{	
		$data['cust'] = $this->userModel->getCustomerList();
		$data['sp'] = $this->userModel->getSalesPersonList();

		$this->load->view('addNewActivity', $data);
	}

	public function editActivity($activityid)
	{	
		$data['cust'] = $this->userModel->getCustomerList();
		$data['sp'] = $this->userModel->getSalesPersonList();
		$data['actData'] = $this->getrowinfomodel->getActivityData($activityid);

		$this->load->view('EditActivity', $data);
	}
	
	public function ActivityList()
	{	
		$data['act'] = $this->userModel->getActivityList();

		$this->load->view('activityList', $data);
	}

}