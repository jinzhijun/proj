<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once 'Zhubo.php';
class Robot extends ZhuBo {
    public function __construct() {
        parent::__construct();
    }
    public function index(){
         
        $config=array(
             'base_url'=>'http://localhost/ci/index.php/zhubo/robot',
             'total_rows'=> $this->data->count($this->use_table),
             'per_page'=>10,
        );
        $this->pagination->initialize($config);
        $data['page']=$this->pagination->create_links();
         
        
         $data['user']=$this->data->join(array('status'=>'robot'));
         $data['title']='机器人列表';
         $this->load->view('zhubo_header',$data);
         $this->load->view('metamenu');
         $this->load->view('video/zhubo_robot',$data);
        // $this->load->view('zhubo_footer',$data);
        
    }
    public function search($v = 'robot') {
        parent::search($v);
    }
    public function edit($uid = 0) {
        parent::edit($uid);
    }
}
