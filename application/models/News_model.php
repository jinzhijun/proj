<?php
class New_model extends CI_Model{

	public function __construct(){
		#数据库类通过$this->db 对象访问数据库
		$this->load->database();
	}

}


?>