<?php
include('httpful.phar');
$request = json_encode($_POST);
$get_request = 'http://172.22.51.134/aula8/user/create';
$response = \Httpful\Request::post($get_request)->sendsJson()->body($request)->send();
echo  $response->body;
