<?php
/**
 *
 * @authors Cscar
 * @date    2017-11-1 14:27:29
 * 后台默认控制器
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends MY_Controller {
    /*
     * 默认方法
     */
    public function __construct() {
        parent::__construct();
    }
    public function index() {

        $this->load->model('admin/score_model');
        $data['score_all_count'] = $this->score_model->count_sco_num('score');
        $data['self_all_count'] = $this->score_model->count_self_num('rating');

        $this->load->view('index/header', $data);
        $this->load->view('index/index');
        $this->load->view('index/footer');
    }

    /*
     * 修改密码
     */
    public function change() {
        $this->load->view('index/header');
        $this->load->view('admin/change_password');
        $this->load->view('index/footer');
    }

    /*
     * 修改&判断
     */
    /**
     *
     */
    public function change_password() {
        $this->load->model('admin/admin_model','user');

        $username = $this->session->userdata('username');
        $userData = $this->user->check($username);

        $password = $this->input->post('password');
        if (md5($password) != $userData[0]['password']) error ('原始密码错误！');

        $newpassword = $this->input->post('newpassword');
        $repassword = $this->input->post('repassword');
        if ($newpassword != $repassword) error ('两次密码不相同！');

        $newpassword = $this->input->post('newpassword');
        $id = $this->session->userdata('uid');

        /*
         * 执行修改
         */
        $data = array(
            'password' => md5($newpassword)
            );
        $this->user->change($id,$data);

        success ('admin/admin/index', '修改成功！');
    }
}