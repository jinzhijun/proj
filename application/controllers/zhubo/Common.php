<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once 'Zhubo.php';
class Common extends ZhuBo{
    public function index(){
        $data['user']=$this->data->join(array('status'=>'common'));
        $this->load->view('zhubo_header');
        $this->load->view('metamenu');
        $this->load->view('video/zhubo_common',$data);
        $this->load->view('footer');
     }
    public function search($v = 'common') {
        parent::search($v);
    }
    public function edit($uid = 0) {
        parent::edit($uid);
    }
     
}
?>
