<?php

class User_model extends CI_Model{

    public function __construct(){
        $this->load->database();
    }

    public function get_users($slug=false){
        if(!$slug)
            $query = $this->db->get('users');
        else
            $query = $this->db->get_where('users', array('id' => $slug));
        
        return $query->result('User_model');
    }

    public function insert($data){
        return $this->db->insert('users', $data);
    }

    public function update($data, $id){
        return $this->db->update('users', $data, array('id'=>$id));
    }

    public function delete($id){
        return $this->db->delete('users', array('id'=>$id));
    }

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