<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/11/29
 * Time: 13:57
 */

class Product extends Admincontroller
{
  function __construct()
  {
    parent::__construct();
  }


  function index()
  {
    $post = $this->input->post();
    $this->load->model('admin/Product_model');
    if (!empty($post)) {
      if (!empty($post['image_list'])) {
        $post['image_list'] = json_encode($post['image_list']);
      }
      $sji = $this->Product_model->add($post);
      if ($sji) {
        $this->mss('/admin/product/index', '成功');
      } else {
        $this->mss('/admin/product/index', '失败');
      }
    }
    $id = $this->uri->segment(4);
    if (!empty($id)) {
      $data['user'] = $this->Product_model->get_pr_one($id);
      $data['user']['image_list'] = json_decode($data['user']['image_list'], true);
    }
    $data['list'] = $this->Product_model->list_();
    $this->load->view('/admin/product/index', $data);
  }

  function add_lanm()
  {
    $this->load->model('admin/Product_model');
    $data['list'] = $this->Product_model->get_array();
    $is_post = $this->input->post();
    if (!empty($is_post)) {
      $data = $this->Product_model->add_data($is_post);
      if ($data) {
        $this->mss('/admin/product/add_lanm', '成功');
      } else {
        $this->mss('/admin/product/add_lanm', '失败');
      }
    }

    $id = intval($this->uri->segment(4));
    if (!empty($id) && $id > 0) {
      $data['user'] = $this->Product_model->get_one($id);
    }

    $this->load->view('admin/product/add_lanm', $data);
  }


  function list_()
  {

    $this->load->model('admin/Product_model');
    $data['list'] = $this->Product_model->list_();

    $this->load->view('admin/product/list', $data);
  }




  function product_list($ztai=1){
    $id = $this->input->post('id');
    $this->load->model('admin/Product_model');
    if(!empty($id)){
      $ji = $this->Product_model->product_delete($id);
      if($ji){
        echo json_encode(array('title'=>'成功'));
        }else{
        echo json_encode(array('title'=>'失败'));
      }
    die;
    }
    $data['lnam_id'] = $uid = $this->input->post('uid', true) ? $this->input->post('uid', true) : $this->uri->segment(5, 0);
    $p_uid = $this->uri->segment(6,0);
    $this->load->library('pagination');
    $config['base_url'] = '/admin/product/product_list/' . $uid;
    $config['total_rows'] = $this->Product_model->conut($uid,$ztai);
    $config['uri_segment'] = 6;
    $config['per_page'] = 20;
    $config['num_tag_open'] = '<li>';
    $config['num_tag_close'] = '</li>';
    $config['cur_tag_open'] = '<li class="am-active"><a href="#">';
    $config['cur_tag_close'] = '</a></li>';
    $config['first_tag_open'] = '<li>';
    $config['first_tag_close'] = '</li>';
    $config['last_tag_open'] = '<li>';
    $config['last_tag_close'] = '</li>';
    $config['next_tag_open'] = '<li>';
    $config['next_tag_close'] = '</li>';
    $config['prev_tag_open'] = '<li>';
    $config['prev_tag_close'] = '</li>';
    $this->pagination->initialize($config);
    $data['lanm'] = $this->Product_model->list_();
    $data['list'] = $this->Product_model->product_list($uid, array($config['per_page'], $p_uid),$ztai);
    $this->load->view('admin/product/product_list',$data);

  }


}