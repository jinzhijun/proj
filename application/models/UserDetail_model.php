<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class UserDetail_model extends CI_Model{
    public function __construct() {
        parent::__construct();
        
        $this->load->database();
        
    }
  
    public function get_detail($num,$offset){
           
            $query=$this->db->get('user',$num,$offset);
            return $query;
    
        
    }
    public function get_detail_where(array $userdata){
        $query=$this->db->where($userdata);
        return $query;
    }
    public function orderby($desc){
        #通过desc标志进行排序
        
        if($desc==TRUE){
        $query=$this->db->orderby($uid,'desc');
        return $qurey;
        }
        else {
             $query=$this->db->orderby($uid,'asc');
             return $qurey;
        }
       
        
    }
}






?>