<?php 

	class Home extends MY_Controller
	{
		
		public function index()
		{
			$this->data['temp'] = 'admin/home/index';
			$this->load->view('admin/main', $this->data);
		}
	}
 ?>