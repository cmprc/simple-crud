<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('dashboard_model');
        $this->load->helper('url_helper');
    }

	public function index(){
        $data['tasks_num'] = $this->dashboard_model->get_num_tasks();
        $data['users_num'] = $this->dashboard_model->get_num_users();
        $data['numbers'] = '['.$this->dashboard_model->get_num_tasks('Finalizada').','.$this->dashboard_model->get_num_tasks('Espera').','.$this->dashboard_model->get_num_tasks('Desenvolvimento').']';
        
        $data['title'] = 'Dashboard';
        $data['subtitle'] = 'Visualização geral do sistema.';
        $data['link'] = '#';
        
        $this->load->view('templates/header', $data);
        $this->load->view('dashboard/content', $data);
        $this->load->view('templates/footer');
    }

}