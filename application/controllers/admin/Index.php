<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends Admincontroller {

    public function __construct()
    {
        parent::__construct();
    }

public function index_op(){
    $this->load->view('admin/index');
}

public function left(){
    $data['user'] = json_decode($this->input->cookie('admin_user',true),true);
    $this->load->library('session');
    $data['secc'] = unserialize($this->session->userdata('admin_qxian'));

    include APPPATH.'config/type.php';
    $data['list']=$type_name;
    $data['user']=json_decode($this->input->cookie('admin_user', TRUE),true);

    $this->load->view('admin/left',$data);
}

public function top(){
    if($this->input->is_ajax_request()){
        if($this->input->post('cz',true)=='tc'){
            $this->load->helper('cookie');
            $cookie = array(
                'name'   => 'admin_user',
                'value'  => '',
                'expire' => '-86500',
                'path'   => '/',
                'prefix' => '',
            );
            $this->input->set_cookie($cookie);
            echo json_encode(array('title'=>'成功退出系统'));
            die;
        }
    }
  $data['user'] = json_decode($this->input->cookie('admin_user',true),true);
  $this->load->model('admin/Login_model');
  $data['liuyan'] = $this->Login_model->top();
    $this->load->view('admin/top',$data);
}


public function index_ki(){
    $this->load->view('admin/index_p');
}


}