<?php
// Include config file
session_start();
require_once "../config.php";
include('../functions.php');


if(!isset($_POST) &&  !empty($_POST)){

  redirect('index.html');

}


  if(empty(trim($_POST["event_name"]))){

      $username_err = "Please enter a username.";
  }else{
    $event_name = trim($_POST["event_name"]);
  }


  if(empty(trim($_POST["event_date"]))){

      $username_err = "Please enter a username.";
  }else{
    $event_date = trim($_POST["event_date"]);
  }

  if(empty(trim($_POST["event_location"]))){
    
      $password_err = "Please enter a username.";
  }else{
    $event_location = trim($_POST["event_location"]);
  }

  if(empty(trim($_POST["event_description"]))){
    
      $password_err = "Please enter a username.";
  }else{
    $event_description = trim($_POST["event_description"]);
  }




if(saveEvent(get('id'), $event_name,  $event_date, $event_location, $event_description, $mysqli)){

  redirect('./');
}