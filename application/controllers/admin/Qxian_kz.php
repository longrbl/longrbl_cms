<?php

/**
 * Created by 龙柏霖.
 * User: Administrator
 * Date: 2016/12/17
 * Time: 22:15
 */
class Qxian_kz extends Admincontroller
{
    public function add(){
        include APPPATH.'config/type.php';
        $data['list']=$type_name;
        $post = $this->input->post();
      $id = $this->uri->segment(4);
        if(!empty($id)){
            $this->load->model('admin/qxian_model');
           $data['user']=  $this->qxian_model->add_id($id);


        }
        if(!empty($post)){
            $qian=array();
            foreach($post['qian'] as $v){
                if(!empty($v)){
                    $qian[] = $v;
                }
            }
            $post['qian']=serialize($qian);
            $this->load->model('admin/Qxian_model');
            $user = $this->Qxian_model->add($post);
            if($user){
                $this->mss(site_url('/admin/qxian_kz/add'),'提交成功',true);
            }else{
                $this->mss(site_url('/admin/qxian_kz/add'),'提交失败',false);
            }
        }
        $this->load->view('admin/qxian_kz/index',$data);
    }


public function add_list(){
        $this->load->model('admin/Qxian_model');
        if($this->input->is_ajax_request()){
            $id =$this->input->post('id',true);
            if($this->Qxian_model->add_del($id,'admin_zu',array('id'=>$id))){
                echo json_encode(array('title'=>'删除成功'));
                die;
            }else{
                echo json_encode(array('title'=>'删除失败'));
                die;
            }
        }
       $data['list'] = $this->Qxian_model->add_list();
        $this->load->view('admin/qxian_kz/add_list',$data);

}



public function user_list(){
    $this->load->model('admin/Qxian_model');
    $data['list'] = $this->Qxian_model->user_list();
    if($this->input->is_ajax_request()){
       $id = $this->input->post('id',true);

        if(!empty($id)){
            $sql = $this->Qxian_model->add_del($id,'admin_user',array('uid'=>$id));
            if($sql){
                echo json_encode(array('title'=>'删除成功'));
                die;
            }else{
                echo json_encode(array('title'=>'删除失败'));
                die;
            }
        }
    }

    $this->load->view('admin/qxian_kz/user_list',$data);
}


public function add_user(){
    $this->load->model('admin/Qxian_model');
    $post = $this->input->post();
    if(!empty($post)){
       if($post['userpassword']!=$post['userpassword2']){
            $this->mss('/admin/qxian_kz/add_user','两次密码不一样',true);
       }
        $sql = $this->Qxian_model->add_user($post);
        if($sql){
            $this->mss('/admin/qxian_kz/user_list','提交成功',true);
        }else{
            $this->mss('/admin/qxian_kz/add_user','提交失败',true);
        }
    }
    if(!empty($this->uri->segment(4))){
        $data['user']=$this->Qxian_model->get_add_user($this->uri->segment(4));
    }
    $data['list']= $this->Qxian_model->add_list(2);
    $this->load->view('admin/qxian_kz/add_user',$data);
}





}