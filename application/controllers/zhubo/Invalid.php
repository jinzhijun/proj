<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once 'Zhubo.php';
class Invalid extends ZhuBo{
    public function __construct() {
        parent::__construct();
    }
    public function index(){
            
        $data['user']=$this->data->join(array('status'=>'invalid'));
        
         
        
        $this->load->view('zhubo_header');
        $this->load->view('metamenu');
        $this->load->view('video/invalid');
        $this->load->view('footer');

    }
    public function search($v = 'invalid') {
        parent::search($v);
    }
    public function edit($uid = 0) {
        parent::edit($uid);
    }

            
}
