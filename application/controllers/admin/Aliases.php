<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/11/29
 * Time: 11:40
 */

class Aliases extends Admincontroller
{
  public function __construct()
  {
    parent::__construct();
  }


  function index()
  {
    $post = $this->input->post();
    $this->load->model('admin/Aliases_model');
    if (!empty($post)) {

      $re = $this->Aliases_model->add($post);
      if ($re) {
        $this->mss('/admin/aliases/index', '成功');
      } else {
        $this->mss('/admin/aliases/index', '失败');
      }
    }

    $id = intval($this->uri->segment(4));
    if (!empty($id) && $id > 0) {
      $data['user'] = $this->Aliases_model->get_one($id);
    }
    $data['list'] = $this->Aliases_model->list_();
    $this->load->view('admin/aliases/index', $data);
  }


  function list_()
  {
    $this->load->model('admin/Aliases_model');
    $is_post = $this->input->post('id');
    if (!empty($is_post)) {
      $re = $this->Aliases_model->delete_te($is_post);
      if ($re) {
        echo json_encode(array('title' => '成功'));
      } else {
        echo json_encode(array('title' => '失败'));
      }
      die;
    }


    $data['list'] = $this->Aliases_model->list_();

    $this->load->view('admin/aliases/list', $data);
  }

}