<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class ZhuBo extends MY_Controller {
    protected $use_table;
    public function __construct() {
        parent::__construct();
        //载入model用小写
        $this->use_table='t_user';
        //$this->load->library('session');
        $this->load->library('pagination'); 
        $this->load->library('table');     
    }    
   
   


     


    //编辑主播的个人信息
    public function edit($uid=0){
        $uid= (int)($uid);
       
        
        if (isset($_POST['edit'])){
            $update_info1=array(
                'uid'=> $this->input->get('uid'),
                'username'=>addslashes(trim($this->input->post('username'))),
                'tel'=> addslashes(trim($this->input->post('tel'))),
                'province'=>addslashes(trim($this->input->post('province'))),
                'city'=>addslashes(trim($this->input->post('city'))),
                'gender'=>addslashes(trim($this->input->post('gender'))),
                'level'=>addslashes(trim($this->input->post('level'))),
                'sign'=>addslashes(trim($this->input->post('sign'))),
                'status'=>addslashes(trim($this->input->post('status'))),//是否认证
                'limit'=>addslashes(trim($this->input->post('limit')))
            );
             //如果是以认证用户
            if(isset($_POST['authored'])){
                $update_info['author_type']= addslashes(trim($this->input->post['author_type']));
                $update_info['real_name']= addslashes(trim($this->input->post['real_name']));
                $update_info['author_comment']= addslashes(trim($this->input->post['author_comment']));
                $update_info['account_img_forward']= addslashes(trim($this->input->post['account_img_forward']));   
                $update_info['account_img_back']= addslashes(trim($this->input->post['account_img_back']));
                $update_info['account_img_hand']= addslashes(trim($this->input->post['account_img_hand']));
                $update_info['account_number']= addslashes(trim($this->input->post['account_number']));
                $this->data->update('t_if_author',$update_info);
            }
            
            $this->data->update('t_user',$data);   
        }
        $data['user']=$this->data->join_author(array('uid'=>$uid));//根据uid获取该用户的信息
        $this->load->view('video/detail',$data);
     
    }
    /*
     * 上传图片
     * 还未绑定视图
     */
    public function do_upload(){
        $config['upload_path']      = './uploads/';
        $config['allowed_types']    = 'gif|jpg|png';
        $config['max_size']     = 100;
        $config['max_width']        = 1024;
        $config['max_height']       = 768;

        $this->load->library('upload', $config);
        if ( ! $this->upload->do_upload('userfile'))
        {
            $error = array('error' => $this->upload->display_errors());

            $this->load->view('upload_form', $error);
        }
        else
        {
            $data = array('upload_data' => $this->upload->data());

            $this->load->view('upload_success', $data);
        }
    }

    //账户管理
    public function account($uid){
        $uid= (int)($uid);
        $diamondchange=$_POST['diamondchange'];
        $accountlog=$_POST['accountlog'];
        //变更钻石的数量
        $this->data->update('t_prop',array('uid'=>$uid,'diamond'=>$diamondchange));
        //将操作日志存入数据库
        //$this->data->insert('table',array('uid'=>$uid,'accountlog'=>$accountlog),false);
        
    }
    /*
     * 账户日志等
     * 以下如需要待完善
     */
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

                    'ctime_from>='=> strtotime($this->input->post('ctime_from')),
                    'ctime_end<='=> strtotime($this->input->post('ctime_end'))
                    
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