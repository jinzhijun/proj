<?php

include_once 'Zhubo.php';
class Author extends ZhuBo{
    public function __construct() {
        parent::__construct();
    }
    public function index(){
        $data['user']=$this->data->join(array('status'=>'author'));
        
          
         $this->load->view('zhubo_header');
         $this->load->view('metamenu');
         $this->load->view('video/zhubo_author',$data);
         $this->load->view('footer');
    }
    public function search($v = 'common') {
        parent::search($v);
    }
    
    
}




