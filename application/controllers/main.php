<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

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
		$this->load->helper('directory');
		$this->load->library('email');
		// $this->load->library('form_validation');
		$this->load->library('session');
		$this->load->model('getrowinfomodel');
		$this->load->model('updateinfomodel');
		$this->load->model('addinfomodel');
		$this->load->helper('text');
		$this->load->helper('form');
	} 

	// public function index()
	// {
	// 	$this->load->view('admin/login');
	// }

	public function index()
	{

	}

	public function addCompany()
	{
		$saveCompany = array(
			'companyName'	=> $this->input->post('companyName'),
			'address' 		=> $this->input->post('address'),
			'regNo' 		=> $this->input->post('regNo'),
			'website' 		=> $this->input->post('website')
		);

		if($this->addinfomodel->addCompany($saveCompany))
        {
        	// $this->load->library('email');

			$this->email->from('info@crm.com', 'CRM');
			$this->email->to('arulpragash.sockalingam@gmail.com');

			$this->email->subject('Email Test');
			$this->email->message('Testing the email class.'.$saveCompany['companyName']. ' '.$saveCompany['website']);

			$this->email->send();

            return true;
        }
        else
        {
            return false;
        }
	}

	public function editCompany()
	{
		$updateCompany = array(
			'companyid'			=>	$this->input->post('companyid'),
			'companyName'		=>	$this->input->post('companyName'),
			'address'		    =>	$this->input->post('address'),
			'regNo'				=>	$this->input->post('regNo'),
			'website'			=>	$this->input->post('website')
		);

		if($this->updateinfomodel->updateCompanyData($updateCompany))
        {
            return true;
        }
        else
        {
            return false;
        }
	}


	public function addContact()
	{
		$saveContact = array(
			'companyID'		=> $this->input->post('companyID'),
			'email' 		=> $this->input->post('email'),
			'cName' 		=> $this->input->post('cName'),
			'contactNo' 	=> $this->input->post('contactNo')
		);

		if($this->addinfomodel->addContact($saveContact))
        {
            return true;
        }
        else
        {
            return false;
        }
	}

	public function editContact()
	{
		$updateContact = array(
			'contactID'		=> $this->input->post('contactID'),	
			'companyID'		=> $this->input->post('companyID'),
			'email' 		=> $this->input->post('email'),
			'cName' 		=> $this->input->post('cName'),
			'contactNo' 	=> $this->input->post('contactNo')
		);

		if($this->updateinfomodel->updateContactData($updateContact))
        {
            return true;
        }
        else
        {
            return false;
        }
	}

	public function addActivity()
	{
		$saveActivity = array(
			'companyID'		=> $this->input->post('companyID'),
			'date' 			=> $this->input->post('date'),
			'type' 			=> $this->input->post('type'),
			'outcome' 		=> $this->input->post('outcome'),
			'sPerson' 		=> $this->input->post('sPerson')
		);

		if($this->addinfomodel->addActivity($saveActivity))
        {
            return true;
        }
        else
        {
            return false;
        }
	}

	public function editActivity()
	{
		$updateActivity = array(
			'activityID'	=> $this->input->post('activityID'),
			'companyID'		=> $this->input->post('companyID'),
			'date' 			=> $this->input->post('date'),
			'type' 			=> $this->input->post('type'),
			'outcome' 		=> $this->input->post('outcome'),
			'sPerson' 		=> $this->input->post('sPerson')
		);

		if($this->updateinfomodel->updateActivityData($updateActivity))
        {
            return true;
        }
        else
        {
            return false;
        }
	}

}