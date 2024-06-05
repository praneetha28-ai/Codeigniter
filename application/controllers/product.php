<?php 
    defined("BASEPATH") OR exit("No direct script access allowed");
    class product extends CI_Controller    {
        
        public function index(){
            $this->load->library('form_validation');
            $this->load->helper('form');

            $this->form_validation->set_rules('username','Username','required|alpha');
            $this->form_validation->set_rules('email','Email','required|valid_email');
            $this->form_validation->set_rules('password','Password','required|alpha_numeric|min_length[6]|max_length[10]');
            
            if($this->form_validation->run() == FALSE)
            {
                $this->load->view('forms');
            }   else
            {      
                echo "Validation true";     
            }
        }

    }
    
?>