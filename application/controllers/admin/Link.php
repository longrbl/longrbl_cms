<?php

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/12/27
 * Time: 11:42
 */
class Link extends Admincontroller
{

  function __construct()
  {
    parent::__construct();
  }

  function index(){

    $this->load->model('admin/Link_model');
    $post = $this->input->post();
    $id = $this->uri->segment(4);
    if(!empty($id)){
      $data['user'] = $this->Link_model->get_add($id);
    }
    if(!empty($post)){
      $post['time']=time();
      $sql = $this->Link_model->add($post);
      if($sql){
        $this->mss('/admin/link/index','增加成功',true);
      }else{
        $this->mss('/admin/link/index','增加成功',false);
      }

    }

    $this->load->view('admin/link/index',$data);
  }


function link_list(){
  $this->load->model('admin/Link_model');
  if($this->input->is_ajax_request()){
    $post = $this->input->post();
    $sql = $this->Link_model->list_del($post['id']);
    if($sql){
      echo json_encode(array('title'=>'删除成功'));
      die;
    }else{
      echo json_encode(array('title'=>'删除失败'));
      die;
    }
  }



  $data['list'] = $this->Link_model->add_list();

  $this->load->view('admin/link/list',$data);


}
















}