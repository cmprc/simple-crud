<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tasks extends CI_Controller{

    // construtor do controller
    public function __construct(){
        parent::__construct();
        $this->load->model('task_model');
        $this->load->helper('url_helper');
    }

    // monta a página 'default' do controller (tarefas)
    public function index($slug = false){
        if (!$slug) {
            $data['title'] = 'Tarefas';
            $data['subtitle'] = 'Todos os registros presentes na base de dados.';
            $data['link'] = 'tasks/add';
            $data['tasks'] = $this->task_model->get_tasks();

            $this->load->view('templates/header');
            $this->load->view('templates/title', $data);
            $this->load->view('templates/menu');
            $this->load->view('tasks/list', $data);
            $this->load->view('templates/footer');
        }
        else
            show_404(); // direciona para página do erro 404
    }

    // monta a página de cadastro da tarefa
    public function add(){
        $data['title'] = 'Tarefas';
        $data['subtitle'] = 'Cadastrar nova tarefa na base de dados.';

        $this->load->model('user_model');
        $data['users'] = $this->user_model->get_users();

        $this->load->view('templates/header');
        $this->load->view('templates/title', $data);
        $this->load->view('templates/menu');
        $this->load->view('tasks/add', $data);
        $this->load->view('templates/footer');
    }

    // monta a página view/edit da tarefa
    public function view($slug = null){
        if (empty($slug))
            $this->index();
        else {
            $data['title'] = 'Tarefas';
            $data['subtitle'] = 'Visualizar usuário presente na base de dados.';
            $data['task'] = $this->task_model->get_tasks($slug)[0];

            $this->load->model('user_model');
            $data['users'] = $this->user_model->get_users();

            $this->load->view('templates/header');
            $this->load->view('templates/title', $data);
            $this->load->view('templates/menu');
            $this->load->view('tasks/view', $data);
            $this->load->view('templates/footer');
        }
    }

    // resgata todos os dados passados via POST e os adiciona na base de dados
    public function save(){
        if (empty($this->input->post('titulo')))
            redirect('tasks');

        $data = array('title' => $this->input->post('titulo'), 'description' => $this->input->post('descricao'), 'time' => $this->input->post('tempo'), 'status'=>$this->input->post('status'));

        if ($this->input->post('id') == null)
            $result = $this->task_model->insert($data, $this->input->post('usuarios'));
        else
            $result = $this->task_model->update($data, $this->input->post('id'), $this->input->post('usuarios'));

        if ($result)
            redirect('tasks');
        else
            echo 'Erro no cadastro/edição da tarefa';
    }

    // remove um registro da base de dados
    public function delete($id = null){
        if (empty($id))
            $this->index();
        else {
            $result = $this->task_model->delete($id);
            if ($result)
                redirect('tasks');
            else
                echo 'Erro na remoção do usuário';
        }
    }
}
