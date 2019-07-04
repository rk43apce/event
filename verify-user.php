<?php
// Include config file
session_start();
require_once "config.php";
include('functions.php');


if(!isset($_POST) ||  empty($_POST)){

	redirect('index.html');
}

if(empty(trim($_POST["username"]))){

    $username_err = "Please enter a username.";
}else{
	$username = trim($_POST["username"]);
}

if(empty(trim($_POST["password"]))){
	
    $password_err = "Please enter a username.";
}else{
	$password = trim($_POST["password"]);
}



if (!validateUser($username, $password, $mysqli)) {
	    put('msg', 'Invalid email/password ');
	redirect('./');
}

redirect('./admin/');








