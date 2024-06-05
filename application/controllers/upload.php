<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Upload extends CI_Controller {


	public function index()
	{
        $this->load->helper('url');
		$this->load->view('upload_view');
	}
    public function do_upload()
    {
        $config['upload_path']          = './assets/uploads';
        $config['allowed_types']        = 'gif|jpg|png|pdf';
        
        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('customfile'))
        {
            $error = array('error' => $this->upload->display_errors());

            echo json_encode($error); 
            die ();
        }
        else
        {
            $data = array('upload_data' => $this->upload->data());

            echo "File uploaded successfully";
        }
    }
	
}
