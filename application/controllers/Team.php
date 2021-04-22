<?php if(!defined('BASEPATH')) exit('No direct script access allowed');
require APPPATH . '/libraries/BaseController.php';

class Team extends BaseController {
	public function __construct()
	{
		parent::__construct();
		
	}

	public function clubsUniversity()
	{
		$this->global['pageTitle'] = 'Clubs University | ';
		$this->global['page'] = 'Clubs University';
		$response = file_get_contents('http://127.0.0.1/Link/API/clubListingAPI/0');
		$data['clubRecords'] = json_decode($response);

      	$this->loadViews("team/list", $this->global, $data , NULL); 

		
	}


		public function clubsHighSchool()
	{
		$this->global['pageTitle'] = 'Clubs High School | ';
		$this->global['page'] = 'Clubs High School';
		$response = file_get_contents('http://127.0.0.1/Link/API/clubListingAPI/1');
		$data['clubRecords'] = json_decode($response);

      	$this->loadViews("team/list", $this->global, $data , NULL); 

		
	}



	public function Club($clubId)
	{
		$response = file_get_contents('http://127.0.0.1/Link/API/clubAPI/'.$clubId);
		$data = json_decode($response);
		$this->global['pageTitle'] = 'Clubs Tunivisions '.$data->clubInfo->name .' | ';
		$this->global['page'] = 'Clubs Tunivisions '.$data->clubInfo->name;
		

      	$this->loadViews("team/view", $this->global, $data , NULL); 

		
	}


}
?>
