<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Data extends CI_Model{
    
    public function __construct() {
        parent::__construct();
        $this->load->database();//载入默认表
    }
    /*
     * 设置数据库
     */
    
    function set_db($db_config=''){
            $this->db= $this->load->database($db_config,TRUE);
    }
    
    /**
     * 设置表名
     * @param type $tablename
     * @param type $tablepre
     */
    function set_table_name($tablename='',$tablepre='t_sys_'){
		$this->db_tablepre = $tablepre;
		$this->table_name = $this->db_tablepre.$this->table_name;
    }
    
    /*
     * 搜索
     * 
     */
    function search($table,$data){
        $this->db->from($table);
        $this->db->or_like($data);
        return $this->db->get()->result_array();
    }
	
    /**
     * select
     */
    public function select($table,$array){
        $this->db->select($array);
        return $this->db->get($table)->result_array();
    }
    /*
     * 查询所有字段所有行
     */
    public function get($table){
     
        $query=$this->db->get($table)->result_array();
        return $query;
   
    }
    /*
     * 带有条件的查询
     */
    public function get_where($table,$array,$order=''){
        if(!empty($order))$this->db->order_by($order); 
        $query=$this->db->get_where($table,$array)->result_array();
        return $query;
       // var_dump($query);
    }
    
    /*
     * join 查询，写死用于用户和用户所拥有的资产
     */
    public function join($status){
        $this->db->select('*');
        $this->db->from('t_user');
        $this->db->where($status);
        $this->db->join('t_prop', 't_prop.uid = t_user.uid','left');
        
        return $this->db->get()->result_array();
    }
    /*
     * 和认证信息的左连接查询
     */
    public function join_author($array){
        $this->db->select('*');
        $this->db->from('t_user');
        $this->db->where($array);
        $this->db->join('t_if_author', 't_if_author.uid = t_user.uid','left');
        
        return $this->db->get()->result_array();
        
    }
    /*
     * 更新
     */
    function update($talbe, $data)
    {
        $admin_info = $this->db->replace($table,$data);
        if (!$admin_info) {
            return FALSE;
        }
        return TRUE;     
    }

    
    /**
    * 执行添加记录操作
    * @param $data 要增加的数据，参数为数组。数组key为字段值，value为数据取值
    * @param $return_insert_id 是否返回新建ID号,默认是
    * @return boolean
    */
    public function insert($table,$data, $return_insert_id = true) {
		
	$this->db->insert($table, $data);
	if($return_insert_id)return $this->db->insert_id();
    }
        
    /*
     * 执行删除记录操作
     * 
     */
    public function delete_($table,$where) {
        return $this->db->delete($table, $where);
    }
    /*
     * 查询特定条件的总数  传入查询表和查询条件
     */
    function count_all($table,$condition)
    {   
       $this->db->where($condition);
       $this->db->from($table);
       $num=$this->db->count_all_results();
       $num=isset($num)?$num:0;
       return $num;
    }
    function  count($table){
        $num= $this->db->count_all_results($table);
        $num=isset($num)?$num:0;
        return $num;
    }
   
    
    public function sort($orderby=''){
        $this->db->sort_by($orderby);
    }
    
}


?>