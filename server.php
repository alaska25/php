<?php

session_start();

class User{
	public function login($email, $password){
		if($email === "johnsmith@gmail.com" && $password === '1234'){
			$_SESSION['email'] = $email;
		}
	}
	public function logout(){
		session_destroy();
	}
}
$user = new User();
if($_POST['action'] === 'login'){
	$user->login($_POST['email'], $_POST['password']);
}else if($_POST['action'] === 'logout'){
	$user->logout();
}

header('Location: ./index.php');
