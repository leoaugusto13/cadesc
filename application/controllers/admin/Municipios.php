<?php
defined('BASEPATH') OR exit ('No direct script acces allowed');

class Municipios extends CI_Controller 
{

    public function __construct(){
        
        parent::__construct();
        if (!$this->ion_auth->logged_in()){
            
            redirect('admin/login');
            
        }
        $this->load->model('municipios_model', 'municipios');
    }
    
    
    public function index()
    {
        $data['titulo'] = 'Lista de Municipios';
        $data['view'] = 'admin/municipios/listar';
        $data['municipios'] = $this->municipios->getMunicipios();
        
        $this->load->view('admin/template/index', $data);
    }

    public function modulo($id=NULL)
    {
        $dados = NULL;
        
        if($id){

            $data['titulo']= 'Atualizar Municipio';
        } else {

            $data['titulo']= 'Novo Municipio';
        }

        $data['dados'] = $dados;
        $data['view'] = 'admin/municipios/modulo';
        $data['navegacao'] = array('titulo'=> 'Lista de Municipios', 'link'=>'admin/usuarios');

        $this->load->view('admin/template/index', $data);


    
    }

    public function core(){
        echo '<pre>';
        print_r($this->input->post());
    }
}
