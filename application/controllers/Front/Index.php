<?php 

class Index extends Front_Controller
{
	public function __construct()
	{
		parent:: __construct();

	}

	public function index()
	{	
		$content['data'] = $this->db->select('*')->from('products')->where(array('status' => '1'))->get()->result();
		$content['main_content'] = 'shop';
		$this->load->view('front/inc/view',$content);		

	}

}


?>