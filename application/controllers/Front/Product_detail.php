<?php 

class Product_detail extends Front_Controller
{
	public function __construct()
	{
		parent:: __construct();

	}

	public function index($id='')
	{	
		$content['data'] = $this->db->select('*')->from('products')->where(array('status' => '1', 'id' => $id))->get()->result();
		$content['main_content'] = 'product-detail';
		$this->load->view('front/inc/view',$content);		

	}

}


?>