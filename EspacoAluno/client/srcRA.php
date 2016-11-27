<?php 
include('httpful.phar');
  $url = "http://40.84.50.253/EspacoAluno/server/user/search?ra=".$_POST[ra];
  $response = \Httpful\Request::get($url)->send();
  echo $response->body;


?>