<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends Frontend_Controller{
    public function __construct(){
        parent :: __construct();
    }
    public function index(){
        $this->load->view('front_end/home');
    }
    function login(){
        $this->load->view('front_end/users_login');
    }
}