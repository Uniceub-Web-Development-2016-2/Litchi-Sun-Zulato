<?php
include('httpful.phar');
	$body = json_encode($_POST);
	$url = "http://40.84.50.253/EspacoAluno/server/major/update_major";
	$response = \Httpful\Request::put($url)->sendsJson()->body($body)->send();   
	header("Location: success.html");


?>
