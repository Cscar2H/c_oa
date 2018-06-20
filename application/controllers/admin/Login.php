<?php
/**
 * 
 * @authors Cscar
 * @date    2017-10-27 01:57:05
 * 后台登录控制器
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	/**
	 * 登录默认方法
	 */
	public function index() {
		//载入验证码辅助函数
		/*$this->load->helper('captcha');

		$speed = 'wqeuwiqrfewfndsmbdsvnsjfbsdfh1234567890';
		$word = '';
		for ($i=0; $i < 4; $i++) { 
			$word .= $speed[mt_rand(0, strlen($speed)-1)];
		}

		//配置项
		$vals = array(
			'word' => $word,
			'img_path' => './static/captcha/',
			'img_url' => base_url() . '/static/captcha/',
			'img_width' => 100,
			'img_height' => 26,
			'expiration' => 30,

			);
		$cap = create_captcha($vals);
		$data['captcha'] = $cap['image'];*/

		$this->load->view('admin/Login');
	}


	/**
	 * 验证码
	 */
	public function code() {
		$this->load->library('Vcode');
		$this->vcode->create();

	}

	/**
	 * 登录验证
	 */
	public function login_in() {
		$code = $this->input->post('cap');
		if (!isset($_SESSION)) {
			session_start();
		}

		if (strtoupper($code) == null || strtoupper($code) != $_SESSION['vcode']) error('验证码错误');

		$username = $this->input->post('username');
        $this->load->model('admin/admin_model', 'user');
        $userData = $this->user->check($username);

        $password = $this->input->post('password');

        if (!$userData || $userData[0]['password'] != md5($password)) error('用户名或者密码不正确');

        $sessionData = array(
            'username' => $username,
            'uid' => $userData[0]['id'],
            'logintime' => time(),
            'role' => $userData[0]['role']
        );

        $this->session->set_userdata($sessionData);

        /*p($sessionData);*/

        success('admin/admin/index', '登录成功');

    }

    /**
     * 退出登录
     */
    public function login_out() {
        $this->session->sess_destroy();
        success('admin/login/index', '退出成功');
    }







}