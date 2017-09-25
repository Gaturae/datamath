<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $pv = M('Pvinfo');

        $number = $pv->where("id=1")->select();
        $data['pv'] = $number[0]['pv']+1;
        $pv->where("id=1")->save($data);


        $this->display();
    }

    public function php(){
		$json = json_encode($_POST);
        echo $json;    
    }

    public function login(){
        $this->display();
    }

    public function regist(){
        $this->display();
    }

    public function quit(){

        session_start();
        $_SESSION = array();
        if(isset($_COOKIE[session_name()]))
        {
            setCookie(session_name(),'',time()-3600,'/');
        }
        session_destroy();
        $this->redirect('/Home/Index/login');
    }
    public function  loginAction(){

        $user = M('User');
        $password = I('post.password');
        $username = I('post.username');
        $data = $user->where("username='$username'")->select();
        $error = array("code"=>"failed");


        if($password==$data[0]['password']&&$username==$data[0]['username']&&$username!=""){
            //session(nickname,$data[0]['nickname']);
            $success = array("code"=>"success","nickname"=>$data[0]['nickname']);
            $this->ajaxReturn($success,"JSON");

        }else{
            //session(nickname,null);
            $this->ajaxReturn($error,"JSON");
        }
        $this->ajaxReturn($error,"JSON");
    }

    public function  registAction(){


        $user = M("User"); // 实例化User对象
        $data['username'] = I('post.username');
        $data['password'] = I('post.password');
        $data['mail'] = I('post.mail');
        $data['nickname'] = I('post.nickname');
        $data['phone'] = I('post.phone');

        $username = I('post.username');
        $temp = $user->where("username='$username'")->select();
        if($username==$temp[0]['username']&&$username!=""){
            //session(nickname,$data[0]['nickname']);
            $error = array("code"=>"failed");
            $this->ajaxReturn($error,"JSON");

        }else{
            $user->add($data);
            $success = array("code"=>"success","nickname"=>$data['nickname']);
            $this->ajaxReturn($success,"JSON");
        }


    }

}