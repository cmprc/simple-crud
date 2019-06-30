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
        $data['chart'] = '['.$this->dashboard_model->get_num_tasks('Finalizada').','.$this->dashboard_model->get_num_tasks('Espera').','.$this->dashboard_model->get_num_tasks('Desenvolvimento').']';
        $data['users'] = $this->dashboard_model->get_busier_users();
        
        $this->load->view('templates/header');
        $this->load->view('templates/menu');
        $this->load->view('dashboard/content', $data);
        $this->load->view('templates/footer');
    }

}