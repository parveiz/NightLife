<?php
include_once 'model/loginModel.php';

class LoginController{
	public $model;
	
	public function __construct(){
		$this->model = new LoginModel();
	}
	
}