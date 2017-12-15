<?php

/**
 * Created by 龙柏霖.
 * User: Administrator
 * Date: 2016/12/17
 * Time: 16:26
 */
class Login extends CI_Controller
{
    public function index(){
        $post = $this->input->post();
        $data=array('user'=>true);
      if(!empty($post)){
          $this->load->model('admin/Login_model');
          $user = $this->Login_model->dlu($post);
          if(!empty($user) && $user['ztai']!=1){
              $this->load->helper('cookie');
              $cookie = array(
                  'name'   => 'admin_user',
                  'value'  => json_encode(array('admin_user_ztai'=>$user['ztai'],'name'=>$user['title'],'user_zu'=>$user['name'],'cid'=>$user['id'],'user_id'=>$user['userid'])),
                  'expire' => '86500',
                  'path'   => '/',
                  'prefix' => '',
              );
              $this->load->library('session');
            $qxian = unserialize($user['qxian']);
            $url=array(//后台首页的默认权限
             '/admin/index/left',
             '/admin/index/index_op',
             '/admin/index/top',
             '/admin/index/index_ki',
            );
            $qxian = array_merge($qxian,$url);
            $qxian = serialize($qxian);
              $this->session->set_userdata(array('admin_qxian'=>$qxian));
              $this->input->set_cookie($cookie);
              echo '<script language="javascript" type="text/javascript">
                        window.location.href="'.site_url('admin/index/index_op').'";
                        </script>';
          }else{
                $data['user']=false;
          }
      }

        $this->load->view('admin/login',$data);
    }



}