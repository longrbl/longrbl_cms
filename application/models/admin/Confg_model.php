<?php

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/1/11
 * Time: 9:47
 */
class Confg_model extends CI_Model
{

    function __construct()
    {
        $this->load->database();
    }


    function insert_($data)
    {
        return $this->db->replace('confg', $data);
    }


    function get_($id)
    {
        return $this->db->get_where('confg', array('id' => $id))->row_array();
    }


    function nav_add($data)
    {
      print_r($data);
        return $this->db->replace('nav', $data);
    }

    function get_nav()
    {
        $data = $this->db->select('id,title,uid')->from('nav')->get()->result_array();
        return $this->nav($data);
    }

    function get_nav_one($id)
    {
       return $this->db->select('*')->from('nav')->where('id',$id)->get()->row_array();

    }
    function get_nav_all()
    {
        $data = $this->db->select('*')->from('nav')->get()->result_array();
        return $data;
        return $this->nav($data);
    }


    function add_kzq($data)
    {
        return $this->db->replace('Controller', $data);
    }

    function kzq_list($id)
    {
        if ($id > 0) {
            return $this->db->get_where('Controller', array('id' => $id))->row_array();
        } else {
            return $this->db->get_where('Controller', array('pid' => $id))->result_array();

        }

    }

    function kzq_list_p()
    {
        return $this->db->get('Controller')->result_array();

    }

    function delete_($id){
        $get = $this->db->get_where('nav',array('uid'=>(int) $id))->row_array();
        if(empty($get)){
            return $this->db->where('id',(int) $id)->delete('nav');
        }else{
            return false;
        }
    }

    /*
     * $list 需要遍历的数据库
     * $id 第一次遍历条件
     */
    function list_op(&$list, $id = 0)
    {
        static $wangz = array();
        foreach ($list as $v) {
            if ($v['pid'] == $id) {
                $wangz[] = $v;
                $this->list_op($list, $v['id']);
            }
        }
        return $wangz;
    }

    function nav(&$list, $id = 0, $li = 0)
    {
        if($id>0){
            $li++;
        }
        static $wangz = array();
        foreach ($list as $v) {
            if ($v['uid'] == $id) {
                $lo = $id>0?'|':'';
                $v['title'] = $lo.str_repeat('_', $li *2) . $v['title'];
                $wangz[] = $v;
                $this->nav($list, $v['id'], $li);
            }

        }

        return $wangz;
    }


}