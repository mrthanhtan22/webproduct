<?php 

	class Home extends CI_Controller
	{
		public function index()
		{
			
			$data['temp'] = 'site/home/index';
			$this->load->view('site/layout', $data);
		}
	}
 ?>