<?php
include('httpful.phar');
	$body = json_encode($_POST);
	$url = "http://localhost/EspacoAluno/server/major/delete_major";
	$response = \Httpful\Request::put($url)->sendsJson()->body($body)->send();   
	header("Location: success.html");


?>