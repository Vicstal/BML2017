<?php 
class users extends CI_Model
{
	public function __construct()
	{
		$this->load->database();
	}
	public function huoqu()
	{
		$a=$this->db->get('users');//get 后加表名字
		return $a;
	}
}
 ?>