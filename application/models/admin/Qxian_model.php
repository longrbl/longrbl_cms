<?php

/**
 * Created by 龙柏霖.
 * User: Administrator
 * Date: 2016/12/18
 * Time: 19:17
 */
class Qxian_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    public function add($post){
        $data = array(
            'name'=>$post['name'],
            'qxian'=>$post['qian'],
            'time'=>time(),
            'ztai'=>$post['ztai'],
            'miaos'=>$post['miaos']
        );

        if(!empty($post['id'])){
            $data['id']=$post['id'];
        }
        return $this->db->replace('admin_zu',$data);
    }


    public function add_list($type=''){
        if(empty($type)){
            return $this->db->get('admin_zu')->result_array();
        }else{
            return $this->db->get_where('admin_zu',array('ztai'=>$type))->result_array();
        }
    }

    public function add_id($id){
        return $this->db->get_where('admin_zu',array('id'=>$id))->row_array();
    }

    public function add_del($id,$zu,$array=array()){
        if($id=='1'){
            return false;
        }else{
            return $this->db->delete($zu,$array);
        }

    }

public function user_list(){
    return $this->db->select('admin_user.name,admin_user.uid,admin_user.time,admin_user.ztai,admin_user.miaos,admin_zu.name as title')->from('admin_user')->join('admin_zu','admin_user.zuo_uid=admin_zu.id')->get()->result_array();
}

public function add_user($post){

    $data = array(
        'name'=>$post['name'],
        'ztai'=>$post['ztai'],
        'time'=>time(),
        'zuo_uid'=>$post['zuo_uid'],
        'miaos'=>$post['miaos']
    );
    if(!empty($post['userpassword'])){
       $data['mima']= md5($post['userpassword'].'longrbl');
    }
    if(!empty($post['id'])){
        $data['uid']=$post['id'];
    }else{
        $sql = $this->db->get_where('admin_user',array('name'=>$post['name']))->row_array();
        if($sql){
            return false;
        }
    }

    return $this->db->replace('admin_user',$data);
}

public function get_add_user($uid){
    return $this->db->get_where('admin_user',array('uid'=>$uid))->row_array();
}

}