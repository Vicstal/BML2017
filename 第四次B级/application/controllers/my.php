<?php 
class my extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('users');//调用users.php
	}
    public function ligong()
    {
  	echo 'my-理工';

    $first=$this->users->get(); //users.php中调用get函数
    $result=$first->result();  //CI的result函数
    $bm['username']=$result[0]->users;//数组键值为‘username’的赋值&&键是数据库的字段名
      $this->load->view('red', $bm); //调用red.php，读出信息，
    }
}
?>