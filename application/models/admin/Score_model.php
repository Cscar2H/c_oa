<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *  分数
 */

class Score_model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    /*list all info*/
    public function list_all_sco() {
        return $this->db->order_by('sco_id', 'DESC')->get('score')->result_array();
    }

    /*list detail
    public function list_sco() {
        return $this->db->query("
			SELECT
			sco_id,
			date,

			name,

			dis
			FROM score,
			WHERE
			")
            ->result_array();
    }*/

    /*get a sco info by id*/
    public function select_sco_by_id($id) {
        return $this->db->where(array('sco_id'=>$id))->get('score')->result_array();
    }

    /*update sco info*/
    public function update_sco($id, $data) {
        return $this->db->update('score', $data, array('sco_id'=>$id));
    }

    /*del score*/
    public function del_sco($id) {
        return $this->db->delete('score', array('sco_id'=>$id));
    }

    /*self rating*/
    public function add_rating($data) {
        $this->db->insert('rating', $data);
        return $this->db->insert_id();
    }

    /*score*/
    public function add_sco($data) {
        return $this->db->insert('score', $data);
    }

    /*self rating count*/
    public function count_self_num($db) {
        return $this->db->count_all_results($db);
    }

    /*grade count*/
    public function count_sco_num($db) {
        return $this->db->count_all_results($db);
    }

    /*update sco info*/
    public function update_grade($id, $data) {
        return $this->db->update('score', $data, array('sco_id'=>$id));
    }

}