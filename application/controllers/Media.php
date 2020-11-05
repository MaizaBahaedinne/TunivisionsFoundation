<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';


class Media extends BaseController {

public function __construct()
    {
        parent::__construct();
        $this->load->model('media_model');


    }



	public function mediaListing()
	{
		$data["album"]=$this->media_model->albumListing();
		$this->loadViews("media/album", $this->global, $data , NULL); 
    }
    
    public function mediaById($albumId){

        $data["album"]=$this->media_model->albumContent($albumId);
		$this->loadViews("media/view", $this->global, $data , NULL); 

    }


	




}
