<?php
include('httpful.phar');
	
  $url = "http://localhost/EspacoAluno/server/user/search?ra=".$_POST["QUERY_STRING"];
  $response = \Httpful\Request::get($url)->send();
  echo $response->body;

