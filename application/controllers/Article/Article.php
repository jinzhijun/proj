<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Article extends CI_Controller{
    public function __construct() {
        parent::__construct();
        $this->load->model('data');
        $this->load->helper(array('url','form'));
    }
    public function index($page='cgl'){
        if($page=='cgl'){
            $this->cgl();
            $this->load->view('video/article_categorylist');
        }
        elseif($page=='cgr'){
            $this->load->view('video/article_categoryrecovery');
        }
        elseif($page=='al'){
             $this->load->view('video/article_list');
        }
        elseif ($page=='ap') {
         $this->load->view('video/article_problem');
        }
        elseif ($page=='ar') {
             $this->load->view('video/article_recovery');
        }
        
    }
    public function cgl(){
        //这边进行处理
    }
}
    

