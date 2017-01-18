<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Index extends MY_Controller{
    
    public function __construct() {
        parent::__construct();
        
    }
    /*
     * 首页
     * page=1-->快速导航
     * page=2-->网站数据统计
     * page=3-->系统日志
     * */
    public function index($page=1){
        $page= trim($page);
        if($page==1){
            try{
            $to_be_author=$this->data->count_all('t_user',array('author'=>'to_be_author'));//查询待认证总数
            $author_not_pass=$this->data->count_all('t_user',array('author'=>'author_not_pass'));//查询认证未通过
            $common= $this->data->count_all('t_user',array('status'=>'common'));
            $robot= $this->data->count_all('t_user',array('status'=>'robot'));
            $author= $this->data->count_all('t_user',array('status'=>'author'));
            $user_all= $this->data->count('t_user');
            $charge= $this->data->count('t_charge_log');//充值单
            $showing= $this->data->count_all('t_live',array('status'=>0));//上线，正在直播的数目
            $finished=$this->data->count_all('t_live',array('status'=>1));
           
            
            $data=array(
              'to_be_author'=>$to_be_author,
              'author_not_pass'=>$author_not_pass,
              'common'=>$common,
              'robot'=>$robot,
              'user_all'=>$user_all,
              'author'=>$author,
              'charge'=>$charge,
              'showing'=>$showing,
              'finished'=>$finished
            );
            }
            finally {
            $this->load->view('video/index',$data);
            }
           // exit();
        }
        if($page==2){
            $user_all= $this->data->count('t_user');//会员总数
            $robot= $this->data->count_all('t_user',array('status'=>'robot'));//无效账户
            $normal=$user_all-$robot;//有效账户
            $author= $this->data->count_all('t_user',array('status'=>'author'));//个人认证
            $data=array(
                'user_all'=>$user_all,
                'robot'=>$robot,
                'normal'=>$normal,
                'author'=>$author
            );
            $this->load->view('video/index_data_statistics',$data);
         
            
        }
        if($page==3){
            $this->db->select('handlelog');
            $query=$this->db->get('t_admin');
            $data['query']=$query;
            $data['ip']= isset($_SERVER['REMOTE_ADDR'])?$_SERVER['REMOTE_ADDR']:'';
            $this->load->view('video/index_systemlog',$data);
          
            
        }
        
    }
    

    
}



?>
