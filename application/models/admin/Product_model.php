<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/11/29
 * Time: 14:05
 */

class Product_model extends CI_Model
{
  function __construct()
  {
    $this->load->database();
  }


  function get_array()
  {
    $list = $this->db->get('product_confg')->result_array();
    return $this->nav($list);
  }


  function nav(&$list, $id = 0, $li = 0)
  {
    if ($id > 0) {
      $li++;
    }
    static $wangz = array();
    foreach ($list as $v) {
      if ($v['uid'] == $id) {
        $lo = $id > 0 ? '|' : '';
        $v['title'] = $lo . str_repeat('_', $li * 2) . $v['title'];
        $wangz[] = $v;
        $this->nav($list, $v['id'], $li);
      }
    }
    return $wangz;
  }


  function add_data($data)
  {
    $biem = $this->db->select('id')->from('product_confg')->where('aliases', $data['aliases'])->get()->row_array();
    if (!empty($biem) && empty($data['id'])) {
      return false;
    }
    $data['ztai']=1;
    return $this->db->replace('product_confg', $data);


  }


  function get_one($id)
  {

    return $this->db->select('*')->from('product_confg')->where('id', (int)$id)->get()->row_array();

  }


  function list_()
  {
    $data = $this->db->select('*')->from('product_confg')->get()->result_array();
    return $this->nav($data);
  }

  function add($data)
  {
    $nr = $data['content'];
    unset($data['content']);
    $data['time'] = time();
    $jiu = $this->db->replace('product_article', $data);
    $id = $this->db->insert_id();
    if (!empty($id)) {
      return $this->db->replace('product_content', array('uid' => $id, 'content' => $nr));
    } else {
      return $jiu;
    }
  }

  function get_pr_one($id)
  {
    $pr = $this->db->get_where('product_article', array('id' => (int)$id))->row_array();
    $ji = $this->db->select('content')->get_where('product_content', array('uid' => (int)$id))->row_array();
    return array_merge($pr, $ji);
  }


  public function product_list($uid, $limit, $ztai = 1)
  {

    if (!empty($uid)) {
      $this->db->where('product_article.uid', $uid);
    }
   return $this->db->select('product_article.*,product_confg.title as name')->from('product_article')->join('product_confg', 'product_article.uid=product_confg.id', 'left')->where('product_article.ztai', $ztai)->order_by('product_article.id', 'desc')->limit($limit['0'], $limit['1'])->get()->result_array();
  }

  public function conut($uid, $ztai = 1)
  {
    if (!empty($uid)) {
      $this->db->where('uid', $uid);
    }
    $this->db->where('ztai', $ztai);
    return $this->db->count_all_results('product_article');
  }


  public function product_delete($id){
    return $this->db->update('product_article',array('ztai'=>2),array('id'=>$id));
  }
}