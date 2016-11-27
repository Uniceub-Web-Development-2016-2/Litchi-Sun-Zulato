<?php
include('httpful.phar');
	$create_array = array('ra' => $_POST["ra"], 'password' =>$_POST["password"], 'type' =>$_POST["type"], 'id' =>$_POST["id"], 'active' =>$_POST["active"]);
	$url = "http://40.84.50.253/EspacoAluno/server/user/create_user";
	$body = json_encode($create_array);
	$response = \Httpful\Request::post($url)->body($body)->sendsJson()->send();   
	header("Location: addRes.php");


?>
