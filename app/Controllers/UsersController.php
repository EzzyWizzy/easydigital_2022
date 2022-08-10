<?php
namespace App\Controllers;

class UsersController extends BaseController
{
	
	public function register(){
		$model = model(UsersModel::class);
		if ($this->request->getMethod()==='post' && $this->validate([
			'name' => 'required',
			'email'=>'required',
			'username'=> 'required',
			'password' => 'required',
		])) {
			$model->save([
				$this->request->getPost('name'),
				$this->request->getPost('email'),
				$this->request->getPost('username'),
				$this->request->getPost('password'),
			]);
			return view('users/success');
		}else{
			return view('templates/header',['title'=>'User Register']).view('users/pages-register').view('templates/footer');
	}
		}
		

}



 ?>