<?php
defined('BASEPATH') OR exit ('No direct script acces allowed');

class Login extends CI_Controller 
{
    public function __construct()
    {
        parent:: __construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->form_validation->set_rules('senha', 'Senha', 'required');
        $this->form_validation->set_rules('email', 'E-mail', 'required');


        if ($this->form_validation->run() == TRUE)
        {
            
            $identity = $this->input->post('email');
            $password = $this->input->post('senha');
            $renember = ($this->input->post('manter_conectado') != NULL ? TRUE : FALSE);

            if($this->ion_auth->login($identity, $password, $renember))
            {
                redirect('admin/principal', 'refresh');
            } else {

                redirect('admin/login', 'refresh');
            }


        } else {
            $this->load->view('admin/template/login');
        }

        
    }

    public function sair()
    {
        $this->ion_auth->logout();
        redirect('admin/login', 'refresh');
    }
}