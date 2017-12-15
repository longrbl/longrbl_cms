<?php

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/12/27
 * Time: 11:06
 */
class Slide_model extends CI_Model
{
  function __construct()
  {
    $this->load->database();
  }

  function add($data){
    return $this->db->replace('slide',$data);
  }

  function add_list(){

    return $this->db->order_by('id','desc')->get('slide')->result_array();
  }

function list_del($id){
    return $this->db->delete('slide',array('id'=>$id));

  }

function get_add($id){
   return $this->db-> get_where('slide',array('id'=>$id))->row_array();
}

}