<?php

class Task_model extends CI_Model
{

    public function __construct()
    {
        $this->load->database();
    }

    public function get_tasks($slug = false)
    {
        if (!$slug)
            $query = $this->db->get('tasks');
        else
            $query = $this->db->get_where('tasks', array('id' => $slug));

        return $query->result('task_model');
    }

    public function insert($data, $users){
        if($this->db->insert('tasks', $data)){
            $task_id = $this->db->insert_id('tasks');
            foreach ($users as $key => $value)
                $this->db->insert('users_tasks', array('id_user'=>$value, 'id_task'=>$task_id));
        }
        return true;
    }

    public function update($data, $id, $users){
        if($this->db->update('tasks', $data, array('id'=>$id))){
            if($this->db->delete('users_tasks', array('id_task'=>$id))){
                foreach ($users as $key => $value)
                    $this->db->replace('users_tasks', array('id_user'=>$value, 'id_task'=>$id));
            }
        }
        return true;
    }

    public function delete($id){
        return $this->db->delete('tasks', array('id'=>$id));
    }

    public function get_related_users($attribute='nome'){
        $result = '';
        $query = $this->db->select('users.*')->from('users_tasks')->where(array('id_task' => $this->id))->join('users', 'users.id = users_tasks.id_user')->get();
        
        if($attribute == 'nome'){
            if($query->num_rows() > 2)
                return $query->num_rows();
        }
        
        foreach ($query->result_array() as $key => $value)
            $result .= $value[$attribute] . ', ';
        
        return substr($result, 0, strlen($result)-2);
    }

    public function get_deadline($days){
        if(is_numeric($days)){
            $date = new DateTime($this->date);
            return $date->add(new DateInterval('P'.$days.'D'))->format('d.m.Y');
        }
        return $days;
    }

}
