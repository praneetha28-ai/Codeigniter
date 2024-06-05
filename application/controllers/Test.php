<?php 
defined('BASEPATH') OR exit("No direct script access is allowed");

    class Test extends CI_Controller{
        function index()
        {
            $this->load->helper("common_helper");
            echo  add();
        }
        function test_index()
        {
            $this->load->model("my_model");
            $fname = $this->my_model->firstname();
            echo  $fname;
        }
    }
?>