<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/11/29
 * Time: 11:59
 */

class Aliases_model extends CI_Model
{

  function __construct()
  {
    $this->load->database();
  }


  function add($data)
  {
    $id = $this->db->select('id')->from('aliases')->where('aliases', $data['aliases'])->get()->row_array();
    if (!empty($id) && empty($data['id'])) {
      return false;
    }

    return $this->db->replace('aliases', $data);
  }

  function list_()
  {
    $list = $this->db->select('*')->from('aliases')->get()->result_array();

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

  function get_one($id)
  {
    return $this->db->select('*')->from('aliases')->where('id', $id)->get()->row_array();
  }

  /**
   * @param $id 删除栏目
   * @return bool|CI_DB_active_record|CI_DB_result
   */
  function delete_te($id)
  {
    $data = $this->db->select('id')->from('aliases')->where('uid', (int)$id)->get()->row_array();
    if (!empty($data)) {
      return false;
    }
    return $this->db->where('id', $id)->delete('aliases');

  }
}