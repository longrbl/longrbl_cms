<?php

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/12/27
 * Time: 11:45
 */
class Link_model extends CI_Model
{
  function __construct()
  {
    $this->load->database();
  }

  function add($data){
    return $this->db->replace('link',$data);
  }

  function add_list(){

    return $this->db->order_by('id','desc')->get('link')->result_array();
  }

  function list_del($id){
    return $this->db->delete('link',array('id'=>$id));

  }

  function get_add($id){
    return $this->db-> get_where('link',array('id'=>$id))->row_array();
  }



}