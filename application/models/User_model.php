<?php

class User_model extends CI_Model{

    // construtor do model
    public function __construct(){
        $this->load->database();
    }

    // traz todos os usuários da base de dados
    public function get_users($slug=false){
        if(!$slug)
            $query = $this->db->get('users');
        else
            $query = $this->db->get_where('users', array('id' => $slug));
        
        return $query->result('User_model');
    }

    // insere um novo usuário na base de dados
    public function insert($data){
        return $this->db->insert('users', $data);
    }

    // atualiza um usuário na base de dados
    public function update($data, $id){
        return $this->db->update('users', $data, array('id'=>$id));
    }

    // remove um usuário na base de dados
    public function delete($id){
        return $this->db->delete('users', array('id'=>$id));
    }

    // recebe o cargo (integer) e devolve o nome deste por extenso
    public function fullCargo(){
        switch(intval($this->cargo)){
            case 1:
                return 'Administrador';
                break;
            case 2:
                return 'Desenvolvedor Júnior';
                break;
            case 3:
                return 'Desenvolvedor Pleno';
                break;
            case 4:
                return 'Desenvolvedor Sênior';
                break;
            default:
                return '-';
                break;
        }
    }

}