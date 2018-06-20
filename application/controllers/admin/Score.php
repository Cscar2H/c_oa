<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * score Controller
 */
class Score extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/score_model');
        chk_login();
        //$this->output->enable_profiler(TRUE);
    }

    /**
    * view all score
    */
    public function all() {
        $data['a'] = 'score_view';
        $data['score'] = $this->score_model->list_all_sco();

        $this->load->view('index/header', $data);
        $this->load->view('score/score_view_all');
        $this->load->view('index/footer');
    }

    /**
     * edit
     */
    public function edit() {
        chk_role('sco_edit');

        $data['a'] = 'score_view';

        $id = $this->uri->segment(4);
        $data['sco'] = $this->score_model->select_sco_by_id($id);
        if(empty($data['sco'])) {
            show_error('此人不存在', '', 'msg');
        }
        $this->load->view('index/header', $data);
        $this->load->view('score/score_edit');
        $this->load->view('index/footer');
    }

    public function edit_do() {
        chk_role('sco_edit');

        if($this->form_validation->run('score_edit') === TRUE) {
            $id = $this->input->post('sco_id');
            $data = array(
                'username'		=>	$this->input->post('username'),
                'work_name'		=>	$this->input->post('work_name'),
                'situation'		=>	$this->input->post('situation'),
                'self_rating'	=>	$this->input->post('self_rating'),
                'grade'		    =>	$this->input->post('grade'),
                'captain'		=>	$this->input->post('captain')
            );
            $this->score_model->update_sco($id, $data);
            msg('admin/score/all', '修改成功!');

        }
        else {

            $data['a'] = 'score_view';
            $data['message'] = validation_errors().'<a href="javascript:history.go(-1);"><返回</a>';
            $data['heading'] = '';

            $this->load->view('index/header', $data);
            $this->load->view('errors/index.html');
            $this->load->view('index/footer');
        }
    }

    /**
     * del
     */
    public function del() {
        chk_role('sco_edit');

        $id = $this->uri->segment(4);
        $this->score_model->del_sco($id);
        redirect('admin/score/all');
    }

    /**
     * staff
     */
    public function staff() {
        chk_role('staff');

        $data['a'] = 'score_staff';

        $this->load->view('index/header', $data);
        $this->load->view('score/score_staff');
        $this->load->view('index/footer');
    }
    public function staff_do() {
        chk_role('staff');

        if ($this->form_validation->run('score_staff') === FALSE) {
            $data['a'] = 'score_staff';

            $this->load->view('index/header', $data);
            $this->load->view('score/score_staff');
            $this->load->view('index/footer');
        }
        else {
            $data_rat = array(
                'username'		=>	$this->input->post('username'),
                'work_name'	    =>	$this->input->post('work_name'),
                'situation'		=>	$this->input->post('situation'),
                'self_rating'	=>	$this->input->post('self_rating')
            );

            $self_id = $this->score_model->add_rating($data_rat);

            $data_sco = array(
                'self_id'	    =>	$self_id,
                'username'		=>	$this->input->post('username'),
                'work_name'	    =>	$this->input->post('work_name'),
                'situation'		=>	$this->input->post('situation'),
                'self_rating'	=>	$this->input->post('self_rating')
            );

            $this->score_model->add_sco($data_sco);
            msg('admin/score/staff', '提交成功!');

        }
    }

    /**
     * grade
     */
    public function grade_all() {
        $data['a'] = 'grade';
        $data['score'] = $this->score_model->list_all_sco();

        $this->load->view('index/header', $data);
        $this->load->view('score/score_grade');
        $this->load->view('index/footer');
    }

    /**
     * grade rating
     */
    public function grade() {
        chk_role('grade');

        $data['a'] = 'score_view';

        $id = $this->uri->segment(4);
        $data['sco'] = $this->score_model->select_sco_by_id($id);
        if(empty($data['sco'])) {
            show_error('此人不存在', '', 'msg');
        }

        $this->load->view('index/header', $data);
        $this->load->view('score/score_grade_do');
        $this->load->view('index/footer');

    }

    public function grade_do() {
        chk_role('grade');


            $id = $this->input->post('sco_id');
            $data = array(
                'username'		=>	$this->input->post('username'),
                'work_name'		=>	$this->input->post('work_name'),
                'situation'		=>	$this->input->post('situation'),
                'self_rating'	=>	$this->input->post('self_rating'),
                'grade'		    =>	$this->input->post('grade'),
                'captain'		=>	$this->input->post('captain')
            );
            $this->score_model->update_grade($id, $data);
            msg('admin/score/grade_all', '赋分成功!');

    }
}