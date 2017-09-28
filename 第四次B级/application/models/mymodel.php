
    <?php  
    defined('BASEPATH') OR exit('No direct script access allowed');  
    class mymodel extends CI_Model{  
        //查询 
        public function get_by_name_pwd($name,$pwd)
        {  
            $arr=array(  
            'username' => $name,   //键是数据库的字段名  
                'password'=>$pwd ,      //键是数据库的字段名  
            );  
            $query=$this->db->get_where('db',$arr);//可以根据用户的名字和密码去查询数据库  
           return  $query->row();
           //返回匹配的结果  
        }  
    }  
    ?>