<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class MY_Controller extends CI_Controller{
    protected $use_table;
    public function __construct() {
        parent::__construct();
       // $this->table=$table;
        $this->load->model('data');
        $this->load->helper('url','form');
   
        session_start();
        $this->check_login();
        
        
    }
    /*
     * 验证是否登录
     */
    public function check_login(){
       
        //var_dump($_SESSION['login_status']);
        $login=isset($_SESSION['login_status'])?$_SESSION['login_status']:'';
        //$this->showmessage($login, $link);
        if($login!='login'){
            $link='http://localhost/ci/index.php/login/login';
            header("Refresh:3;url={$link}");
            echo "<h1>提示</h1>";
            echo "<p>请登录后再进行后续操作</p>";
            die();
            
        }
    }
    /*
     * 显示信息并跳转定向
     */
    public function showmessage($msg,$link){
        header("Refresh:3 ; url={$link}");
        echo "<h1>提示</h1>";
        echo "<p>".$msg."</p>";
    }
    /*
     * 
     */
 
}
