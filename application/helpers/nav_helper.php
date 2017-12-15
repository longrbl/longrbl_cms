<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/11/30
 * Time: 11:51
 */

function nav(){
 $ci = get_instance();
 $ci->load->model('public/Nva_model');
 $ci->Nva_model->index();


}
