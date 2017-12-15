<?php

/**
 * Created by 龙柏霖.
 * User: Administrator
 * Date: 2016/12/23
 * Time: 10:44
 */
class Liuyan_model extends CI_Model
{
  public function __construct()
  {
    $this->load->database();
  }

  public function liuyan_list($limit){
    return $this->db->select('*')->from('liuyan')->order_by('ztai asc,id desc')->limit($limit['0'],$limit['1'])->get()->result_array();

  }

  public function conut(){
    return $this->db->count_all_results('liuyan');
  }

  public function liuyan_del($id){
      return $this->db->delete('liuyan',array('id'=>$id));
  }
  public function liuyan_update($id){
    return $this->db->update('liuyan',array('ztai'=>1),array('id'=>$id));
  }

}