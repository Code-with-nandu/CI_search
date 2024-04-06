<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TestController extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
		$this->load->model('TestModel');
    }
	public function index()
	{
		$key= $this->input->post('key',true);
		$data['store']=$this->TestModel->set($key);
		$this->load->view('TestView.php',$data);
	}
}
