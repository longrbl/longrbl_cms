<?php

/**
 * Created by 龙柏霖.
 * User: Administrator
 * Date: 2016/12/22
 * Time: 9:45
 */
class News extends Admincontroller
{

  public function __construct()
  {
    parent::__construct();
  }


  public function index()
  {
    $this->load->model('admin/News_model');

    $post = $this->input->post();
    if (!empty($post)) {
      $post['time'] = time();
      $post['ztai'] = 1;
      $sql = $this->News_model->add_news($post);
      if ($sql) {
        $this->mss('/admin/news/index', '提交成功', true);
      } else {
        $this->mss('/admin/news/index', '提交失败', false);
      }
    }
    $id = $this->uri->segment(4);
    if (!empty($id)) {
      $data['user'] = $this->News_model->get_news($id);
    }
    $data['list'] = $this->News_model->get_add_lanm('', '', false);
    $this->load->view('admin/news/index', $data);
  }


  public function news_list()
  {
    $this->load->model('admin/News_model');
    if ($this->input->is_ajax_request()) {
      $sql = $this->News_model->news_del($this->input->post('id', true));
      if ($sql) {
        echo json_encode(array('title' => '删除成功'));
        die;
      } else {
        echo json_encode(array('title' => '删除失败'));
        die;
      }
    }
    $data['lnam_id'] = $uid = $this->input->post('uid', true) ? $this->input->post('uid', true) : $this->uri->segment(4, 0);
    $p_uid = $this->uri->segment(5);

    $data['lanm'] = $this->News_model->get_add_lanm('', '', false);
    $this->load->library('pagination');
    $config['base_url'] = '/admin/news/news_list/' . $uid;
    $config['total_rows'] = $this->News_model->conut($uid);
    $config['uri_segment'] = 5;
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
    $data['list'] = $this->News_model->news_list($uid, array($config['per_page'], $p_uid));

    $this->load->view('admin/news/news_list', $data);
  }

  /**
   *增加栏目
   */
  public function add_lnam()
  {
    $post = $this->input->post();
    $this->load->model('admin/News_model');
    if ($post) {
      $data = array(
       'title' => $post['title'],
       'key' => $post['key'],
       'miaos' => $post['miaos'],
       'image' => $post['image'],
       'leix' => $post['leix'],
       'time' => time(),
       'uid' => $post['uid'],
       'aliases' => $post['aliases']
      );

      if (!empty($post['id'])) {
        $data['id'] = $post['id'];
      }
      if ($post['leix'] == 1) {
        $data['url'] = $post['url'];
      } elseif ($post['leix'] == 2) {
        $data['content'] = $post['content'];
      }
      $sql = $this->News_model->add_lnam($data);
      if ($sql) {
        $this->mss('/admin/news/add_list', '提交成功', true);
      } else {
        $this->mss('/admin/news/add_add_lnam', '提交失败', false);
      }
    }
    $id = $this->uri->segment(4);
    if (!empty($id)) {
      $data['user'] = $this->News_model->get_add_lnam($id);
    }
    $data['list'] = $this->News_model->get_add_lanm();
    $this->load->view('admin/news/add_lnam', $data);
  }

  public function add_list()
  {
    $this->load->model('admin/News_model');

    if ($this->input->is_ajax_request()) {
      $id = $this->input->post('id', true);
      $sql = $this->News_model->add_list_del($id);
      if ($sql) {
        echo json_encode(array('title' => '删除成功'));
        die;
      } else {
        echo json_encode(array('title' => '删除失败'));
        die;
      }
    }
    $data['list'] = $this->News_model->get_add_lanm('', '');

    $this->load->view('admin/news/add_list', $data);
  }


  public function hsxian()
  {
    $this->load->model('admin/News_model');
    if ($this->input->is_ajax_request()) {
      $sql = $this->News_model->news_del($this->input->post('id', true));
      if ($sql) {
        echo json_encode(array('title' => '删除成功'));
        die;
      } else {
        echo json_encode(array('title' => '删除失败'));
        die;
      }
    }
    $data['lnam_id'] = $uid = $this->input->post('uid', true) ? $this->input->post('uid', true) : $this->uri->segment(4, 0);
    $p_uid = $this->uri->segment(5);
    $data['lanm'] = $this->News_model->get_add_lanm('', '', false);
    $this->load->library('pagination');
    $config['base_url'] = '/admin/news/news_list/' . $uid;
    $config['total_rows'] = $this->News_model->conut($uid, 2);
    $config['uri_segment'] = 5;
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
    $data['list'] = $this->News_model->news_list($uid, array($config['per_page'], $p_uid), 2);

    $this->load->view('admin/news/hsxian', $data);

  }


}