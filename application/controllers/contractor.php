<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contractor extends CI_Controller {

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
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function __construct(){
		parent::__construct();
		$this->load->model('ContractorModel');
	}
	public function index()
	{
		$this->load->helper('url');
		$this->load->view('contractor');
	}
	public function add_contractor(){
		$this->load->helper('url');
		$data['ContractorList'] = $this->ContractorModel->fetch_contractor();
		$this->load->view('add_contractor',$data);
	}
	public function contractorList(){
		header('Content-type: application/json');
		$data = $this->ContractorModel->fetch_contractor();
		$dataArray = array();

		foreach ($data as $val) {
			$record = array();
			$record["contractor_id"] = $val->contractor_id;
			$record["contractor_name"] = $val->contractor_name;
			$record["contractor_code"] = $val->contractor_code;
			$record["contractor_address"] = $val->contractor_address;
			$record["contractor_doj"] = $val->contractor_doj;
			$record["contractor_plan"] = $val->contractor_plan;
			$record["contractor_status"] = $val->contractor_status;
			$record["record_status_id"] = $val->record_status_id;
			$record["record_delete_status"] =$val->record_delete_status;
			array_push($dataArray, $record);
		}
		echo json_encode($dataArray);
	}
}