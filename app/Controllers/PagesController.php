<?php 
namespace App\Controllers;

class PagesController extends BaseController{

public function login(){
        $data['title']='User Login';
         return view('users/pages-login',$data);
    }

public function register(){
        $data['title']='User Register';
        return view('templates/header',$data).view('users/pages-register',$data).view('templates/footer');
    }
}

?>