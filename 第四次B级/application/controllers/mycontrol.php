<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class mycontrol extends CI_Controller {
    public function check_login(){  
    	// 从myview中穿过来username和password的内容分别
    	// 赋值到变量$username和$password中
            $username = $this->input->post('username');  
            $password = $this->input->post('password');  
          //加载数据库  
            $this->load->model('mymodel'); 
            // 用mymodel中的get_by_name_pwd函数判断$username和$password的值
            // 跟数据库里面的值是否相等
            $row = $this->mymodel->get_by_name_pwd($username,$password);  
            // 若匹配，则调用succsess.php
            if($row){  
                $this->load->view('success');  
            } 
             // 若不匹配，则调用login.php
            else{  
                $this->load->view('login');  
            }  
        }  
}