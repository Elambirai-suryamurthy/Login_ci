<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	
	public function index()
	{
		$this->load->view('login');
    }
    public function process(){
        // Load the model
        $this->load->model('login_model');
        // Validate the user can login
        $result = $this->login_model->validate();
        // Now we verify the result
        if(!$result){
            // If user did not validate, then show them login page again
            $this->load->view('login');
        }else{
            // If user did validate, 
            // Send them to members area
            redirect('welcome');




        }        
    }
}


?>