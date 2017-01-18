<?php




/**
 * 后台用户相关
 */
class Admin extends CI_Model
{
    /**
     * 管理员表
     *
     * @var string
     */
    protected $t_admin = 'admin';

    function __construct()
    {
        parent::__construct();
        $this->load->database();//载入默认表
    }

    /**
     * 登录验证
     *
     * @param string $username
     * @param string $password
     * @param string $code_location
     * @param string $code_value
     * @return array|string
     */
    function checkAdmin($username, $password, $check_value = '')
    {
        $check=array(
            'username'=>$username,
            'password'=>$password,
            'check'=>$check_value
            
        );
        $query=$this->db->where($check);
        if ($query){
            return TRUE;
            
        }
        else{
            return false;
        }
    }   
        
    /**
     * 返回一个列表
     */
    function getList($table,$num,$offset)
    {
        return $this->db->get($table,$num,$offset);
    }

    /**
     * 新增加管理员
     *
     * @param $data
     * @return bool
     */

    
    
    function addAdmin($data)
    {
        if (empty($data['name']) || empty($data['password'])) {
            return false;
        }

        foreach ($data as $k => & $d) {
            if ($k === 'password') {
                $d = sha1(md5($data ['password']));
            }
        }

        return $this->db->insert($table, $data);
    }

    /**
     * 根据condition查询管理员信息
     *
     * @param $condition
     * @return mixed
     */
    function getAdminInfo($limit,$offset)
    {
        return $this->db->get('admin',$limt,$offset);
    }

    /**
     * 删除用户
     *
     * @param $condition
     * @return mixed
     */
    function del($table,$where)
    {//传入$where 和表名，删除表里的哪个字段
        return $this->db->delete($table,$where);
    }

    /**
     * 更新管理员列表
     *
     * @param $data
     * @param $condition
     * @return array|string
     */
    function update($talbe, $data)
    {
        $admin_info = $this->db->replace($table,$data);

        if (!$admin_info) {
            return FALSE;
        }

        //更新密码
        if ($admin_info ['password'] !== $data['password']) {
            $data ['password'] = sha1(md5($data ['password']));
        }

        $this->link->update($this->t_admin, $data, $condition);
        return $this->result(1);
    }
  

    /**
     * 验证当前密码
     *
     * @param $inp_pwd
     * @return bool
     */
    function checkPassword($inp_pwd)
    {
        $admin_info = $this->db->where($this->t_admin,array('name' => $_SESSION['u']));
        return $admin_info ['password'] === sha1(md5($inp_pwd));
    }

    /**
     * 更新密码
     *
     * @param $inp_pwd
     * @return array|string
     */
    function updatePassword($inp_pwd)
    {
        $np = sha1(md5($inp_pwd));
        $status = $this->update($this->t_admin, array('password' => $np), array('name' => $_SESSION['u']));

        if ($status) {
            return true;
        }

        return false;
    }
    //查询状态结果
     function sum($table,$staus)
    {   
       $this->db->where('status',$staus);
       $this->db->from($table);
       return $this->db->count_all_results();
    }
    //搜索
    function search($table,$data){
        $this->db->from($table);
        $this->db->or_like($data);
    }
}

class Log extends Admin{
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    public function addlog($data){
        return $this->db->insert('log',$data);
    }
    
    public function showlog($search_data=none){
        if($search_data=none){
            return $this->db->get('log');
        }
        else {
            return $this->search('log', $search_data);
        }
    }

    
    
    
}


?>

