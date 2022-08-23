<?php
defined('BASEPATH') OR exit ('No direct script acces allowed');

function setMsg($id, $msg, $tipo)
{

    $CI =& get_instance();
    switch($tipo)
    {
        case 'erro':
            $CI->session->set_flashdata($id, '<div class="alert alert-danger" role"alert">'. $msg  .'</div>');
        break;

        case 'sucesso':
        $CI->session->set_flashdata($id, '<div class="alert alert-success role"success">'. $msg  .'</div>');
        break;


    }
return FALSE;
}

/* Função para Buscar uma Mensagem */
function getMsg($id)
{
    
    $CI =& get_instance();
    
    if($CI->session->flashdata($id))
    {
         echo $CI->session->flashdata($id);
         
    }

}

function errosValidacao()
{
    if (validation_errors())
    {
        echo '<div class="alert alert-danger" role="alert">' . validation_errors() . '</div>';
    }
}