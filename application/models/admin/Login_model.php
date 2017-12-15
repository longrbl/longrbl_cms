<?php

/**
 * Created by 龙柏霖.
 * User: Administrator
 * Date: 2016/12/17
 * Time: 18:13
 */
class Login_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }
    /**
     *登录
     */
    function dlu($post){
        return $this->db->select('admin_zu.qxian,admin_zu.name,admin_user.name as title,admin_zu.id,admin_user.ztai,admin_user.uid as userid')->from('admin_user')->join('admin_zu','admin_user.zuo_uid=admin_zu.id')->where('admin_user.name',$post['name'])->where('admin_user.mima',md5($post['mima'].'longrbl'))->get()->row_array();
    }

  /**
   *获取所有的留言
   */
  function top(){
    return $this->db->where('ztai','0')->count_all_results('liuyan');
  }

}