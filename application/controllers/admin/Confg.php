<?php

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/12/31
 * Time: 15:34
 */
class Confg extends Admincontroller
{

  function __construct()
  {
    parent::__construct();
  }

  function index()
  {
    $post = $this->input->post();
    $this->load->model('admin/Confg_model');
    if (!empty($post)) {
      if ($post['type'] == 'wangzsz') {
        $sql = $this->Confg_model->insert_(array('id' => 1, 'key' => 'wangz_confg', 'value' => json_encode($post), 'time' => time()));
        if ($sql) {
          $this->mss('/admin/confg/index', '增加成功', true);
        } else {
          $this->mss('/admin/confg/index', '增加失败', true);
        }
      }
      if ($post['type'] == 'duanx') {
        $sql = $this->Confg_model->insert_(array('id' => 2, 'key' => 'duanx', 'value' => json_encode($post), 'time' => time()));
        if ($sql) {
          $this->mss('/admin/confg/index', '增加成功', true);
        } else {
          $this->mss('/admin/confg/index', '增加失败', true);
        }
      }
    }

    $confg = $this->Confg_model->get_(1);
    $data['wangz_confg'] = json_decode($confg['value'], true);
    $confg1 = $this->Confg_model->get_(2);
    $data['duanx'] = json_decode($confg1['value'], true);

    $this->load->view('admin/confg/index', $data);
  }


  public function nav()
  {
    $this->load->model('admin/Confg_model');
    $id = $this->input->post('id');
    if (!empty($id)) {
      $retu = $this->Confg_model->delete_($id);
      if ($retu) {
        echo json_encode(array('title' => '删除成功'));
      } else {
        echo json_encode(array('title' => '删除失败'));
      }
      die;

    }
    $this->load->model('admin/Confg_model');
    $data['list'] = $this->Confg_model->get_nav_all();
    $this->load->view('admin/confg/nav', $data);
  }


  public function nav_add()
  {
    $this->load->model('admin/Confg_model');
    $post = $this->input->post();

    if (!empty($post)) {
      $post['time'] = time();
      $sql = $this->Confg_model->nav_add($post);
      if ($sql) {
        $this->mss('/admin/confg/nav_add', '增加成功', true);
      } else {
        $this->mss('/admin/confg/nav_add', '增加失败', false);
      }
    }

    $id = $this->input->get('id');
    if (!empty($id)) {//编辑
      $data['add'] = $this->Confg_model->get_nav_one($id);
    }
    print_r($data['add']);
    $data['list'] = $this->Confg_model->get_nav();
    $this->load->view('admin/confg/nav_add', $data);
  }


  public function kzq()
  {

    $post = $this->input->post();
    $this->load->model('admin/Confg_model');
    if (!empty($post)) {

      $post['time'] = time();
      $sql = $this->Confg_model->add_kzq($post);
      if ($sql) {
        $this->mss('/admin/confg/kzq/', '增加成功', true);
      } else {
        $this->mss('/admin/confg/kzq/', '增加失败', false);
      }
    }

    $data['list'] = $this->Confg_model->list_op($this->Confg_model->kzq_list(0));
    $id = $this->uri->segment(4);
    if (!empty($id)) {
      $data['user'] = $this->Confg_model->kzq_list($id);
    }
    $this->load->view('admin/confg/kzq', $data);


  }


  public function kzq_list()
  {

    $this->load->model('admin/Confg_model');
    $data['list'] = $this->Confg_model->list_op($this->Confg_model->kzq_list_p());
    $this->load->view('admin/confg/kzq_list', $data);

  }


}