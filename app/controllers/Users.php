<?php
class Users extends Controller{
	public function __construct(){

	}

	public function index(){
		$this->view('users/login');
	}
}
?>