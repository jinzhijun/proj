<?php

/*
 * 系统设置页面
 * 简单的页面呈现
 * 未进行数据的处理，如需要可后续配置添加
 * */
class System extends MY_Controller{
    public function __construct() {
        parent::__construct();
        
     
    }
    
    public function index_($page='index'){
       
            
        $this->load->view('video/'.$page);
       
    
    }
    private function view($view){
        $this->load->view('systemset_header');
        $this->load->view('metamenu');
        $this->load->view($view);
        $this->load->view('footer');
    }
    public function index($opt=1){
        $opt= trim($opt);
        //option=1 载入广告设置页面
        if($opt==1){
            $view='video/systemset_advertisement';
            $this->view($view);
        }
        //option=2 载入兑换规则页面
        if($opt==2){
            $view='video/systemset_exchangepro';
            $this->view($view);
        }
        
         //option=3 载入购买规则页面
        if($opt==3){
            $view='video/systemset_purchasepro';
            $this->view($view);
        }
         //option=4 载入广告列表
        if($opt==4){
            $view='video/systemset_adlist';
            $this->view($view);
        }
         //option=5 载入广告区域
        if($opt==5){
            $view='video/systemset_adarea';
            $this->view($view);
        }
        //option=6，载入管理员分组列表
        if($opt==6){
            $view='video/systemset_managergroup';
            $this->view($view);
        }
        //option=7，载入管理员分组回收站
        if($opt==7){
            $view='video/systemset_exchangepro';
            $this->view($view);
        }
         //option=8，载入管理员列表
        if($opt==8){
            $view='video/systemset_managerlist';
            $this->view($view);
        } 
        //option=9，载入管理员会回收站
        if($opt==9){
            $view='video/systemset_exchangepro';
            $this->view($view);
        }
        //option=10，载入集群组列表
        if($opt==10){
           $view='video/systemset_managerrecovery';
            $this->view($view);
        }
        //option=11，载入靓号管理
        if($opt==11){
            $view='video/systemset_account';
            $this->view($view);
        }
        else{
            //redirect();
            return;
        }   
       
    }
    //关于设置输入的页面
    public function set($opt='1'){
        $opt= trim($opt);
        //载入系统配置页面
        if($opt=='1'){
            $view='video/systemset_systemconfiguration';
            $this->view($view);
        }
        //载入手机端配置
        if($opt=='2'){
            $view='video/systemset_mobile';
            $this->view($view);
        }
        //载入脏字库配置
        if($opt=='3'){
            $view='video/systemset_dirty';
            $this->view($view);
        }
        
        
    }
   

    
}





?>