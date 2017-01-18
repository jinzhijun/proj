<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Message extends MY_Controller{
     public function __construct() {
        parent::__construct();
        
    }
    public function index($view=1){
        if($view==1){
            $this->load->view('messagemanage_header');
            $this->load->view('metamenu');
            $this->load->view('video/messagemanage_smslist');
            $this->load->view('footer');
        }
        if($view==2){
            $this->load->view('messagemanage_header');
            $this->load->view('metamenu');
            $this->load->view('video/messagemanage_systemsms');
            $this->load->view('footer');
        }
        if($view==3){
            $this->load->view('messagemanage_header');
            $this->load->view('metamenu');
            $this->load->view('video/messagemanage_businessqueue');
            $this->load->view('footer');
        }
    }
 
    
}