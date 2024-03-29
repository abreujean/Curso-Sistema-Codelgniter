<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Autentica extends CI_Controller {
function __construct(){
    parent::__construct();
    $this->load->model('model_usuario');
    $this->load->helper('url');
}
   function index(){
       $this->load->library('form_validation');
       
       $this->form_validation->set_message('requirede','Campo %s obrigatorio');
       $this->form_validation->set_rules('login', 'Usuário', 'trim|required');
       $this->form_validation->set_rules('senha', 'Senha', 'trim|required|callback_database');
       
    if($this->form_validation->run()==FALSE){
//        $this->load->view('login');
           redirect('login','refresh');
            
    } else{ 
        redirect('home/dashboard','refresh');
//            $login=$this->input->post('login');
//            var_dump($login);
//            $senha=$this->input->post('senha');
//            var_dump($senha);
       
    }
  }
  
  function database($senha){
      $login=$this->input->post('login');

      $result=$this->model_usuario->login($login, $senha);
      $usuarioid='';
      $usuarionome='';
      if($result){
         return true;
      } else {
          return false;
      }
  }
  
}