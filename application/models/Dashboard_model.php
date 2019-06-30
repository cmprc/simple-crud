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
        return $this->db->select('users.nome, COUNT(users.id) as quantidade FROM users INNER JOIN users_tasks ON users.id = users_tasks.id_user')->group_by('users.nome')->order_by('quantidade', 'DESC')->limit(5)->get()->result_array();
    }

}