<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AjaxSearch extends CI_Controller{
	public function index()
	{
		$this->load->view('ajaxsearch');
	}
    //call the data through ajax
    public function fetch()
    {
        $output = '';
        $query = '';
        $this ->load->model('ajaxsearch_model');
        if($this->input->post('query'))
        {
            $query = $this->input->post('query');
        }
        $data = $this ->ajaxsearch_model->fetch_data($query);
        $output.='
        <div class="table-responsive"></div>
        ';
    }
}
