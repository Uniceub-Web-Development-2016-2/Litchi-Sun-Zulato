
<?php

include('httpful.phar');
$get_request = "http://127.0.0.1/EspacoAluno/server/user/search?login={$_GET['login']}";
$response = \Httpful\Request::get($get_request)->send();
echo  $response->body;
