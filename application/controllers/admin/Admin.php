<?php
Class Admin extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('admin_model');
    }
    
    /*
     * Lay danh sach admin
     */
    function index()
    {
        $input = array();
        $list = $this->admin_model->get_list($input);
        $this->data['list'] = $list;
        
        $total = $this->admin_model->get_total();
        $this->data['total'] = $total;

        $this->session->flashdata('message');
        $this->data['message'] = $message;
        
        $this->data['temp'] = 'admin/admin/index';
        $this->load->view('admin/main', $this->data);


    }
    
    /*
     * Kiểm tra username đã tồn tại chưa
     */
    function check_username()
    {
        $username = $this->input->post('username');
        $where = array('username' => $username);
        //kiêm tra xem username đã tồn tại chưa
        if($this->admin_model->check_exists($where))
        {
            //trả về thông báo lỗi
            $this->form_validation->set_message(__FUNCTION__, 'Tài khoản đã tồn tại');
            return false;
        }
        return true;
    }
    
    /*
     * Thêm mới quản trị viên
     */
    function add()
    {
        $this->load->library('form_validation');
        $this->load->helper('form');
        
        //neu ma co du lieu post len thi kiem tra
        if($this->input->post())
        {
            $this->form_validation->set_rules('name', 'Tên', 'required|min_length[8]');
            $this->form_validation->set_rules('username', 'Tài khoản đăng nhập', 'required|callback_check_username');
            $this->form_validation->set_rules('password', 'Mật khẩu', 'required|min_length[6]');
            $this->form_validation->set_rules('re_password', 'Nhập lại mật khẩu', 'matches[password]');
            
            //nhập liệu chính xác
            if($this->form_validation->run())
            {
                //them vao csdl
                $name     = $this->input->post('name');
                $username = $this->input->post('username');
                $password = $this->input->post('password');
                
                $data = array(
                    'name'     => $name,
                    'username' => $username,
                    'password' => md5($password)
                );
                if($this->admin_model->create($data))
                { 
                    //tạo ra nội dung thông báo
                 $this->session->set_flashdata('message','Thêm mới dữ liệu thành công'); 
                }else{
                $this->session->set_flashdata('message','Thêm that bai'); 
                }
                //chuyen tới trang danh sách quản trị viên
                redirect(admin_url('admin'));
            }
        }
        
        $this->data['temp'] = 'admin/admin/add';
        $this->load->view('admin/main', $this->data);
    }
    function edit(){
        $this->load->library('form_validation');
        $this->load->helper('form');

        $id = $this->uri->segment(3);
        $id = intval($info);

        //lay thong tin thanh vien
        $info = $this->admin_model->get_info($id);
        if (!$info) {
             $this->session->set_flashdata('message','khong co tai khoan'); 
             redirect(admin_url('admin'));
        }

        if($this->input->post())
        {
            $this->form_validation->set_rules('name', 'Tên', 'required|min_length[8]');
            $this->form_validation->set_rules('username', 'Tài khoản đăng nhập', 'required|callback_check_username');
            if ($password) {
                $this->form_validation->set_rules('password', 'Mật khẩu', 'required|min_length[6]');
                $this->form_validation->set_rules('re_password', 'Nhập lại mật khẩu', 'matches[password]');
            }
            
       
            if ($this->form_validation->run()) {
                $name     = $this->input->post('name');
                $username = $this->input->post('username');
                $password = $this->input->post('password');

                $data = array(
                    'name'     => $name,
                    'username' => $username,
                    if ($password) {
                       'password' => md5($password)
                    });

            }
            if($this->admin_model->upload($data, $id)){
                $this->session->set_flashdata('message','Sua doi dữ liệu thành công'); 
            } else{
                 $this->session->set_flashdata('message','Sua doi dữ liệu that bai'); 
            }
        }
        $this->data['temp'] = 'admin/admin/upload';
        $this->load->view('admin/main', $this->data);
}
    function delete(){
        echo "456";
    }
}



