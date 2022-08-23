<?php
defined('BASEPATH') OR exit ('No direct script acces allowed');

class Usuarios extends CI_Controller 
{

    public function __construct(){

        parent::__construct();
        
        if(!$this->ion_auth->logged_in())
        {
            redirect('admin/login');
        }
        $this->load->library('form_validation');
    }


    public function index()
    {
        $data['titulo'] = 'Lista de Usuários';
        $data['view'] = 'admin/usuarios/listar';
        $data['usuarios'] = $this->ion_auth->users()->result();
        
        $this->load->view('admin/template/index', $data);
    }

    public function modulo($id=NULL)
    {
              
        $dados = NULL;
        if($id)
        {
        
        $dados = $this->ion_auth->user($id) ->row();
        if( !$dados )
        {
            setMsg('msgCadastro', 'Usuário não encontrado', 'erro');
            
            redirect('admin/usuarios','refresh');
            
        }
            
        $data['titulo']= 'Atualizar Usuário';
    }else {

            $data['titulo']= 'Novo Usuário';
        }

        $data['dados'] = $dados;
        $data['view'] = 'admin/usuarios/modulo';
        $data['navegacao'] = array('titulo'=> 'Lista de Usuários', 'link'=>'admin/usuarios');

        $this->load->view('admin/template/index', $data);


    
    }

    public function core()
    {
        $this->form_validation->set_rules('nome', 'Nome', 'trim|required|min_length[5]');
        $this->form_validation->set_rules('email', 'E-mail', 'trim|required|valid_email');
        if( !$this->input->post('id_usuario')){
            $this->form_validation->set_rules('senha', 'Senha', 'trim|required|min_length[6]|max_length[8]');
        }
        

        if ($this->form_validation->run() == TRUE)
        {
            $username = $this->input->post('nome');
            $password = $this->input->post('senha');
            $email = $this->input->post('email');
            $additional_data = NULL;
                        
            $group = array('1'); // Sets user to usuarios.

            if($this->input->post('id_usuario'))
            {
                $id = $this->input->post('id_usuario');

                $data['username'] = $this->input->post('nome');
                $data['email'] = $this->input->post('email');
                $data['active'] = $this->input->post('status');
                
                if($this->input->post('senha')){
                    $data['password'] = $this->input->post('senha');
                }

                if($this->ion_auth->update($id, $data)){
                    setMsg('msgCadastro', 'Usuário atualizado com sucesso', 'sucesso');
                    redirect('admin/usuarios','refresh');
                    
                } else{
                    setMsg('msgCadastro', 'Erro ao cadastrar usuário', 'erro');
                    redirect('admin/usuarios','refresh');
                }             
                

            } else{
                
                if($this->ion_auth->register($username, $password, $email, $additional_data, $group))
            {
                setMsg('msgCadastro', 'Usuário cadastrado com sucesso', 'sucesso');
                redirect('admin/usuarios/modulo', 'refresh');
           
            

        }else{

            setMsg('msgCadastro', 'Erro ao cadastrar usuário', 'erro');
            redirect('admin/usuarios','refresh');
        }

            }
        
            
        
    }else {
        $this->modulo();
    }
}

public function deletarUsuario($id_usuario=NULL)
{

    if($id_usuario)
    {
        //Verifica se esta tentado apagar o usuario master
    if($id_usuario ==1){

        setMsg('msgCadastro', 'Você não tem permissão para apagar este usuário', 'erro');
        redirect('admin/usuarios','refresh');
    }

    if($id_usuario == $this->session->userdata('user_id'))
    {
        setMsg('msgCadastro', 'Seu usuário não pode ser excluído', 'erro');
        redirect('admin/usuarios','refresh');
    }

    if($this->ion_auth->delete_user($id_usuario)){
        setMsg('msgCadastro', 'Usuário excluido com sucesso', 'sucesso');
        redirect('admin/usuarios','refresh');
    } else {
        setMsg('msgCadastro', 'Erro ao excluir um usuário', 'erro');
        redirect('admin/usuarios','refresh');
    }
    
    } else {
        setMsg('msgCadastro', 'Usuário deve ser selecionado', 'erro');
        redirect('admin/usuarios','refresh');
    }
    

}
}