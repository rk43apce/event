<?php

function redirect($location  = null) {

	if($location){
		header("location: " . $location);
		exit();
	}
    
}


function exists($name) {
    return (isset($_SESSION[$name])) ? true : false;
}


function put($name, $value) {
    return $_SESSION[$name] = $value;
}


function get($name) {
    return $_SESSION[$name];
}

function delete($name) {
    if(exists($name)) {
        unset($_SESSION[$name]);
    }
}

function logout() {
	session_start();
	session_unset();
	session_destroy();
	$baseUrl =  "http://" . $_SERVER['SERVER_NAME'];
	redirect($baseUrl);
}


function validateUser($username, $password, $mysqli)
{	
	    # code...
	 $sql = "
		 SELECT id, name 
		 FROM users 
		 WHERE  email = '$username' AND  password = '$password'"; 

	if($result = $mysqli->query($sql)){
	    if($result->num_rows === 1){
	        $row = $result->fetch_array();	   
			$_SESSION['isLoggedIn'] = true;
			$_SESSION['id'] = $row['id'];

	        return true;     
	    }else{ 
	        return false;
	    }
	} else{           
	    return false;
	} 
}


function registerUser( $fullName ,$username, $password,  $mysqli)
{	
	    # code...
	 $sql = "INSERT INTO users (name, email, password) VALUES ('$fullName','$fullName',' $password')";

 	if($mysqli->query($sql)){
		$last_id = $mysqli->insert_id;
		$_SESSION['isLoggedIn'] = true;
		$_SESSION['id'] = $last_id;
		return true;   
		exit();
	} else{           
	    return false;
	} 

}





function checkUser($username,  $mysqli)
{	
	 $sql = " SELECT id FROM users WHERE  email = '$username'"; 

	if($result = $mysqli->query($sql)){
	    if($result->num_rows > 0){
	       return true;     
	    }else{ 
	        return false;
	    }
	} else{           
	    return false;
	} 
}



function getUser($id,  $mysqli)
{	
	 $sql = " SELECT name FROM users WHERE  id = '$id'"; 

	if($result = $mysqli->query($sql)){
	    if($result->num_rows === 1){
	    	$row = $result->fetch_array();	   

	    	$_SESSION['name'] = $row['name'];

	    }else{ 
	        return false;
	    }
	} else{           
	    return false;
	} 
}



function saveEvent( $user_id, $event_name ,$event_date, $event_location, $event_description,  $mysqli)
{	
	    # code...
	 $sql = "INSERT INTO events (user_id, event_name, event_date, event_location, event_description ) VALUES ('$user_id', '$event_name','$event_date',' $event_location',' $event_description')";	

	 if($mysqli->query($sql)){
	 	return true;
	 } else{
	 	false;
	 }


}

function getEvents( $user_id,  $mysqli)
{	
	 	    # code...
	 $sql = "
		 SELECT *
		 FROM events 
		 WHERE user_id =  '$user_id'"; 


		 if($result = $mysqli->query($sql)){

		 	if($result->num_rows > 0){

		 		var_dump($result);

		 		 return mysqli_fetch_array($result, MYSQLI_ASSOC);
		 	
		 	}
		 }

	// if($result = $mysqli->query($sql)){
	//     if($result->num_rows >0){

	//     $row = $result->fetch_array();
	//       return  $row;


	//     }else{ 
	//         return false;
	//     }
	// } else{           
	//     return false;
	// } 


}




