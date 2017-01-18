<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Prop extends MY_Controller{
    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
    }
    public function index($view='propslist'){
        if (!file_exists('application/views/video/'.$view.'.php')){
            show_404();
        }
        /*
         * 获取数据
         * $result=$this->data->get('t_prop');
         */
        $data['title']=$view;
     
        $this->load->view('prop_header');
        $this->load->view('metamenu');
        $this->load->view('video/'.$view);
        $this->load->view('footer');
        
        
        
    }

            
            
 }