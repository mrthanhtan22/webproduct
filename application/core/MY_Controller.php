<?php 

	class MY_Controller extends CI_Controller
	{
		public $data = array();
		 function __construct()
		{
			parent::__construct();
			$controller = $this->uri->segment(1);
			switch ($controller) {
				case 'admin':
				{
					$this->load->helper('admin');
					$this->_check_login();
					break;
				}
				default:
					{

					}
			}
		}
		private function _check_login(){
			$controller = $this->uri->rsegment('1');
			$controller = strtolower($controller);

			$login= $this->session->userdata('login');
			/*chua dang nhap va khac login*/
			if (!$login && $controller != 'login') {
				redirect(admin_url('login'));
			} 
			if ($login && $controller == 'login') {
				redirect(admin_url('home'));
			}
		}
	}
 ?>