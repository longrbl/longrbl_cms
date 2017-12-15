<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/11/30
 * Time: 11:06
 */
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends Qduan
{
  public function index(){
//    $this->output->enable_profiler(TRUE);
    $this->load->model('Index_model');
//    print_r($this->Index_model->index_nav());
    nav();
  }
}