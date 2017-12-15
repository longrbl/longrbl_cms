<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/11/30
 * Time: 11:27
 */

/**
 * Class Nva_model 获取导航列表
 */
class Nva_model extends CI_Model
{
  function __construct()
  {
    $this->load->database();
  }
  function index(){
    $list = $this->db->select('*')->from('nav')->get()->result_array();
    print_r($list);
  }

}