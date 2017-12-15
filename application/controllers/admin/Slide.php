<?php

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/12/26
 * Time: 21:12
 */
class Slide extends Admincontroller
{
  public function __construct()
  {
    parent::__construct();
  }

public function index(){
  $this->load->model('admin/Slide_model');
        $post = $this->input->post();
      $id = $this->uri->segment(4);
  if(!empty($id)){
      $data['user'] = $this->Slide_model->get_add($id);
  }
        if(!empty($post)){
          $post['time']=time();
          $sql = $this->Slide_model->add($post);
          if($sql){
            $this->mss('/admin/slide/','增加成功',true);
          }else{
            $this->mss('/admin/slide/','增加成功',false);
          }

        }

        $this->load->view('admin/slide/index',$data);
  }


public function add_list(){
  $this->load->model('admin/Slide_model');
  if($this->input->is_ajax_request()){
        $post = $this->input->post();
        $sql = $this->Slide_model->list_del($post['id']);
        if($sql){
          echo json_encode(array('title'=>'删除成功'));
          die;
          }else{
          echo json_encode(array('title'=>'删除失败'));
          die;
        }
  }



  $data['list'] = $this->Slide_model->add_list();

  $this->load->view('admin/slide/add_list',$data);

}










}