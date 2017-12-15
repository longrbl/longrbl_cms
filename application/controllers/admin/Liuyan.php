<?php

/**
 * Created by 龙柏霖.
 * User: Administrator
 * Date: 2016/12/23
 * Time: 10:36
 */
class Liuyan extends Admincontroller
{

  public function __construct()
  {
    parent::__construct();
  }

  public function index(){
    $this->load->model('admin/Liuyan_model');
    if($this->input->is_ajax_request()){
      if($this->input->post('cz',true)=='sc'){
        $sql = $this->Liuyan_model->liuyan_del($this->input->post('id',true));
        if($sql){
          echo json_encode(array('title'=>'删除成功'));
          die;
        }else{
          echo json_encode(array('title'=>'删除失败'));
          die;
        }
      }else{
        $sql = $this->Liuyan_model->liuyan_update($this->input->post('id',true));
        if($sql){
          echo json_encode(array('title'=>'成功'));
          die;
        }else{
          echo json_encode(array('title'=>'失败'));
          die;
        }
      }
    }
    $uid =$this->uri->segment(4);
    $this->load->library('pagination');
    $config['base_url'] = '/admin/liuyan/index/';
    $config['total_rows'] = $this->Liuyan_model->conut();
    $config['uri_segment'] = 4;
    $config['per_page'] = 20;
    $config['num_tag_open'] = '<li>';
    $config['num_tag_close'] = '</li>';
    $config['cur_tag_open'] ='<li class="am-active"><a href="#">';
    $config['cur_tag_close']='</a></li>';
    $config['first_tag_open'] = '<li>';
    $config['first_tag_close'] = '</li>';
    $config['last_tag_open'] = '<li>';
    $config['last_tag_close'] = '</li>';
    $config['next_tag_open'] = '<li>';
    $config['next_tag_close'] = '</li>';
    $config['prev_tag_open'] = '<li>';
    $config['prev_tag_close'] = '</li>';
    $this->pagination->initialize($config);
    $data['list']= $this->Liuyan_model->liuyan_list(array($config['per_page'],$uid));

    $this->load->view('admin/liuyan/index',$data);
  }
























}