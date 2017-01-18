<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Video extends MY_Controller{
    public function __construct() {
        parent::__construct();
      
        $this->load->model('data');
        $this->load->helper('url');
    }
    //排序由js实现，对页面的静态数据进行排序，后端只需要把数据传送过去
    public function topic($topicid=''){
        
        //编辑和删除
        if (isset($_POST['eidt'])){
            $data_info=array(
                'description'=>$_POST['description'],
                'sort_num'=>$_POST['sort_num']
            );
            $this->data->update('t_topic',$data_info);
        }
        if (isset($_GEt['delete'])){
            $this->data->delete('t_topic',array('topicid'=>$topicid));
        }
        //从话题表中取出数据
        $result=$this->data->get('t_topic');
        if(isset($result)){
            $data['topic']=$result;
        }

        $this->load->view('video_header');
        $this->load->view('metamenu');
        //$this->load->view('video/video_topic',$data);
        $this->load->view('video/video_topiclist',$data);
        $this->load->view('footer');
    }
    
    public function showing(){


        if(isset($_POST['search'])){
            $search_data=array(
                'username'=> $this->input->post('username'),
                'topicname'=> $this->input->post('topicname'),
                'uid'=>$this->input->post('uid'),
               
                //时间段范围内的数据库查询怎么查询？
                'ctime_from'=> $this->input->post('ctime_from'),
                'ctime_end'=> $this->input->post('ctime_end')
            );
            $data['video']=$this->data->search($search_data);
        }
        else{
            $data['video']=$this->data->get('t_live');
        }
        

        $this->load->view('video_header');
        $this->load->view('metamenu');
        $this->load->view('video/video_showing');
        $this->load->view('footer');
           //如果刷新就重新载入
        if(isset($_POST['refresh'])){
           $this->load->view('view/viedo_showing',$data); 
            
        }     
    }
    
    public function finished(){
         if(isset($_POST['search'])){
            $search_data=array(
                'username'=> $this->input->post('username'),
                'roomid'=> $this->input->post('roomid'),
                'topicname'=>$this->input->post('topicname'),
               
                //时间段范围内的数据库查询怎么查询？
                'ctime_from'=> $this->input->post('ctime_from'),
                'ctime_end'=> $this->input->post('ctime_end')
            );
            $data['video']=$this->data->search($search_data);
        }
        else{
            $data['video']=$this->data->get('t_live');
        }
        
        $this->load->view('video_header');
        $this->load->view('metamenu');
   //    $this->load->view('video/video_topic',$data);
        $this->load->view('video/video_finished');
        $this->load->view('footer');
        
        
    }
    
    public function review(){
        if(isset($_POST['search'])){
            $search_data=array(
                'username'=> $this->input->post('username'),
                'roomid'=> $this->input->post('roomid'),
                'topicname'=>$this->input->post('topicname'),
                'or_online'=>$this->input->post('or_online'),
               
                //时间段范围内的数据库查询怎么查询？
                'ctime_from'=> $this->input->post('ctime_from'),
                'ctime_end'=> $this->input->post('ctime_end')
            );
            $data['video']=$this->data->search($search_data);
        }
        else{
            $data['video']=$this->data->get('t_live');
        }
        
        $this->load->view('video_header');
        $this->load->view('metamenu');
   //    $this->load->view('video/video_topic',$data);
        $this->load->view('video/video_playback');
        $this->load->view('footer');
        
    }
    
    public function push(){
        if(isset($_POST['search'])){
            $search_data=array(
                'username'=> $this->input->post('username'),
                'roomid'=> $this->input->post('roomid'),
                'push_status'=>$this->input->post('push_status'),
                'push_type'=> $this->input->post('push_type'),
                //时间段范围内的数据库查询怎么查询？
                'ctime_from'=> $this->input->post('ctime_from'),
                'ctime_end'=> $this->input->post('ctime_end')
            );
            $data['video']=$this->data->search($search_data);
        }
        else{
            $data['video']=$this->data->get('t_live');
        }
        
        $this->load->view('video_header');
        $this->load->view('metamenu');
   //    $this->load->view('video/video_topic',$data);
        $this->load->view('video/video_pushmessage');
        $this->load->view('footer');
        
        
    }
    public function monitor(){
        $this->load->view('video_header');
        $this->load->view('metamenu');
   //    $this->load->view('video/video_topic',$data);
        $this->load->view('video/video_monitor');
        $this->load->view('footer');
        
    }
    
    
    
}