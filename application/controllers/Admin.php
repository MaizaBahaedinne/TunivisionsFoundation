

	<?php if(!defined('BASEPATH')) exit('No direct script access allowed');
require APPPATH . '/libraries/BaseController.php';

class Admin extends BaseController{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('howweare_model');
		$this->load->model('values_model');
		$this->load->model('vision_model');
		$this->load->model('mission_model');
	}



	public function index()
	{
		$this->loadViews("admin/login", $this->global, NULL , NULL); 
	}




}


?>
