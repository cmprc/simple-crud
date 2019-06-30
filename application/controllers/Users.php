<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Users extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('user_model');
    $this->load->helper('url_helper'); // ler sobre
  }

  // funcao default quando carregada a página 'users'
  public function index()
  {
    $data['users'] = $this->user_model->get_users();
    $data['title'] = 'Usuários';
    $data['subtitle'] = 'Todos os registros da base de dados';
    $data['link'] = 'add';

    $this->load->view('templates/header', $data);
    $this->load->view('users/table', $data);
    $this->load->view('templates/footer');
  }

  // funcao responsavel por carregar a view de um 'user' especifico
  public function view($slug = null)
  {
    if (empty($slug))
      $this->index();
    else{
      $data['title'] = 'Usuários';
      $data['subtitle'] = 'Visualizar usuário presente na base de dados.';
      $data['link'] = 'add';
      $data['user'] = $this->user_model->get_users($slug)[0];

      $this->load->view('templates/header', $data);
      $this->load->view('users/edit', $data);
      $this->load->view('templates/footer');
    }
  }

  public function add(){
    $data['title'] = 'Usuários';
    $data['subtitle'] = 'Cadastrar novo usuário na base de dados.';
    $data['link'] = 'add';

    $this->load->view('templates/header', $data);
    $this->load->view('users/add', $data);
    $this->load->view('templates/footer');
  }

  public function save(){

    if (empty($this->input->post('nome')))
      redirect('users');

    $data = array('nome' => $this->input->post('nome'), 'email' => $this->input->post('email'), 'cargo' => $this->input->post('cargo'));

    if(empty($this->input->post('id')))
      $result = $this->user_model->insert($data);
    else
      $result = $this->user_model->update($data, $this->input->post('id'));
    
    if($result)
      redirect('users');
    else
      echo 'Erro no cadastro de usuários';
  }

  public function delete($id=null){
    if(empty($id))
      $this->index();
    else{
      $result = $this->user_model->delete($id);
      if($result)
        redirect('users');
      else
        echo 'Erro na remoção do usuário';
    }
  }

}
