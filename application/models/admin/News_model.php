<?php

/**
 * Created by 龙柏霖.
 * User: Administrator
 * Date: 2016/12/22
 * Time: 11:08
 */
class News_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    public function add_lnam($data)
    {
//        if (empty($post['id'])) {
//            $sql = $this->db->select('id')->get_where('news_confg', array('title' => $data['title']))->row_array();
//        }
//
//        if (empty($sql)) {
//          print_r($data);
//          die;
            return $this->db->replace('news_confg', $data);
//        } else {
//            return false;
//        }

    }

    public function get_add_lanm($id = '', $array = array(), $u = true)
    {
        if (empty($id)) {
            $sql = $this->db->select('id,title,image,leix,time,url,uid')->get('news_confg')->result_array();
            return $this->get_array($sql);
        } else {

            return $this->db->get_where('news_confg', $array)->row_array();
        }
    }

    /**
     * @param $aji
     * @param string $id
     * @return mixed递归函数
     */
    function get_array(&$aji, $id = 0, $li = 0)
    {
        if ($id > 0) {
            $li++;
        }
        static $array=array();
        foreach ($aji as $v) {
            if ($v['uid'] == $id) {
                $lo = $id>0?'|':'';
                $v['title'] =$lo.str_repeat('__', $li * 2) . $v['title'];
                $array[] = $v;
                $this->get_array($aji, $v['id'], $li);
            }
        }
        return $array;
    }


    public function add_list_del($id)
    {
        $sql = $this->db->get_where('news_article', array('uid' => $id))->row_array();
        if (!empty($sql)) {
            return false;
        } else {
            return $this->db->delete('news_confg', array('id' => $id));
        }
    }

    public function get_add_lnam($id)
    {
        return $this->db->get_where('news_confg', array('id' => $id))->row_array();
    }


    public function add_news($data)
    {
        $content = $data['content'];
        unset($data['content']);
        $this->db->replace('news_article', $data);
        return $this->db->replace('news_article_content', array('content' => $content, 'uid' => $this->db->insert_id()));


    }

    public function get_news($id)
    {
        return $this->db->select('news_article.*,news_article_content.content')->from('news_article')->join('news_article_content', 'news_article.id=news_article_content.uid', 'left')->where('news_article.id', $id)->get()->row_array();

    }

    public function news_list($uid, $limit, $ztai = 1)
    {
        if (!empty($uid)) {
            $this->db->where('news_article.uid', $uid);
        }
        return $this->db->select('news_article.*,news_confg.title as name')->from('news_article')->join('news_confg', 'news_article.uid=news_confg.id', 'left')->order_by('news_article.id', 'desc')->where('news_article.ztai', $ztai)->limit($limit['0'], $limit['1'])->get()->result_array();

    }

    public function conut($uid, $ztai = 1)
    {
        if (!empty($uid)) {
            $this->db->where('uid', $uid);
            $this->db->where('ztai', $ztai);
        }
        return $this->db->count_all_results('news_article');
    }

    public function news_del($id, $type = 1)
    {
        if ($type == 2) {
            $this->db->delete('news_article', array('id' => $id));
            return $this->db->delete('news_article_content', array('uid' => $id));
        } else {
            return $this->db->update('news_article', array('ztai' => 2), array('id' => $id));
        }

    }


}