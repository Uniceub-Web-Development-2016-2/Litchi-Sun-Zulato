<?php
include('httpful.phar');
	$create_array = array('discipline_idtable1' => $_POST["id"], 'name' =>$_POST["name"], 'id' =>$_POST["id"], 'active' =>$_POST["active"]);
	$url = "http://localhost/EspacoAluno/server/major/create_major";
	$body = json_encode($create_array);
	$response = \Httpful\Request::post($url)->body($body)->sendsJson()->send();   
	header("Location: success.html");


?>