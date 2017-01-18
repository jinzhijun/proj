<?php

/*
 * 以下只呈现视图页面，未进行数据的处理
 * 如需要可后续填充
 * */
include_once 'Zhubo.php';
class Another extends ZhuBo{
    public function __construct() {
        parent::__construct();
    }
    public function index($page=1){
        if($page=1){
            $this->toauthor();
        }elseif($page=2){
            $this->authorfail();
        }elseif($page=3){
            $this->authorlist();
        }elseif($page=4){
            $this->levellist();
        }elseif($page=5){
            $this->familylist();
        }elseif($page=6){
            $this->flevellist();
        }


    }
     public function toauthor(){
         $this->load->view('zhubo_header');
         $this->load->view('metamenu');
         $this->load->view('video/to_be_author');
          $this->load->view('footer');
     }
     public function authorfail(){
         $this->load->view('zhubo_header');
         $this->load->view('metamenu');
         $this->load->view('video/author_not_pass');
          $this->load->view('footer');
     }
     public function authorlist(){
         $this->load->view('zhubo_header');
         $this->load->view('metamenu');
         $this->load->view('video/author_list');
          $this->load->view('footer');
     }
     public function levellist(){
      
         $this->load->view('zhubo_header');
         $this->load->view('metamenu');
         $this->load->view('video/family_level_list');
          $this->load->view('footer');
 

     }
     public function familylist(){
         $this->load->view('zhubo_header');
         $this->load->view('metamenu');
         $this->load->view('video/family_list');
         $this->load->view('footer');
     }
     public function flevellist(){
         $this->load->view('zhubo_header');
         $this->load->view('metamenu');
         $this->load->view('video/family_level_list');
         $this->load->view('footer');
     }

    
}