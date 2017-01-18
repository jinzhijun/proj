<?php

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/12/17
 * Time: 10:34
 */
class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('data');
        $this->load->library('form_validation');
        session_start();
    }
    /*
     * 登录页面
     */
    public function index()
    {
       
        $this->load->library('form_validation');
        $this->load->helper('captcha');
        //生成验证码
        $captcha_config=$this->config->item('captcha_config');
        $cap= create_captcha($captcha_config);
        $data['captcha_url']=$cap['image'];//生成一个img标签，传入视图
        $_SESSION['captcha_word']=$cap['word'];  
        $this->form_validation->set_rules('username', 'username', 'required');
        $this->form_validation->set_rules('password', 'password', 'required');
        if($this->form_validation->run()==FALSE){
            // 表单验证失败
            $this->load->view('video/login',$data);
        //    exit();
        }
      
            
    }
    /*
     * 登录处理
     * */
    public  function handle(){
        if(isset($_POST['submit'])){
            //验证验证码
            $captcha=$this->input->post('captcha');
            $captcha= isset($captcha)? strtolower(trim($captcha)):'';
            $word= strtolower($_SESSION['captcha_word']);
            if($captcha!=$word ||$captcha=='') {
                $this->showmessage('你的验证码错误，请重新登录',site_url('login/index'));
                exit();
            }
            //帐号密码验证
            $adminname=isset($_POST['username'])?addslashes(trim($_POST['username'])):NULL;
            $password=isset($_POST['password'])?addslashes(trim($_POST['password'])):NULL;
            $result= $this->data->get_where('t_admin',array('adminname'=>$adminname,'password'=>$password));
            if (!empty($result)) {
            /*
             * 若是需要把cookie保存时间存入数据库则开启，也可以在配置中进行修改
             $query=$this->data->get();
             $cookiekeeptime=$query->row()->cookiekeeptime;
             $lifetime=empty($cookiekeeptime)?60*15:$cookiekeeptime;
             */
             /*
              * 设置session时间，默认为15分钟
              * */
             $lifetime=60*15;
             session_set_cookie_params($lifetime);
             $_SESSION['adminname'] = $_POST['username'];
             $_SESSION['login_status'] = 'login';//设置是否登录的状态 ，在其他页面开头验证这个状态，如果登录则继续，如果未登录则exit。
             //var_dump($_SESSION['login_status']);
             redirect('/index/index');
             //exit();
             }
            else{
                $this->showmessage('你的帐号或者密码错误，请重新登录','http://localhost/ci/index.php/login/login');

            }
                
        }
      
    }
    /*
     * 退出登录
     */
    public function logout(){
        session_destroy();
        //$this->showmessage($_SESSION['login_status'], $link);
        redirect('login/index');
        
    }
    /*
     * 修改密码
     */
    public function cpassword(){
        $newpsw=$_POST['newpsw'];
        $newpsw=isset($newpsw)?trim($newpsw):'';
        if ($newpsw!=''){
            $this->data->update('table',array('username'=>$_SESSION('username'),'password'=>$newpsw));
        }
    }
    public function showmessage($msg,$link){
        header("Refresh:3 ; url={$link}");
        echo "<h1>提示</h1>";
        echo "<p>".$msg."</p>";
        //sleep(3);
       // redirect($link);
        
    }
    
}