<?php

class Dashboard_model extends CI_Model{

    public function __construct(){
        $this->load->database();
    }

    public function get_num_tasks($status=null){
        if(empty($status))
            return $this->db->count_all('tasks');
        else
            return $this->db->where('status', $status)->count_all_results('tasks');
    }

    public function get_num_users(){
        return $this->db->count_all('users');
    }

    public function get_busier_users(){
        
    }

}