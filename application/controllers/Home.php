<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    
function __construct() {
    parent::__construct();
    $this->load->helper("url");
    $this->load->library("form_validation");
    $this->load->helper("form");
    date_default_timezone_get("America/Rio_de_Janeiro");
    }
   
    function index(){
        redirect("login");
    }
    
    function dashboard(){
         $this->load->view('view_home');
    }
}
