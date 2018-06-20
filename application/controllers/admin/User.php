<?php
/**
 *
 * @authors Cscar
 * @date    2018-2-1 17:16:51
 * 后台用户控制器
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('admin/user_model');
        $this->load->helper('form');
        chk_login();
    }

    public function index() {

        $data['user'] = $this->user_model->list_user();
        $data['a'] = 'user';
        $this->load->view('index/header', $data);
        $this->load->view('admin/users');
        $this->load->view('index/footer');
    }

    public function del() {
        chk_role('user_edit');

        $id = $this->uri->segment(4);
        $this->user_model->del_user($id);
        redirect('admin/user');
    }

    public function edit() {
        chk_role('user_edit');

        $data['a'] = 'user';

        $id = $this->uri->segment(4);
        $data['user'] = $this->user_model->get_user_info($id);

        $this->load->view('index/header', $data);
        $this->load->view('admin/users_edit');
        $this->load->view('index/footer');
    }

    public function edit_do() {
        chk_role('user_edit');
        if ($this->form_validation->run('edit_user') === FALSE) {
            echo validation_errors();
        }
        else {
            if($this->user_model->edit_user()){
                msg('admin/user/index', '修改成功');
            }
        }

    }

    public function add() {
        chk_role('user_edit');

        $data['a'] = 'user_add';

        $this->load->view('index/header', $data);
        $this->load->view('admin/users_add');
        $this->load->view('index/footer');
    }

    public function add_do() {
        chk_role('user_edit');

        if ($this->form_validation->run('reg_user') === FALSE) {
            echo validation_errors();
        }
        else {
            if($this->user_model->add_user()) {
                msg('admin/user/index', '添加用户成功');
            }
            else {
                msg('admin/user/add', '用户已存在');
            }
        }

    }

}