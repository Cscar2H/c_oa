<?php

/**
 * 后台用户
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {
    /**
     * 查询后台用户数据
     */
    public function check($username) {
       $data = $this->db->get_where('user', array('username'=>$username))->result_array();
       /*$data = $this->db->where(array('username'=>$username))->get('user')->result_array();*/
       return $data;
    }

    /**
     * 修改密码
     */
    public function change($id,$data) {
        $this->db->update('user', $data, array('id'=>$id));
    }


}