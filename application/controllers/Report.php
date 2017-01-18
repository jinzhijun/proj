<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Report extends MY_Controller{
    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        
    }
    public function index($view=1){
        /*
        if(!file_exists('application/views/video/'.$view.'.php')){
            show_404();
        }
         * 
         */
        if($view==1){
            $this->load->view('report_header');
            $this->load->view('metamenu');
            $this->load->view('video/reporttype');
            $this->load->view('footer');
        }
        if($view==2){
            $this->load->view('report_header');
            $this->load->view('metamenu');
            $this->load->view('video/reportlist');
            $this->load->view('footer');
        }
    }
    
}
