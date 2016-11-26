<?php
include('httpful.phar');
	$body = json_encode($_POST);
	$url = "http://localhost/EspacoAluno/server/user/delete_user";
	$response = \Httpful\Request::put($url)->sendsJson()->body($body)->send();   
	header("Location: success.html");


?>
