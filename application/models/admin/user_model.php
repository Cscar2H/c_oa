<?php

/**
 * 后台用户管理
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    /**
     * 用户列表
     */
    public function list_user() {
        return $this->db->get('user')->result_array();
    }

    /*
    * 添加用户
    */
    public function add_user() {
        $username = $this->input->post('user');
        $q = $this->db->select('id')->where('username', $username)->get('user')->row_array();
        if ($q === NULL) {
            $data = array(
                'username'	=>	$this->input->post('username'),
                'password'	=>	md5($this->input->post('newpassword')),
                'regtime'	=>	time(),
                'role'		=>	$this->input->post('role'),
                'remark'	=>	$this->input->post('remark')
            );

            return $this->db->insert('user', $data);
        }
        else {
            return false;
        }

    }

    /*
    * 删除用户
    */
    public function del_user($id) {
        return $this->db->delete('user', array('id'=>$id));
    }

    /*
    * 获取用户信息
    */
    public function get_user_info($id) {
        $condition['id'] = $id;
        return $this->db->where($condition)->get('user')->row_array();
    }

    public function edit_user() {
        $data = array(
            'id'		=>	$this->input->post('id'),
            'password'	=>	md5($this->input->post('newpassword')),
            'role'		=>	$this->input->post('role'),
            'remark'	=>	$this->input->post('remark')
        );

        return $this->db->update('user', $data, array('id'=>$data['id']));
    }

}