<?php
/**
 *
 * @authors Cscar
 * @date    2017-10-27 01:57:05
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {
    public function __construct() {
        parent::__construct();

        $username = $this->session->userdata('username');
        $id = $this->session->userdata('uid');

        if (!$username || !$id) {
            redirect('admin/login/index');
        }
    }
}