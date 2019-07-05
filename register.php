<?php
// Include config file
session_start();
require_once "config.php";
include('functions.php');


if(!isset($_POST) &&  !empty($_POST)){

  redirect('index.html');

}


  if(empty(trim($_POST["fullname"]))){

      $username_err = "Please enter a username.";
  }else{
    $fullname = trim($_POST["fullname"]);
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



  if(checkUser($username, $mysqli)){

    put('msg', 'Sorry this email id is already registered');

    redirect('./sign-up.php');

  }




if(registerUser($fullname,  $username, $password, $mysqli)){

    redirect('admin');
}else{
      put('msg', 'Sorry something went wrong please try again');

    redirect('./sign-up.php');
}