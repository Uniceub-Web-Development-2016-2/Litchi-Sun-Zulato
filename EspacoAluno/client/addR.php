<?php
include('httpful.phar');
	$create_array = array('name' => $_POST["name"], 'sex' =>$_POST["sex"], 'father_name' =>$_POST["father_name"], 'id' =>$_POST["id"], 'mother_name' =>$_POST["mother_name"], 'birth_date' =>$_POST["birth_date"], 'birth_city' =>$_POST["birth_city"], 'birth_UF' =>$_POST["birth_UF"], 'birth_country' =>$_POST["birth_country"], 'nacionality' =>$_POST["nacionality"], 'address' =>$_POST["address"], 'CEP' =>$_POST["CEP"], 'phone' =>$_POST["phone"], 'generalinfo' =>$_POST["generalinfo"], 'career' =>$_POST["career"], 'campus' =>$_POST["campus"], 'semester' =>$_POST["semester"], 'profilePicture' =>$_POST["profilePicture"], 'user_iduser' =>$_POST["user_iduser"]);
	$url = "http://40.84.50.253/EspacoAluno/server/registration/create_registration";
	$body = json_encode($create_array);
	$response = \Httpful\Request::post($url)->body($body)->sendsJson()->send();   
	header("Location: success.html");


?>
