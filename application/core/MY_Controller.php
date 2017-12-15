<?php

/**
 * Created by 龙柏霖.
 * User: 后台控制器
 * Date: 2016/12/18
 * Time: 13:24
 */
class MY_Controller extends CI_Controller
{
//  static  public $uaer;

    public function __construct()
    {
        parent::__construct();
//        $this->qixanpan_duan();

    }
    /**
     * @param $url   要跳转的url
     * @param $sjian 要等待的时间
//     */
//function mss($url='',$nr,$ztai,$sjian='3'){
//    $data['url'] =$url;
//    $data['sjian']=$sjian;
//    $data['ztai']=$ztai;
//    $data['nr'] = $nr;
//
//    $this->load->view('errors/index',$data);
//
//}
//function qixanpan_duan(){
//  if(empty($this->user)){
//    $_W = json_decode($this->input->cookie('admin_user', TRUE),true);
//    $url = $this->uri->segment(1);
//    $url .='/'. $this->uri->segment(2);
//    $url .='/'. $this->uri->segment(3);
//    $this->load->library('session');
//    $qxian = unserialize($this->session->userdata('admin_qxian'));
//      if(empty($_W['name'])){
//      $url = site_url('admin/login');
//      header("Location: $url");
//      die;
//    }
//    if($_W['user_id']!=1){
//      if(!in_array('/'.$url,$qxian)){
//        die('你还没有获取当前权限');
//      }
//    }
//    $this->user = $_W;
//  }else{
//    return true;
//  }
//
//}

}


//-------------------前端控制器--------------------//


class Qduan extends MY_Controller{
function __construct()
{
parent::__construct();
}


}
//-------------------后端控制器--------------------//

class Admincontroller extends MY_Controller{

  static  public $uaer;

  public function __construct()
  {
    parent::__construct();
    $this->qixanpan_duan();
  }
  function mss($url='',$nr,$ztai,$sjian='3'){
    $data['url'] =$url;
    $data['sjian']=$sjian;
    $data['ztai']=$ztai;
    $data['nr'] = $nr;
    $this->load->view('errors/index',$data);
  }
  function qixanpan_duan(){
    if(empty($this->user)){
      $_W = json_decode($this->input->cookie('admin_user', TRUE),true);
      $url = $this->uri->segment(1);
      $url .='/'. $this->uri->segment(2);
      $url .='/'. $this->uri->segment(3);
      $this->load->library('session');
      $qxian = unserialize($this->session->userdata('admin_qxian'));
      if(empty($_W['name'])){
        $url = site_url('admin/login');
        header("Location: $url");
        die;
      }
      if($_W['user_id']!=1){
        if(!in_array('/'.$url,$qxian)){
          die('你还没有获取当前权限');
        }
      }
      $this->user = $_W;
    }else{
      return true;
    }

  }


}