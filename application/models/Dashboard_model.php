<?php

class Dashboard_model extends CI_Model{

    // construtor do model
    public function __construct(){
        $this->load->database();
    }

    // pega o número de tarefas registradas no banco de dados
    public function get_num_tasks($status=null){
        if(empty($status))
            return $this->db->count_all('tasks'); // todas as tarefas
        else
            return $this->db->where('status', $status)->count_all_results('tasks'); // tarefas com determinado status
    }

    // pega o número de usuários registrados na base de dados
    public function get_num_users(){
        return $this->db->count_all('users');
    }

    // traz os 5 usuários com mais tarefas vinculadas na base de dados
    public function get_busier_users(){
        return $this->db->select('users.nome, COUNT(users.id) as quantidade FROM users INNER JOIN users_tasks ON users.id = users_tasks.id_user')->group_by('users.nome')->order_by('quantidade', 'DESC')->limit(5)->get()->result_array();
    }

}