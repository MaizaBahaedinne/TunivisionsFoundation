<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Class : Login (LoginController)
 * Login class to control to authenticate user credentials and starts user's session.
 * @author : Kishor Mali
 * @version : 1.1
 * @since : 15 November 2016
 */
class Login extends CI_Controller
{
    /**
     * This is default constructor of the class
     */
    public function __construct()
    {
        parent::__construct();

    }

    /**
     * Index Page for this controller.
     */
    public function index()
    {
        $this->isLoggedIn();
    }
    
    /**
     * This function used to check the user is logged in or not
     */
    function isLoggedIn()
    {
        $isLoggedIn = $this->session->userdata('isLoggedIn');
        
        if(!isset($isLoggedIn) || $isLoggedIn != TRUE)
        {       
                     
             $this->load->view('Login');

        }
        else
        {           
            redirect('');
        }
    }
    
    
    /**
     * This function used to logged in user
     */
    public function loginMe()
    {
      
            $email = $this->input->post('email');
            $password = $this->input->post('password');
            
            $response = file_get_contents('http://127.0.0.1/Link/API/AuthentificationAPI/'.$email.'/'.$password);
            $result = json_decode($response);
            
                var_dump($result) ;
            if(!empty($result))
            {
                
                


                $sessionArray = array('userId'=>$result->userId,                    
                                        'role'=>$result->roleId,
                                        'clubID'=>$result->ClubID,
                                        'avatar'=>$result->avatar,
                                        'roleText'=>$result->role,
                                        'name'=>$result->name,
                                        'cellule' => $result->cellule,
                                        'isDeleted' => $result->isDeleted ,
                                        'SA' => $result->SA ,
                                        'isLoggedIn' => TRUE ,
                                    );

                $this->session->set_userdata($sessionArray);

              
                    
                redirect('');
            }
            else
            {
                
                
                     $this->session->set_flashdata('error', 'adresse e-mail introuvable');
                        
                
               $this->index();
            }

    }


  

   

    /**
     * This function used to load forgot password view
     */
    public function forgotPassword()
    {
        $isLoggedIn = $this->session->userdata('isLoggedIn');
        
        if(!isset($isLoggedIn) || $isLoggedIn != TRUE)
        {
            $this->load->view('forgotPassword');
        }
        else
        {
            redirect('/dashboard');
        }
    }
    
    /**
     * This function used to generate reset password request link
     */
    function resetPasswordUser()
    {
        
    }

    /**
     * This function used to reset the password 
     * @param string $activation_id : This is unique id
     * @param string $email : This is user email
     */
    function resetPasswordConfirmUser($activation_id, $email)
    {
        // Get email and activation code from URL values at index 3-4
        $email = urldecode($email);
        
        // Check activation id in database
        $is_correct = $this->login_model->checkActivationDetails($email, $activation_id);
        
        $data['email'] = $email;
        $data['activation_code'] = $activation_id;
        
        if ($is_correct == 1)
        {
            $this->load->view('newPassword', $data);
        }
        else
        {
            redirect('/Login');
        }
    }
    
    /**
     * This function used to create new password for user
     */
    function createPasswordUser()
    {
        $status = '';
        $message = '';
        $email = strtolower($this->input->post("email"));
        $activation_id = $this->input->post("activation_code");
        
        $this->load->library('form_validation');
        
        $this->form_validation->set_rules('password','Password','required|max_length[20]');
        $this->form_validation->set_rules('cpassword','Confirm Password','trim|required|matches[password]|max_length[20]');
        
        if($this->form_validation->run() == FALSE)
        {
            $this->resetPasswordConfirmUser($activation_id, urlencode($email));
        }
        else
        {
            $password = $this->input->post('password');
            $cpassword = $this->input->post('cpassword');
            
            // Check activation id in database
            $is_correct = $this->login_model->checkActivationDetails($email, $activation_id);
            
            if($is_correct == 1)
            {                
                $this->login_model->createPasswordUser($email, $password);
                
                $status = 'success';
                $message = 'Password reset successfully';
            }
            else
            {
                $status = 'error';
                $message = 'Password reset failed';
            }
            
            setFlashData($status, $message);

            redirect("/login");
        }
    }

        /**
     * This function is used to logged out user from system
     */
    function Register () {

        
        redirect("/Register");
    }



}

?>