<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Municipios_model extends CI_Model
{
   public function getMunicipios()
   {
       return $this->db->get('cad_municipios')->result();
   }
}