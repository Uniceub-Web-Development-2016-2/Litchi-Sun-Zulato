<?php
include('httpful.phar');
	$url = "http://localhost/EspacoAluno/server/user/search";
	$response = \Httpful\Request::get($url)->send();   
	echo $response->body;


?>
