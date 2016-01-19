<?php
class modelo_usuarios extends CI_Model { 
   public function __construct() {
      parent::__construct();
   }
   
   public function agregarUsuario($data) {
     $str= $this->db->insert('usuarios',$data);
     return $str;
       
   }
   public function getUsuarios() {
       $this->db->select('*');
                $this->db->from('usuarios');
                $usuarios = $this->db->get();
    return $usuarios;   
   }
}