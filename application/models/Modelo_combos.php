<?php
class modelo_combos extends CI_Model { 
   public function __construct() {
      parent::__construct();
   }

   public function getComboEmpresas() 
           {
                $this->db->select('idEmpresa,nombreEmpresa');
                $this->db->from('empresa');
                $consulta = $this->db->get();
                $i=0;
              foreach($consulta->result() as $row){
                  $resultado[$i]['idEmpresa']=$row->idEmpresa;
                   $resultado[$i]['nombreEmpresa']=$row->nombreEmpresa;
                  
                  $i++;
              }
                
                return $resultado;
           }
   
   }
