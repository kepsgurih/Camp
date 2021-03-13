<?php
Class Api extends CI_Controller{
    
    var $API ="";
    
    function __construct() {
        parent::__construct();
        $this->API="http://localhost/rest_ci/index.php";
        $this->load->library('session');
        $this->load->library('curl');
        $this->load->helper('form');
        $this->load->helper('url');
    }
    
    // menampilkan data kontak
    function index(){
        $data['datakontak'] = json_decode($this->curl->simple_get($this->API.'/kontak'));
        $this->load->view('kontak/list',$data);
    }
    
    // insert data kontak
}