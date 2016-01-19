<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Usuarios extends CI_Controller {
	function index()
	{
         if(isset($_POST['usuario'])){
                    $datos= array(
                         'idUsuario'=> 'NULL',             
                        'nombresUsuario'=> $_POST['nombreUsuario'],
                        'apellidosUsuario'=> $_POST['apellidosUsuario'],
                        'nombreUsuario'=> $_POST['usuario'],
                        'claveUsuario'=> md5($_POST['clave']),
                        'idEmpresa'=> $_POST['empresa'],
                        'statusUsuario'=> '1',
                    );
                  $this->load->model('modelo_usuarios');
              echo     $this->modelo_usuarios->agregarUsuario($datos);
                                  }
        if($_GET['cat']=='1'){
                           
       
                
                  $this->load->model('modelo_combos');
                $datos['combo'] = $this->modelo_combos->getComboEmpresas();
                $this->load->view('header');
		$this->load->view('usuarios/add',$datos);   
               
        }
         if($_GET['cat']=='2'){
                 $this->load->model('modelo_usuarios');
                $datos['usuarios'] = $this->modelo_usuarios->getUsuarios();
                $this->load->view('header');
		$this->load->view('usuarios/ver',$datos);   
         }
                
                }
}
?>