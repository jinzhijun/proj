<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class ZhuBo extends MY_Controller {
 
    public function __construct() {
        parent::__construct();
        //载入model用小写
        $this->use_table='t_user';
        //$this->load->library('session');
        $this->load->library('pagination'); 
        $this->load->library('table');     
    }    
   
    public function common(){
        
        if(isset($_POST['search'])){
            $this->search('common');
        }
        else{
            $data['user']=$this->data->join();
        }
    
        $this->load->view('zhubo_header');
        $this->load->view('metamenu');
        $this->load->view('video/zhubo_common',$data);
        $this->load->view('footer');
     }
    public function robot(){
         
        $config=array(
             'base_url'=>'http://localhost/ci/index.php/zhubo/robot',
             'total_rows'=> $this->data->count($this->use_table),
             'per_page'=>10,
        );
        $this->pagination->initialize($config);
        $data['page']=$this->pagination->create_links();
         
        if(isset($_POST['search'])){
            $this->search('robot');
        }
        else{
            $data['user']=$this->data->join();
        }
       // echo $this->data->get('user1');
         $data['title']='机器人列表';
         $this->load->view('zhubo_header',$data);
         $this->load->view('metamenu');
         $this->load->view('video/zhubo_robot',$data);
        // $this->load->view('zhubo_footer',$data);
        
     }
      public function author(){
        if(isset($_POST['search'])){
            $search_data=array(
                'uid'=> $this->input->post('uid'),
                'tel'=> $this->input->post('tel'),
                'username'=>$this->input->post('username'),
               
                //时间段范围内的数据库查询怎么查询？
                'ctime_from'=> $this->input->post('ctime_from'),
                'ctime_end'=> $this->input->post('ctime_end')
            );
            $data['t_user']=$this->data->search($search_data);
        }
        else{
            $data['user']=$this->data->join();
        }
          
         $this->load->view('zhubo_header');
         $this->load->view('metamenu');
         $this->load->view('video/zhubo_author',$data);
         $this->load->view('footer');
     }
     public function invalid(){
         
         
         /*
          * 搜索
          */
        if(isset($_GET['search'])){
           
            $_arr['keyword']= isset($_GET['keyword'])?safe_replace(trim($_GET['keyword'])):'';
            if($_arr['keyword']!=''){
                $search_data=array(
                    'uid'=> $this->input->get('uid'),
                    'tel'=> $this->input->get('tel'),
                    'username'=>$this->input->get('username'),

                    /*时间段范围内的数据库查询怎么查询？
                    'ctime_from'=> $this->input->post('ctime_from'),
                    'ctime_end'=> $this->input->post('ctime_end')
                     * 
                     */
                );
                
                $data['user']=$this->data->search($this->use_table,$search_data);//dir为升降序的标志
            }
        }
        else{
            $data['user']=$this->data->get_where($this->use_table,array('status'=>'common'));
        }
         
        
        $this->load->view('zhubo_header');
        $this->load->view('metamenu');
        $this->load->view('video/invalid');
        $this->load->view('footer');
         
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


     


    //编辑主播的个人信息
    public function edit($uid=0){
        $uid= intval($uid);
        //$data_info= $this->data->get_one(array('uid'=>$id));
        
        if (isset($_POST['edit'])){
            $data=array(
                'uid'=> $this->input->get('uid'),
                'username'=>$this->input->post('username'),
                'tel'=>$this->input->post('tel'),
                'province'=>$this->input->post('province'),
                'city'=>$this->input->post('city'),
                'gender'=>$this->input->post('gender'),
                'level'=>$this->input->post('level'),
                'sign'=>$this->input->post('sign'),
                'status'=>$this->input->post('status'),
                'limit'=>$this->input->post('limit'),
            
            );
             //echo '修改数据成功';
            
            $data['user']=$this->data->update('user1',$data);   
        }
        //从数据库中取出数据，无论是否有修改
        //$uid= $this->input->get('uid');
        
            $data['user']=$this->data->get_where('user',array('uid'=>$uid));//根据uid获取该用户的信息
        
        $this->load->view('video/detail',$data);
        //echo '修改数据成功';
    }
    //账户管理
    public function account($uid){
        $uid= intval($uid);
        $diamondchange=$_POST['diamondchange'];
        $accountlog=$_POST['accountlog'];
        //变更钻石的数量
        $this->data->update('user1',array('uid'=>$uid,'diamond'=>$diamondchange));
        //将操作日志存入数据库
        $this->data->insert('user1',array('uid'=>$uid,'accountlog'=>$accountlog),false);
        
    }
    //账户日志
    public function accountlog($uid){
         $uid= intval($uid);
         $result=$this->data->get_where('user1',array('uid'=>$uid));
         $data['accountlog']=$result->row()->accountlog;
         //$this->load->view('acocuntlog',$data);        
    }
    //兑换日志
    public function exchangelog($uid){
          $uid= intval($uid);
         $result=$this->data->get_where('user1',array('uid'=>$uid));
         $data['accountlog']=$result->row()->exchangelog;
         //$this->load->view('acocuntlog',$data);
    }
    //红票贡献版
    public function redcontribute($uid){
        $uid= intval($uid);
         $result=$this->data->get_where('user1',array('uid'=>$uid));
         $data['accountlog']=$result->row()->redcontribute;
         //$this->load->view('acocuntlog',$data);
    }
    public function search($v='common'){
        if(isset($_POST['search'])){
           
            $_arr['keyword']= isset($_POST['keyword'])? addslashes(trim($_POST['keyword'])):'';
            if($_arr['keyword']!=''){
                $search_data=array(
                    'uid'=> $this->input->post('uid'),
                    'tel'=> $this->input->post('tel'),
                    'username'=>$this->input->post('username'),

                    /*时间段范围内的数据库查询怎么查询？
                    'ctime_from'=> $this->input->post('ctime_from'),
                    'ctime_end'=> $this->input->post('ctime_end')
                     * 
                     */
                );
                
            $data['user']=$this->data->search('t_user',$search_data);//dir为升降序的标志
            }
        }
        if(!empty($data['user'])){ 
                $this->load->view('zhubo_header');
                $this->load->view('metamenu');
                $this->load->view('video/zhubo_'.$v,$data);
                $this->load->view('footer');
       }
       else redirect ($_SERVER['HTTP_REFERENCE']);
     }
    
}







?>