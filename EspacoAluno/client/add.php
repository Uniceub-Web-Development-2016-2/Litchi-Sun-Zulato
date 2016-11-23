<?php
include('httpful.phar');
	$create_array = array('login' => $_POST["login"], 'password' =>$_POST["password"], 'type' =>$_POST["type"]);
	$url = "http://localhost/EspacoAluno/server/user/create_user";
	$body = json_encode($create_array);
	$response = \Httpful\Request::post($url)->body($body)->sendsXml()->send();   
	echo $response->body;


?>