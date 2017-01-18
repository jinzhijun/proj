<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class SystemMenu extends CI_Controller{
    public function __construct() {
        parent::__construct();
        $this->load->model('data');
        
        //尽量以数组形式加载，有时候分开写会加载不了
        $this->load->helper(array('url','form'));
        $this->load->library(array('table','pagination'));
    }
    
    public function index($page='index'){
       
            
        $this->load->view('video/'.$page);
       
    
    }
   

    
}





?>