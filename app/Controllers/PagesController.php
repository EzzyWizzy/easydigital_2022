<?php 
namespace App\CI_Controller;


class PagesController extends CI_Controller{
public function login(){
        $data['title']='User Login';
         $this->load->view('users/pages-login',$data);
    }
public function process_login(){

	$user=$this->input->post('user');
	$pass=$this->input->post('pass');

	if($user==='ezekiel' && $pass==='12345'){
		$this->session->set_userdata(array('user'=>$user));
		$this->load->view('pages/dashboard.php');
	}else{
		$data['error']='Your username or password is not correct';
		redirect('users/pages-login',$data);
	}
}
public function register(){
        $data['title']='User Register';
        return view('users/pages-register',$data);

    }
}

?>