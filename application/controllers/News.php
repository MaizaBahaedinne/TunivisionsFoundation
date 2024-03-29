<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';


class News extends BaseController {

public function __construct()
    {
        parent::__construct();
        $this->load->model('news_model');

        	$this->isLoggedIn();  	
    }

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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */


	 public function index()
    {

      

       $this->global['pageTitle'] = 'Actualité | ';
       $data["newsRecords"]=$this->news_model->newsListing();
       foreach ($data["newsRecords"] as $new ) {

       		$response = file_get_contents('http://127.0.0.1/Link/API/userAPI/'.$new->createdBy);

            $result = json_decode($response);
          	$new->createdBy =  $result ; 
       }


       
      $this->loadViews("news/list", $this->global, $data , NULL); 

      
    }


	public function new($newId)
	{
		$data["new"]=$this->news_model->newsInfo($newId);

		$response = file_get_contents('http://127.0.0.1/Link/API/userAPI/'.$data["new"]->createdBy);

        $result = json_decode($response);
        $data["new"]->createdBy =  $result ; 
		$this->global['pageTitle'] = $data["new"]->titreFr.' | ';
		$this->loadViews("news/view", $this->global, $data , NULL); 
	}


	public function Add()
	{		
		$this->global['page'] = 'Nouvelles';
		$this->global['pageTitle'] = 'Nouvelles | ';
	       $data["newsRecords"]=$this->news_model->newsListing();
	       foreach ($data["newsRecords"] as $new ) {

       		$response = file_get_contents('http://127.0.0.1/Link/API/userAPI/'.$new->createdBy);
            $result = json_decode($response);
          	$new->createdBy =  $result ; 
          	$response = file_get_contents('http://127.0.0.1/Link/API/clubInfoAPI/'.$new->clubId);
            $result = json_decode($response);
            $new->club =  $result ;
       }
		$this->loadViews("news/listback", $this->global, $data , NULL); 
	}

	public function Edit($newId)
	{
		$data["new"]=$this->news_model->newsInfo($newId);
		$this->loadViews("news/edit", $this->global, $data , NULL); 
	}


	function addNew()
	{
						$titreFr = $this->input->post('titreFr');
						$contentFr = $this->input->post('contentFr');
						$titreAr = $this->input->post('titreAr');
						$contentAr = $this->input->post('contentAr');
						$titreEn = $this->input->post('titreEn');
						$contentEn = $this->input->post('contentEn');
				        $file_name = '_'.$_FILES['media']['name'];
		                $file_tmp = $_FILES['media']['tmp_name'];
		                
		                $file_destination = 'uploads/news/' . $file_name;
				            
				            $newsInfo = array('titreFr'=> $titreFr ,
											  'contentFr'=>$contentFr,
											  'titreAr'=> $titreAr ,
											  'contentAr'=>$contentAr,
											  'titreEn'=> $titreEn,
				                              'contentEn'=>$contentEn,
				                              'createdBy'=>$this->vendorId,
				                               'createdDTM'=>date('Y-m-d H:i:s'),
				                               'media' => $file_name ,
				                               'mediaType' => "photo"
											 );
			 if(move_uploaded_file ($file_tmp, $file_destination) )
                  { 

                  	$resualt =  $this->news_model->addNew($newsInfo) ;	
				           if( $resualt > 0 )
				           {

				           		$this->session->set_flashdata('success', 'l\'actualité a été ajouté avec succées');
				           		redirect('/News/new/'.$resualt)  ;
				           }
				            else
				            {
				                $this->session->set_flashdata('error', 'Mise à jour erronée ');
				            } 
				    }
				          
				         
	}


	function editNew($newId)
	{
						$titreFr = $this->input->post('titreFr');
						$contentFr = $this->input->post('contentFr');
						$titreAr = $this->input->post('titreAr');
						$contentAr = $this->input->post('contentAr');
						$titreEn = $this->input->post('titreEn');
						$contentEn = $this->input->post('contentEn');

				        $file_name = 'avatar__'.$name.'_'.$_FILES['media']['name'];
		                $file_tmp = $_FILES['media']['tmp_name'];
		                 
		                $file_destination = 'uploads/news/' . $file_name;
				            
				            $newsInfo = array('titreFr'=> $titreFr ,
											  'contentFr'=>$contentFr,
											  'titreAr'=> $titreAr ,
											  'contentAr'=>$contentAr,
											  'titreEn'=> $titreEn,
				                              'contentEn'=>$contentEn,
				                               'createdDTM'=>date('Y-m-d H:i:s'),
				                               'media' => $file_name ,
				                               'mediaType' => "photo"
				                             );
				if(move_uploaded_file($file_tmp, $file_destination) )
                  { 

                  	$resualt =  $this->news_model->editNew($newsInfo, $newsId) ;	
				           if( $resualt > 0 )
				           {

				           		$this->session->set_flashdata('success', 'l\'actualité a été ajouté avec succées');
				           }
				            else
				            {
				                $this->session->set_flashdata('error', 'Mise à jour erronée ');
				            }
				    }
				          
				          redirect('/News/new/'.$resualt)  ;
	}




}
